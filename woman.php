<!doctype html>
<html lang="ru">
<?php
include 'php/head.php';
include 'php/products.php';
?>
<body>
<div class="container p-5">
    <div class="row">
        <div class="col-12 mb-3">
            <img class="img-fluid w-100 d-none d-sm-block" src="img/pc/REM_BANNER_06_GIRL_1228x340.jpg">
            <img class="img-fluid w-100 d-block d-sm-none" src="img/mobile/REM_BANNER_MOB_04_320x208.jpg">
        </div>
    </div>
    <div class="row pt-3">
        <?php for ($index = 15; $index < 24; $index++) : ?>
            <?php include 'php/product.php'; ?>
        <?php endfor; ?>
    </div>
    <div class="row pt-5">
        <div class="col-12 mb-5">
            <img class="img-fluid w-100 d-none d-sm-block" src="img/pc/REM_BANNER_05_MEN_1228x340.jpg">
            <img class="img-fluid w-100 d-block d-sm-none" src="img/mobile/REM_BANNER_MOB_05_320x208.jpg">
        </div>
    </div>
    <div class="row pt-3">
        <?php for ($index = 24; $index < 29; $index++) : ?>
            <?php include 'php/product.php'; ?>
        <?php endfor; ?>
    </div>
    <div class="row pt-5">
        <div class="col-12 mb-5">
            <img class="img-fluid w-100 d-none d-sm-block" src="img/pc/REM_BANNER_05_MEN_1228x340.jpg">
            <img class="img-fluid w-100 d-block d-sm-none" src="img/mobile/REM_BANNER_MOB_05_320x208.jpg">
        </div>
    </div>
    <div class="row pt-3">
        <?php for ($index = 29; $index < 37; $index++) : ?>
            <?php include 'php/product.php'; ?>
        <?php endfor; ?>
    </div>
</div>
<?php
include 'php/scripts.php';
?>
</body>
</html>