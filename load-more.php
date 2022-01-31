<?php
require_once 'models/AdvertModel.php';
$offset = $_GET['offset'];

$ads = (new AdvertModel())->getAdvertsByOffset($offset);
?>

<?php foreach ($ads as $ad): ?>
    <div class="advertising">
        <a href="">
            <p><img class="photo" src="data:image/jpg;base64, <?php echo base64_encode($ad['src']) ?>" alt=""></p>
        </a>
        <div class="advertisingInformation">
            <span class="advertisingName"><?= $ad['description'] ?></span>
            <span class="price"><?= $ad['price'] ?> руб</span>
        </div>
    </div>
<?php endforeach; ?>


