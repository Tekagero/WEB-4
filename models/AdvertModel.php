<?php

require_once "DbModel.php";

class AdvertModel extends DbModel
{
    private int $pageSize = 4;

    function getFirstAdverts(): array|false
    {
        $sql = <<< END
                SELECT id, uuid, src, upload_date, price, description
                FROM adverts
                ORDER BY id DESC
                LIMIT ?
        END;
        $sth = $this->dbh->prepare($sql);
        $sth->bindValue(1, $this->pageSize, PDO::PARAM_INT);
        $sth->execute();
        return $sth->fetchAll(PDO::FETCH_ASSOC);
    }

    function getAdvertByUUID(string $uuid)
    {
        $sql = <<< END
            SELECT description, upload_date, src, login, uuid, price
            FROM adverts a
            LEFT JOIN users ON a.user_id = users.id
            WHERE uuid = ?
        END;
        $sth = $this->dbh->prepare($sql);
        $sth->bindValue(1, $uuid);
        $sth->execute();
        return $sth->fetch(PDO::FETCH_ASSOC);
    }

    function getAdvertsByOffset($offset): array
    {
        $sql = <<< END
            SELECT a.id, uuid, src, upload_date, description, login, price
            FROM adverts a
                LEFT JOIN users u ON a.user_id = u.id
            WHERE a.id < ?
            ORDER BY a.id DESC
            LIMIT ?;
        END;
        $sth = $this->dbh->prepare($sql);
        $sth->bindValue(1, $offset, PDO::PARAM_INT);
        $sth->bindValue(2, $this->pageSize, PDO::PARAM_INT);
        $sth->execute();
        return $sth->fetchAll(PDO::FETCH_ASSOC);
    }

    public function setPageSize(int $pageSize): void
    {
        $this->pageSize = $pageSize;
    }
}