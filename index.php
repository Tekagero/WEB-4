<!DOCTYPE html>
<html lang="en">

<?php session_start(); require_once "models/AdvertModel.php" ?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1"> -->
    <link rel="shortcut icon" href="img/smile.ico" type="image/ico">
    <link rel="stylesheet" href="css/style.css">
    <title>Объявления</title>
</head>

<body>


<?php
    $model = new AdvertModel();
    $ads = $model->getFirstAdverts();
?>
<?php require_once "parts/sign-in-modal.php"?>
<?php require_once "parts/sign-up-modal.php"?>

<div class="wrapper">
    <div class="container">
        <?php require_once "parts/header.php" ?>

        <main class="main">
            <div class="ads">
                <?php foreach ($ads as $ad): ?>
                <div class="advertising">
                    <a href="detail-page.php?uuid=<?= $ad['uuid']?>">
                        <p><img class="photo" src="data:image/jpeg;base64, <?php echo base64_encode($ad['src']) ?>" alt=""></p>
                    </a>
                    <div class="advertisingInformation">
                        <span class="advertisingName"><?= $ad['description'] ?></span>
                        <span class="price"><?= $ad['price'] ?> руб</span>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
            <?php $lastId = $ads[count($ads) - 1]['id'] ?>
            <!-- передаем id последнего прогруженного обзора -->
            <a class="btn btnLoadMore"
               last-ad-id="<?= $lastId ?>">
                Показать еще
            </a>
        </main>
    </div>

    <?php require_once "parts/footer.php"; ?>

</div>
<script src="js/script.js"></script>
</body>

</html>