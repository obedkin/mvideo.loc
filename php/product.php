<div class="col-lg-five col-6 product-item pb-3" id="<?= $products[$index][0] ?>">
    <div><a href="<?= $products[$index][2] ?>"><img class="img-fluid" src="<?= $products[$index][8] ?>"></a></div>
    <span class="price"><?= number_format($products[$index][3], 0, '', ' ') ?> ₽</span>
    <?php if ($products[$index][4] > 0): ?>
        <span class="old-price"><?= number_format($products[$index][4], 0, '', ' ') ?></span>
    <?php endif; ?>
    <br/>
    <span class="star"><i class="fas fa-star"></i> <?= $products[$index][9] ?></span><span
            class="reviews"><?= $products[$index][5] ?></span><br/>
    <div class="title"><a href="<?= $products[$index][2] ?>"><?= $products[$index][1] ?></a></div>
    <div class="bonus-block"><img class="d-none d-sm-inline" src="img/m.png"><span
                class="bonus">+<?= $products[$index][6] ?></span><span
                class="bonus-text"><?= $products[$index][7] ?></span></div>
    <a href="<?= $products[$index][2] ?>" class="btn btn-danger">Купить</a>
</div>