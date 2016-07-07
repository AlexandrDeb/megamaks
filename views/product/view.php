<?php include ROOT.'/views/layouts/header.php';?>

    <section><!--slider-->
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <div class="left-sidebar">
                        <h2>Каталог</h2>
                        <div class="panel-group category-products">
                            <?php foreach ($categories as $categoryItem): ?>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a href="/category/<?=$categoryItem['id'];?>">
                                                <?=$categoryItem['name'];?>
                                            </a>
                                        </h4>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>

            <div class="col-sm-9 padding-right">
                <div class="product-details"><!--product-details-->
                    <div class="row">
                        <div class="col-sm-5">
                            <div class="view-product">
                                <img src="<?=Product::getImage($product['id']); ?>" alt="" />
                            </div>
                        </div>
                        <div class="col-sm-7">
                            <div class="product-information"><!--/product-information-->
                                <?php if ($product['is_new']): ?>
                                    <img src="/template/images/home/new.png" class="new" alt="" />
                                <?php endif; ?>
                                <h2><?= $product['name'];?></h2>
                                <p>Код товара: <?= $product['code'];?></p>
                                <span>
                                        <span><?= $product['price']; ?>$</span>
                                       <a href="#" class="btn btn-default add-to-cart"
                                          data-id="<?=$product['id']; ?>">
                                           <i class="fa fa-shopping-cart"></i>В корзину</a>
                                 </span>
                            </div><!--/product-information-->
                        </div>
                    </div><!--/product-details-->

                    <div class="row"><!--category-tab-->
                            <div class="col-sm-12">
                                <h5>Описание товара</h5>
                                <?= $product['description'];?>
                             </div>
                        </div>
                    </div><!--/product-detalis-->


                </div>
            </div>
        </div>
    </section>
    <?php include (ROOT.'/views/layouts/footer.php')?>