<?php include './pages/headerin.php' ?>

<?php include './pages/slide.php' ?>

<section>
    <div class="container">
        <div class="row">
            <?php include './pages/danhmuc.php' ?>

            <div class="col-sm-9 padding-right">
                <div class="product-details">

                    <div class="col-sm-5">
                        <div class="view-product">
                            <img src="./resource/images/nhaccu/<?php echo $data['HinhAnh'] ?>" alt="" />
                        </div>

                    </div>
                    <div class="col-sm-7">
                        <div class="product-information">
                            <h2><?php echo $data['TenNhacCu'] ?></h2>
                            <p><?php echo $data['MaNhacCu'] ?></p>
                            <img src="./images/product-details/rating.png" alt="" />
                            <p class="productvnd">
                                <?php echo $data['Gia'] ?> <span class="vnd">vnđ</span>
                            </p>
                            </span>
                            <p><b>Trạng thái:</b> <?php echo $data['TrangThai'] ?></p>
                            <p><b>Condition:</b> New</p>
                            <p><b>Brand:</b> NhacCuBin</p>
                            <a href=""><img src="./images/product-details/share.png" class="share img-responsive" alt="" /></a>
                        </div>
                    </div>

                    </c:forEach>
                </div>

                <div class="recommended_items">
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
                                                    <a href="${param1}?action=themvao&manc=${ncLVDC.manc}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ hàng</a>
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
                                                    <a href="${param1}?action=themvao&manc=${ncLVDC.manc}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ hàng</a>
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