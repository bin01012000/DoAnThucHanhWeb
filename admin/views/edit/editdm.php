<?php include './pages/headerinadmin.php' ?>


<section id="form">

    <div class="container">
        <div class="row">
        <?php include './pages/adminleft.php' ?>
            <div class="col-sm-9 padding-right">
                <div class="col-sm-9 col-sm-offset-1">
                    <div class="login-form">

                        <h2>THÊM DANH SÁCH SẢN PHẨM</h2>
                        <form action="#">
                        <input type="hidden" name="controller" value="homeadmin" />
                            <input type="hidden" name="action" value="updatedm" />
                                <span>Mã loại nhạc cụ : </span><input type="text" placeholder="Mã loại nhạc cụ..." name="maloai" value="<?php echo $data['MaLoaiNhacCu'] ?>" readonly="false" />
                                <span>Tên loại nhạc cụ : </span><input type="text" placeholder="Tên loại nhạc cụ..." name="tenloai" value="<?php echo $data['TenLoaiNhacCu'] ?>" />
                            <button type="submit" class="btn btn-default">Lưu</button>
                        </form>
                    </div>

                </div>

            </div>
        </div>
    </div>
</section>
