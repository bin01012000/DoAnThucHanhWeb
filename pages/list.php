<section>
    <div class="container">
        <div class="row">
            <?php include './pages/danhmuc.php' ?>

            <div class="col-sm-9 padding-right">
                <div class="features_items">
                    <h2 class="title text-center" id="spnb">SẢN PHẨM NỔI BẬT</h2>
                    <?php
                    foreach ($data as $v) {
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
                                        <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ hàng</a>
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

                    </c:forEach>
                </div>
            </div>
        </div>
    </div>
</section>