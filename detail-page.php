<?php /* Детальная страница скриншота */ ?>

<?php
require_once 'models/AdvertModel.php';
$uuid = $_GET['uuid'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>ScreenshotHub</title>
</head>
<body>
<?php
$ads = (new AdvertModel())->getAdvertByUUID($uuid);
?>
<?php require_once "parts/sign-in-modal.php" ?>
<?php require_once "parts/sign-up-modal.php" ?>

<div class="wrapper">
    <div class="container">
        <?php require_once "parts/header.php" ?>
        <main class="detail-information main">
            <img class="photo detail-information__poster"
                 src="data:image/jpeg;base64, <?= base64_encode($ads['src']) ?>"
                 alt="Нет фото"/>
            <h1 class="detail-information__author">Автор: <?= $ads['login'] ?></h1>
            <h1 class="detail-information__header"><?= $ads['description'] ?></h1>
            <h1 class="detail-information__header">Цена: <?= $ads['price'] ?>руб</h1>
            <span class="detail-information__content">Дата загрузки: <?= $ads["upload_date"] ?></span>
        </main>
    </div>
    <?php require_once "parts/footer.php" ?>
</div>

<script src="js/script.js"></script>
</body>
</html>
