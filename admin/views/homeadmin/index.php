<?php include './pages/headerinadmin.php' ?>
<!--/header-->

<section id="form">
    <!--form-->
    <div class="container">
        <div class="row">
            <?php include './pages/adminleft.php' ?>
            <div class="col-sm-12 padding-right">
                <div class="wrapper">
                    <table class="table table-bordered cart_summary" style="text-align: center">
                        <thead>
                            <tr>
                                <th class="cart_product">Nhạc cụ</th>
                                <th>Tên nhạc cụ</th>
                                <th>Giá</th>
                                <th>Ngày tạo</th>
                                <th>Trạng thái</th>
                                <th>Loại</th>
                                <th class="action"><i class="fa fa-pencil"></i>
                                <th class="action"><i class="fa fa-trash-o"></i>

                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($data as $v) {
                            ?>
                                <tr>
                                    <td><img src="../resource/images/nhaccu/<?php echo $v['HinhAnh'] ?>" class="img-fluid" alt="" style="width: 100px" /></td>
                                    <td class="cart_description">
                                    <?php echo $v['TenNhacCu'] ?>
                                    </td>
                                    <td class="price">
                                        <?php echo $v['Gia'] ?> VNĐ
                                    </td>
                                    <td class="qty">
                                        <?php echo $v['NgayTao'] ?>
                                    </td>
                                    <td>
                                        <?php 
                                            if($v['TrangThai'] == false){
                                                ?>
                                                    <p>Hết</p>
                                                <?php
                                            }
                                            else{
                                                ?>
                                                    <p>Còn</p>
                                                <?php
                                            }
                                        ?>
                                    </td>
                                    <td>
                                    <?php echo $v['TenLoaiNhacCu'] ?>
                                    </td>
                                    <td>
                                        <a href="index.php?controller=homeadmin&action=editnc&manc=<?php echo $v['MaNhacCu'] ?>">Edit</a>
                                    </td>
                                    <td class="action">
                                        <a href="index.php?controller=homeadmin&action=xoanc&manc=<?php echo $v['MaNhacCu'] ?>">Delete item</a>
                                    </td>
                                </tr>
                            <?php
                            }
                            ?>

                            </c:forEach>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>