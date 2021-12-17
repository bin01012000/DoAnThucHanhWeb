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
                                <th class="cart_product">Mã loại</th>
                                <th>Tên loại</th>
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
                                    <td>
                                    <?php echo $v['MaLoaiNhacCu'] ?>
                                    </td>
                                    <td>
                                    <?php echo $v['TenLoaiNhacCu'] ?>
                                    </td>
                                    <td>
                                        <a href="index.php?controller=homeadmin&action=editdm&maloai=<?php echo $v['MaLoaiNhacCu'] ?>">Edit</a>
                                    </td>
                                    <td class="action">
                                        <a href="index.php?controller=homeadmin&action=xoadm&maloai=<?php echo $v['MaLoaiNhacCu'] ?>" onclick="return confirm('Bạn có chắc chắn xóa ?');">Delete item</a>
                                    </td>
                                </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/form-->


<jsp:include page="footerin.jsp" flush="true" />