<?php include './pages/headerin.php' ?>

<?php include './pages/slide.php' ?>

<section>
    <div class="container">
        <div class="row">
            <?php include './pages/danhmuc.php' ?>
            <div class="col-sm-9 padding-right">
                <div class="features_items">
                    <h2 class="title text-center" id="spnb">SẢN PHẨM NỔI BẬT</h2>
                    <?php
                    foreach ($dataSPNB as $v) {
                    ?>
                        <div class="col-sm-4">
                            <div class="product-image-wrapper">
                                <div class="single-products">
                                    <div class="productinfo text-center">
                                        <img src="./resource/images/nhaccu/<?php echo $v['HinhAnh'] ?>" alt="" />
                                        <h2>
                                            <?php echo $v['Gia'] ?> <span class="vnd"><sub>VNĐ</sub></span>
                                        </h2>
                                        <p><?php echo $v['TenNhacCu'] ?></p>
                                        <a href="index.php?controller=cart&action=themgiohang&manc=<?php echo $v['MaNhacCu'] ?>&value=Add" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ hàng</a>
                                    </div>
                                    <div class="product-overlay">
                                        <div class="overlay-content">
                                            <h2>
                                                <?php echo $v['Gia'] ?> <span class="vnd"><sub>VNĐ</sub></span>
                                            </h2>
                                            <a href="index.php?controller=product&action=details&manc=<?php echo $v['MaNhacCu'] ?>">
                                                <p><?php echo $v['TenNhacCu'] ?></p>
                                            </a>
                                            <a href="index.php?controller=cart&action=themgiohang&manc=<?php echo $v['MaNhacCu'] ?>&value=Add" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ hàng</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php
                    }
                    ?>
                </div>
                <!--features_items-->

                <div class="category-tab">
                    <!--category-tab-->
                    <div class="col-sm-12">
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#piano" data-toggle="tab">PIANO</a></li>
                            <li><a href="#organ-keyboard" data-toggle="tab">ORGAN-KEYBOARD</a></li>
                            <li><a href="#guitar" data-toggle="tab">GUITAR</a></li>
                            <li><a href="#trong" data-toggle="tab">TRỐNG</a></li>
                            <li><a href="#amplifers" data-toggle="tab">AMPLIFERS</a></li>
                        </ul>
                    </div>
                    <div class="tab-content">
                        <div class="tab-pane fade active in" id="piano">
                            <?php
                            foreach ($dataPiano as $v) {
                            ?>
                                <div class="col-sm-3">
                                    <div class="product-image-wrapper">
                                        <div class="single-products">
                                            <div class="productinfo text-center">
                                                <img src="./resource/images/nhaccu/<?php echo $v['HinhAnh'] ?>" alt="" />
                                                <h2>
                                                    <?php echo $v['Gia'] ?> <span class="vnd"><sub>VNĐ</sub></span>
                                                </h2>
                                                <a href="index.php?controller=product&action=details&manc=<?php echo $v['MaNhacCu'] ?>">
                                                    <p style="height: 50px;"><?php echo $v['TenNhacCu'] ?></p>
                                                </a>
                                                <a href="index.php?controller=cart&action=themgiohang&manc=<?php echo $v['MaNhacCu'] ?>&value=Add" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ hàng</a>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            <?php
                            }
                            ?>
                        </div>

                        <div class="tab-pane fade" id="organ-keyboard">
                            <?php
                            foreach ($dataOrgan as $v) {
                            ?>
                                <div class="col-sm-3">
                                    <div class="product-image-wrapper">
                                        <div class="single-products">
                                            <div class="productinfo text-center">
                                                <img src="./resource/images/nhaccu/<?php echo $v['HinhAnh'] ?>" alt="" />
                                                <h2>
                                                    <?php echo $v['Gia'] ?> <span class="vnd"><sub>VNĐ</sub></span>
                                                </h2>
                                                <a href="index.php?controller=product&action=details&manc=<?php echo $v['MaNhacCu'] ?>">
                                                    <p style="height: 50px;"><?php echo $v['TenNhacCu'] ?></p>
                                                </a>
                                                <a href="index.php?controller=cart&action=themgiohang&manc=<?php echo $v['MaNhacCu'] ?>&value=Add" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ hàng</a>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            <?php
                            }
                            ?>
                        </div>

                        <div class="tab-pane fade" id="guitar">
                            <?php
                            foreach ($dataGuitar as $v) {
                            ?>
                                <div class="col-sm-3">
                                    <div class="product-image-wrapper">
                                        <div class="single-products">
                                            <div class="productinfo text-center">
                                                <img src="./resource/images/nhaccu/<?php echo $v['HinhAnh'] ?>" alt="" />
                                                <h2>
                                                    <?php echo $v['Gia'] ?> <span class="vnd"><sub>VNĐ</sub></span>
                                                </h2>
                                                <a href="index.php?controller=product&action=details&manc=<?php echo $v['MaNhacCu'] ?>">
                                                    <p style="height: 50px;"><?php echo $v['TenNhacCu'] ?></p>
                                                </a>
                                                <a href="index.php?controller=cart&action=themgiohang&manc=<?php echo $v['MaNhacCu'] ?>&value=Add" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ hàng</a>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            <?php
                            }
                            ?>
                        </div>

                        <div class="tab-pane fade" id="trong">
                            <?php
                            foreach ($dataTrong as $v) {
                            ?>
                                <div class="col-sm-3">
                                    <div class="product-image-wrapper">
                                        <div class="single-products">
                                            <div class="productinfo text-center">
                                                <img src="./resource/images/nhaccu/<?php echo $v['HinhAnh'] ?>" alt="" />
                                                <h2>
                                                    <?php echo $v['Gia'] ?> <span class="vnd"><sub>VNĐ</sub></span>
                                                </h2>
                                                <a href="index.php?controller=product&action=details&manc=<?php echo $v['MaNhacCu'] ?>">
                                                    <p style="height: 50px;"><?php echo $v['TenNhacCu'] ?></p>
                                                </a>
                                                <a href="index.php?controller=cart&action=themgiohang&manc=<?php echo $v['MaNhacCu'] ?>&value=Add" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ hàng</a>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            <?php
                            }
                            ?>
                        </div>

                        <div class="tab-pane fade" id="amplifers">
                            <?php
                            foreach ($dataAmp as $v) {
                            ?>
                                <div class="col-sm-3">
                                    <div class="product-image-wrapper">
                                        <div class="single-products">
                                            <div class="productinfo text-center">
                                                <img src="./resource/images/nhaccu/<?php echo $v['HinhAnh'] ?>" alt="" />
                                                <h2>
                                                    <?php echo $v['Gia'] ?> <span class="vnd"><sub>VNĐ</sub></span>
                                                </h2>
                                                <a href="index.php?controller=product&action=details&manc=<?php echo $v['MaNhacCu'] ?>">
                                                    <p style="height: 50px;"><?php echo $v['TenNhacCu'] ?></p>
                                                </a>
                                                <a href="index.php?controller=cart&action=themgiohang&manc=<?php echo $v['MaNhacCu'] ?>&value=Add" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ hàng</a>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            <?php
                            }
                            ?>
                        </div>
                    </div>
                </div>
                <!--/category-tab-->

                <div class="recommended_items">

                    <!--recommended_items-->
                    <h2 class="title text-center">SẢN PHẨM ĐỀ CẬP</h2>

                    <div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="item active">
                                <?php
                                foreach ($dataSPDC as $v) {
                                ?>
                                    <div class="col-sm-4">
                                        <div class="product-image-wrapper">
                                            <div class="single-products">
                                                <div class="productinfo text-center">
                                                    <img src="./resource/images/nhaccu/<?php echo $v['HinhAnh'] ?>" alt="" />
                                                    <h2>
                                                        <?php echo $v['Gia'] ?> <span class="vnd"><sub>VNĐ</sub></span>
                                                    </h2>
                                                    <a href="index.php?controller=product&action=details&manc=<?php echo $v['MaNhacCu'] ?>">
                                                        <p><?php echo $v['TenNhacCu'] ?></p>
                                                    </a>
                                                    <a href="index.php?controller=cart&action=themgiohang&manc=<?php echo $v['MaNhacCu'] ?>&value=Add" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ hàng</a>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                <?php
                                }
                                ?>
                            </div>
                            <div class="item">
                                <?php
                                foreach ($dataSPDC2 as $v) {
                                ?>
                                    <div class="col-sm-4">
                                        <div class="product-image-wrapper">
                                            <div class="single-products">
                                                <div class="productinfo text-center">
                                                    <img src="./resource/images/nhaccu/<?php echo $v['HinhAnh'] ?>" alt="" />
                                                    <h2>
                                                        <?php echo $v['Gia'] ?> <span class="vnd"><sub>VNĐ</sub></span>
                                                    </h2>
                                                    <a href="index.php?controller=product&action=details&manc=<?php echo $v['MaNhacCu'] ?>">
                                                        <p><?php echo $v['TenNhacCu'] ?></p>
                                                    </a>
                                                    <a href="index.php?controller=cart&action=themgiohang&manc=<?php echo $v['MaNhacCu'] ?>&value=Add" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ hàng</a>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                <?php
                                }
                                ?>
                            </div>
                        </div>
                        <a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">
                            <i class="fa fa-angle-left"></i>
                        </a>
                        <a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">
                            <i class="fa fa-angle-right"></i>
                        </a>
                    </div>
                </div>
                <!--/recommended_items-->

            </div>
        </div>
    </div>
</section>

<?php include './pages/footerin.php' ?>
<!--/Footer-->
</body>

</html>