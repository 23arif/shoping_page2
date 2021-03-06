<?php
$veri = $db->prepare("SELECT *FROM urunler ORDER BY urun_id DESC ");
$veri->execute(array());
$v = $veri->fetchALL(PDO::FETCH_ASSOC);
?>
<div class="category-tab">
    <div class="col-sm-12">
        <ul class="nav nav-tabs">
            <li class="active"><a href="#laptops" data-toggle="tab">Laptops</a></li>
            <li><a href="#phones" data-toggle="tab">Smart Phones</a></li>
            <li><a href="#jewelry" data-toggle="tab">JEWELRY & WATCHES</a></li>
            <li><a href="#dresses" data-toggle="tab">Dresses</a></li>
            <li><a href="#consumerElectronics" data-toggle="tab">Consumer Electronics</a></li>
        </ul>
    </div>
    <div class="tab-content">
        <div class="tab-pane fade active in" id="laptops">
            <?php foreach ($v as $urun) {
                if ($urun['urun_kategori'] == 3) {

                    ?>
                    <div class="col-sm-3">
                        <div class="product-image-wrapper">
                            <div class="single-products">
                                <div class="productinfo text-center">
                                    <img src="<?php echo $urun['urun_resim'] ?>" alt=""/>
                                    <h2> <?php echo parayaz($urun['urun_fiyat']) ?> </h2>
                                    <p><?php echo $urun['urun_title'] ?></p>
                                    <!--Rating Stars-->
                                    <?php
                                    $product_id = $urun['urun_id']; //product id for detect which product is it for rating stars
                                    stars();
                                    ?>
                                    <!--/Rating Stars-->

                                    <?php if (@$_SESSION) {
                                        ?>
                                        <button product-id="<?php echo $urun['urun_id'] ?>"
                                                class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>
                                            Add
                                            to cart
                                        </button>
                                        <?php
                                    } ?>
                                    <a href="?islem=pDetails&urun_id=<?php echo $urun['urun_id'] ?>"
                                       class="btn btn-default read-more"><i class="fa fa-external-link"></i> Read
                                        More</a>
                                </div>

                            </div>
                        </div>
                    </div>
                <?php }
            } ?>
        </div>

        <div class="tab-pane fade" id="phones">
            <?php foreach ($v as $urun) {
                if ($urun['urun_kategori'] == 2) {
                    ?>
                    <div class="col-sm-3">
                        <div class="product-image-wrapper">
                            <div class="single-products">
                                <div class="productinfo text-center">
                                    <img src="<?php echo $urun['urun_resim'] ?>" alt=""/>
                                    <h2><?php echo parayaz($urun['urun_fiyat']) ?></h2>
                                    <p><?php echo $urun['urun_title'] ?></p>
                                    <!--Rating Stars-->
                                    <?php
                                    $product_id = $urun['urun_id']; //product id for detect which product is it for rating stars
                                    stars();
                                    ?>
                                    <!--/Rating Stars-->
                                    <?php if (@$_SESSION) {
                                        ?>
                                        <button product-id="<?php echo $urun['urun_id'] ?>"
                                                class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add
                                            to
                                            cart
                                        </button>
                                    <?php } ?>
                                    <a href="index.php?islem=pDetails&urun_id=<?php echo $urun['urun_id'] ?>"
                                       class="btn btn-default read-more"><i class="fa fa-external-link"></i> Read
                                        More</a>
                                </div>

                            </div>
                        </div>
                    </div>
                <?php }
            } ?>

        </div>

        <div class="tab-pane fade" id="jewelry">
            <?php foreach ($v as $urun) {
                if ($urun['urun_kategori'] == 4) {
                    ?>
                    <div class="col-sm-3">
                        <div class="product-image-wrapper">
                            <div class="single-products">
                                <div class="productinfo text-center">
                                    <img src="<?php echo $urun['urun_resim'] ?>" alt=""/>
                                    <h2><?php echo parayaz($urun['urun_fiyat']) ?></h2>
                                    <p><?php echo $urun['urun_title'] ?></p>
                                    <?php
                                    $product_id = $urun['urun_id']; //product id for detect which product is it for rating stars
                                    stars();
                                    ?>
                                    <?php if (@$_SESSION) {
                                        ?>
                                        <button product-id="<?php echo $urun['urun_id'] ?>"
                                                class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add
                                            to
                                            cart
                                        </button>
                                    <?php } ?>
                                    <a href="index.php?islem=pDetails&urun_id=<?php echo $urun['urun_id'] ?>"
                                       class="btn btn-default read-more"><i class="fa fa-external-link"></i> Read
                                        More</a>
                                </div>

                            </div>
                        </div>
                    </div>
                <?php }
            } ?>
        </div>

        <div class="tab-pane fade" id="dresses">
            <?php foreach ($v as $urun) {
                if ($urun['urun_kategori'] == 1) {
                    ?>
                    <div class="col-sm-3">
                        <div class="product-image-wrapper">
                            <div class="single-products">
                                <div class="productinfo text-center">
                                    <img src="<?php echo $urun['urun_resim'] ?>" alt=""/>
                                    <h2><?php echo parayaz($urun['urun_fiyat']) ?></h2>
                                    <p><?php echo $urun['urun_title'] ?></p>
                                    <?php
                                    $product_id = $urun['urun_id']; //product id for detect which product is it for rating stars
                                    stars();
                                    ?>
                                    <?php if (@$_SESSION) {
                                        ?>
                                        <button product-id="<?php echo $urun['urun_id'] ?>"
                                                class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add
                                            to
                                            cart
                                        </button>
                                    <?php } ?>
                                    <a href="index.php?islem=pDetails&urun_id=<?php echo $urun['urun_id'] ?>"
                                       class="btn btn-default read-more"><i class="fa fa-external-link"></i> Read
                                        More</a>
                                </div>

                            </div>
                        </div>
                    </div>
                <?php }
            } ?>
        </div>

        <div class="tab-pane fade" id="consumerElectronics">
            <?php
            $v = $db->prepare("SELECT *FROM urunler ORDER BY urun_id DESC limit 0,4");
            $v->execute(array());
            $vv = $v->fetchALL(PDO::FETCH_ASSOC);
            foreach ($vv as $urunler) {
                if ($urunler['urun_kategori'] == 5) {
                    ?>
                    <div class="col-sm-3">
                        <div class="product-image-wrapper">
                            <div class="single-products">
                                <div class="productinfo text-center">
                                    <img src="<?php echo $urunler['urun_resim'] ?>" alt=""/>
                                    <h2><?php echo parayaz($urunler['urun_fiyat']) ?></h2>
                                    <p><?php echo $urunler['urun_title'] ?></p>
                                    <?php
                                    $product_id = $urunler['urun_id']; //product id for detect which product is it for rating stars
                                    stars();
                                    ?>
                                    <?php if (@$_SESSION) {
                                        ?>
                                        <button product-id="<?php echo $urunler['urun_id'] ?>"
                                                class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add
                                            to
                                            cart
                                        </button>
                                    <?php } ?>
                                    <a href="?islem=pDetails&urun_id=<?php echo $urunler['urun_id'] ?>"
                                       class="btn btn-default read-more"><i class="fa fa-external-link"></i> Read
                                        More</a>
                                </div>

                            </div>
                        </div>
                    </div>
                <?php }
            } ?>
        </div>
    </div>
</div>