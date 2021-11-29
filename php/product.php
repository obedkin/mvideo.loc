<div class="col col-xs-6 product-item">
    <img class="img-fluid" src="https://img.mvideo.ru/Pdb/20052026b.jpg">
    <span class="price"><?= $products[$index][3] ?> ₽</span>
    <span class="old-price"><?= $products[$index][4] ?></span><br/>
    <span class="star"><i class="fas fa-star"></i> 4.3</span><span class="reviews">24 отзыва</span><br/>
    <a href="<?= $products[$index][2] ?>"><?= $products[$index][1] ?></a><br/>
    <a href="<?= $products[$index][2] ?>" class="btn btn-danger"><i class="fas fa-shopping-cart"></i> Купить</a>
</div>