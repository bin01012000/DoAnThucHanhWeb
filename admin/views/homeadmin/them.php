<?php include './pages/headerinadmin.php' ?>


<section id="form">

    <div class="container">
        <div class="row">
            <?php include './pages/adminleft.php' ?>
            <div class="col-sm-9 padding-right">
                <div class="col-sm-4 col-sm-offset-1">
                    <div class="login-form">

                        <h2>THÊM DANH SÁCH SẢN PHẨM</h2>
                        <form action="#">
                            <input type="hidden" name="controller" value="homeadmin" />
                            <input type="hidden" name="action" value="insertDS" />
                            <span>Mã loại nhạc cụ : </span><input type="text" placeholder="Mã loại nhạc cụ..." name="maloai" />
                            <span>Tên loại nhạc cụ : </span><input type="text" placeholder="Tên loại nhạc cụ..." name="tenloai" />
                            <button type="submit" class="btn btn-default">Thêm</button>
                        </form>
                    </div>

                </div>
                <div class="col-sm-1">
                    <h2 class="or">OR</h2>
                </div>
                <div class="col-sm-4">
                    <div class="signup-form">

                        <h2>THÊM SẢN PHẨM</h2>
                        <form action="index.php?controller=homeadmin&action=insertNC" method="post" enctype="multipart/form-data">
                            <!--<input type="hidden" name="controller" value="homeadmin" />
                            <input type="hidden" name="action" value="insertNC" />-->
                            <span>Mã nhạc cụ : </span> <input type="text" placeholder="Mã nhạc cụ..." name="manc" />
                            <span>Tên nhạc cụ : </span> <input type="text" placeholder="Tên nhạc cụ..." name="tennc" />
                            <span>Giá : </span><input type="number" placeholder="Giá..." name="gianc" />
                            <span>Ngày tạo : </span><input type="date" name="ngaytaonc" />
                            <span>Trạng thái : </span><br><input type="checkbox" name="ttnc" id="trangthai">&nbsp;&nbsp;&nbsp;&nbsp;<label for="chxTT"> Còn hàng</label><br>
                            <span>Mã loại nhạc cụ : </span><select name="maloainc" id="">
                                <?php
                                foreach ($data as $v) {
                                ?>
                                    <option value="<?php echo $v['MaLoaiNhacCu'] ?>"><?php echo $v['TenLoaiNhacCu'] ?></option>
                                <?php
                                }
                                ?>
                            </select>
                            <span>Hình ảnh : </span><input type="file" id="backgroundnone" name="hinh" />
                            <button type="submit" class="btn btn-default">Thêm</button>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>


