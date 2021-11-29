<!doctype html>
<html lang="ru">
<?php
include 'php/head.php';
include 'php/products.php';
?>
<body>
<div class="container">
    <div class="row">
        <div class="col-12 mb-3">
            <img class="img-fluid w-100 d-none d-sm-block" src="img/pc/REM_BANNER_04_MEN_1228x340.jpg">
            <img class="img-fluid w-100 d-block d-sm-none pt-3" src="img/mobile/REM_BANNER_MOB_04_320x208.jpg">
        </div>
    </div>
    <div class="row pt-3">
        <?php for ($index = 0; $index < 5; $index++) : ?>
            <?php include 'php/product.php'; ?>
        <?php endfor; ?>
    </div>
    <p class="pt-3"><a
                href="https://www.mvideo.ru/product-list-page?q=remington&category=mashinki-dlya-strizhki-volos-143"
                class="fw-bold">Все машинки для стрижки Remington</a></p>
    <div class="row pt-5">
        <div class="col-12 mb-5">
            <img class="img-fluid w-100 d-none d-sm-block" src="img/pc/REM_BANNER_05_MEN_1228x340.jpg">
            <img class="img-fluid w-100 d-block d-sm-none" src="img/mobile/REM_BANNER_MOB_05_320x208.jpg">
        </div>
    </div>
    <div class="row pt-3">
        <?php for ($index = 5; $index < 15; $index++) : ?>
            <?php include 'php/product.php'; ?>
        <?php endfor; ?>
    </div>
    <p class="pt-3"><a
                href="https://www.mvideo.ru/product-list-page?q=remington&category=trimmery-142"
                class="fw-bold">Все триммеры Remington</a></p>
</div>
<?php
include 'php/scripts.php';
?>
</body>
</html>