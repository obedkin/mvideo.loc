<div class="col-lg-five col-6 product-item pt-5">
    <div><a href="<?= $products[$index][2] ?>"><img class="img-fluid" src="<?= $products[$index][8] ?>"></a></div>
    <span class="price"><?= number_format($products[$index][3], 0, '', ' ') ?> ₽</span>
    <span class="old-price"><?= number_format($products[$index][4], 0, '', ' ') ?></span><br/>
    <span class="star"><i class="fas fa-star"></i> 4.3</span><span
            class="reviews"><?= $products[$index][5] ?></span><br/>
    <div class="title"><a href="<?= $products[$index][2] ?>"><?= $products[$index][1] ?></a></div>
    <div class="bonus-block"><img class="d-none d-sm-inline" src="img/m.png"><span
                class="bonus">+<?= $products[$index][6] ?></span><span
                class="bonus-text"><?= $products[$index][7] ?></span></div>
    <a href="<?= $products[$index][2] ?>" class="btn btn-danger"><i class="fas fa-shopping-cart"></i> Купить</a>
</div>