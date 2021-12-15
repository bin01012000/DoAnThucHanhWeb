<div class="col-sm-3">
    <div class="left-sidebar">
        <!--/category-products-->
        <div class="brands_products">
            <!--brands_products-->
            <h2>DANH MỤC</h2>
            <div class="brands-name">
                <ul class="nav nav-pills nav-stacked">
                    <?php
                    foreach ($dataDS as $v) {
                        ?>
                        <li>
                            <a href="index.php?controller=product&action=only&maloai=<?php echo $v['MaLoaiNhacCu']  ?>"> <span class="pull-right"></span><?php echo $v['TenLoaiNhacCu']  ?>
                            </a>
                        </li>
                        <?php
                    }
                    ?>
                </ul>
            </div>
        </div>

        <div class="shipping text-center">
            <img src="./images/home/bannerleft.png" alt="" />
        </div>

    </div>
</div>