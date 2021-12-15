<?php include './pages/headerinadmin.php' ?>

<section id="form">
    <div class="container">
        <div class="row">
            <?php include './pages/adminleft.php' ?>
            <div class="col-sm-9 padding-right">
                <div class="col-sm-9">
                    <div class="signup-form">
                        <h2>SỬA SẢN PHẨM</h2>
                        <form action="index.php?controller=homeadmin&action=updatenc" method="post" enctype="multipart/form-data">
                            <span>Mã nhạc cụ : </span> <input type="text" placeholder="Mã nhạc cụ..." name="mancud" value="<?php echo $data['MaNhacCu'] ?>" readonly="false" />
                            <span>Tên nhạc cụ : </span> <input type="text" placeholder="Tên nhạc cụ..." name="tenncud" value="<?php echo $data['TenNhacCu'] ?>" />
                            <span>Giá : </span><input type="number" placeholder="Giá..." name="giancud" value="<?php echo $data['Gia'] ?>" />
                            <span>Ngày tạo : </span><input type="date" name="ngaytaoncud" pattern="0" value="<?php echo $data['NgayTao'] ?>" />
                            <?php
                            $checked = '';
                            if ($data['TrangThai'] == 1) {
                                $checked = ' checked ';
                            }
                            ?>
                            <span>Trạng thái : </span><br><input type="checkbox" name="ttncud" id="trangthai" <?php echo $checked ?> >&nbsp;&nbsp;&nbsp;&nbsp;<label for="chxTT"> Còn hàng</label><br>
                            <span>Mã loại nhạc cụ : </span><select name="maloaincud" id="">
                                <?php
                                foreach ($dataDS as $v) {
                                    $selected = '';
                                    if ($v['MaLoaiNhacCu'] == $data['MaLoaiNhacCu']) $selected = ' selected ';
                                ?>
                                    <option value="<?php echo $v['MaLoaiNhacCu'] ?>" <?php echo $selected ?>><?php echo $v['TenLoaiNhacCu'] ?></option>
                                <?php
                                }
                                ?>
                            </select>
                            <span>Hình ảnh : </span><input type="file" id="backgroundnone" name="hinhud" value="<?php echo $data['HinhAnh'] ?>"/>
                            <button type="submit" class="btn btn-default">Lưu</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>