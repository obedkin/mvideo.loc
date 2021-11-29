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
            <img class="img-fluid w-100 d-none d-sm-block" src="img/pc/REM_BANNER_06_GIRL_1228x340.jpg">
            <img class="img-fluid w-100 d-block d-sm-none pt-3" src="img/mobile/REM_BANNER_MOB_06_320x208.jpg">
        </div>
    </div>
    <div class="row pt-5">
        <?php for ($index = 15; $index < 24; $index++) : ?>
            <?php include 'php/product.php'; ?>
        <?php endfor; ?>
    </div>
    <p class="pt-3"><a
                href="https://www.mvideo.ru/product-list-page?q=remington&category=feny-i-fen-shhetki-4889"
                class="fw-bold">Все фены и фен-щетки Remington</a></p>
    <div class="row pt-5">
        <div class="col-12 mb-5">
            <img class="img-fluid w-100 d-none d-sm-block" src="img/pc/REM_BANNER_07_GIRL_1228x340.jpg">
            <img class="img-fluid w-100 d-block d-sm-none" src="img/mobile/REM_BANNER_MOB_07_320x208.jpg">
        </div>
    </div>

    <div class="row pt-3">
        <?php for ($index = 24; $index < 29; $index++) : ?>
            <?php include 'php/product.php'; ?>
        <?php endfor; ?>
    </div>
    <p class="pt-3"><a
                href="https://www.mvideo.ru/product-list-page?q=remington&category=vypryamiteli-volos-4895"
                class="fw-bold">Все выпрямители для волос Remington</a></p>
    <div class="row pt-5">
        <div class="col-12 mb-5">
            <img class="img-fluid w-100 d-none d-sm-block" src="img/pc/REM_BANNER_08_GIRL_1228x340.jpg">
            <img class="img-fluid w-100 d-block d-sm-none" src="img/mobile/REM_BANNER_MOB_08_320x208.jpg">
        </div>
    </div>
    <div class="row pt-3">
        <?php for ($index = 29; $index < 37; $index++) : ?>
            <?php include 'php/product.php'; ?>
        <?php endfor; ?>
    </div>
    <p class="pt-3"><a
                href="https://www.mvideo.ru/product-list-page?q=remington&category=elektroshhipcy-4892"
                class="fw-bold">Все щипцы для завивки Remington</a></p>
</div>
<?php
include 'php/scripts.php';
?>
</body>
</html>