<?php
$action = utilities::get('action', 'index');
$nhaccu = new nhaccu();
$danhsach = new danhsach();
$data = $danhsach->getAllDS();
if ($action == 'index') {
    $data = $nhaccu->getAll();
    include './views/homeadmin/index.php';
}
if ($action == 'adminlistdm') {
    include './views/homeadmin/dsach.php';
}

if ($action == 'adminthem') {
    include './views/homeadmin/them.php';
}
if ($action == 'insertDS') {
    $ml = utilities::get('maloai');
    $tl = utilities::get('tenloai');
    if ($ml == '' || $tl == '') {
?>
        <script>
            alert('Mã và tên không được để trống');
            window.location = 'index.php?controller=homeadmin&action=adminthem';
        </script>
        <?php
    } else {
        if ($danhsach->checkTonTai($ml) == false) {
        ?>
            <script>
                alert('Mã đã tồn tại');
                window.location = 'index.php?controller=homeadmin&action=adminthem';
            </script>
            <?php
        } else {
            $n = $danhsach->insertDS($ml, $tl);
            if ($n > 0) {
            ?>
                <script>
                    alert('Thêm loại thành công');
                    window.location = 'index.php?controller=homeadmin&action=adminthem';
                </script>
            <?php
            } else {

            ?>
                <script>
                    alert('Thêm loại thất bại');
                    window.location = 'index.php?controller=homeadmin&action=adminthem';
                </script>
        <?php
            }
        }
    }
}


if ($action == 'insertNC') {
    $manc = utilities::post('manc');
    $tennc = utilities::post('tennc');
    $gianc = utilities::post('gianc');
    $ngaytaonc = utilities::post('ngaytaonc');
    $ttnc = utilities::post('ttnc');
    if ($ttnc == 'on') {
        $ttnc = 1;
    } else {
        $ttnc = 0;
    }
    $ml = utilities::post('maloainc');
    $hinh = utilities::post('hinh');
    if (isset($_FILES['hinh'])) {
        if ($_FILES['hinh']['error'] == 0) {
            $hinh = $_FILES['hinh']['name'];
            move_uploaded_file($_FILES['hinh']['tmp_name'], "../resource/images/nhaccu/$hinh");
        }
    }
    if ($manc == '' || $tennc == '' || $gianc == '' || $ngaytaonc == '') {
        ?>
        <script>
            alert('Không được để trống thông tin');
            window.location = 'index.php?controller=homeadmin&action=adminthem';
        </script>
        <?php
    } else {
        if ($nhaccu->checkTonTai($manc) == false) {
        ?>
            <script>
                alert('Mã nhạc cụ đã tồn tại');
                window.location = 'index.php?controller=homeadmin&action=adminthem';
            </script>
            <?php
        } else {
            if ($gianc < 0) {
            ?>
                <script>
                    alert('Giá không được < 0');
                    window.location = 'index.php?controller=homeadmin&action=adminthem';
                </script>
                <?php
            } else {
                $n = $nhaccu->insert($manc, $tennc, $gianc, $ngaytaonc, $ttnc, $ml, $hinh);
                if ($n > 0) {
                ?>
                    <script>
                        alert('Thêm thành công');
                        window.location = 'index.php?controller=homeadmin&action=adminthem';
                    </script>
                <?php
                } else {
                ?>
                    <script>
                        alert('Thêm thất bại');
                        window.location = 'index.php?controller=homeadmin&action=adminthem';
                    </script>
        <?php
                }
            }
        }
    }
}

if ($action == 'xoanc') {
    $id = utilities::get('manc');
    $n = $nhaccu->delete($id);
    if ($n > 0) {
        ?>
        <script>
            alert('Đã xóa');
            window.location = 'index.php?controller=homeadmin&action=index';
        </script>
    <?php
    } else {
    ?>
        <script>
            alert('Không xóa được');
            window.location = 'index.php?controller=homeadmin&action=index';
        </script>
    <?php
    }
}

if ($action == 'xoadm') {
    $id = utilities::get('maloai');
    
    $a = $danhsach->countLoai($id);
    if ($a > 0) {
    ?>
        <script>
            alert('Danh mục này đang chứa sản phẩm. Không thể xóa !!');
            window.location = 'index.php?controller=homeadmin&action=adminlistdm';
        </script>
        <?php
    } else {
        $n = $danhsach->delete($id);
        if ($n > 0) {
        ?>
            <script>
                alert('Đã xóa');
                window.location = 'index.php?controller=homeadmin&action=adminlistdm';
            </script>
        <?php
        } else {
        ?>
            <script>
                alert('Không xóa được');
                window.location = 'index.php?controller=homeadmin&action=adminlistdm';
            </script>
        <?php
        }
    }
}

if ($action == 'editnc') {
    $id = utilities::get('manc');
    $data = $nhaccu->getById($id);
    include './views/edit/editnc.php';
}

if ($action == 'updatenc') {
    $manc = utilities::post('mancud');
    $tennc = utilities::post('tenncud');
    $gianc = utilities::post('giancud');
    $ngaytaonc = utilities::post('ngaytaoncud');
    $ttnc = utilities::post('ttncud');
    if ($ttnc == 'on') {
        $ttnc = 1;
    } else {
        $ttnc = 0;
    }
    $ml = utilities::post('maloaincud');
    $oldhinh = utilities::post('hinh');
    $hinh = utilities::post('hinhud');
    if (isset($_FILES['hinhud'])) {
        if ($_FILES['hinhud']['error'] == 0) {
            $hinh = $_FILES['hinhud']['name'];
            move_uploaded_file($_FILES['hinhud']['tmp_name'], "../resource/images/nhaccu/$hinh");
        }
        else{
            $hinh = $oldhinh;
        }
    }
    if ($tennc == '' || $gianc == '' || $ngaytaonc == '') {
        ?>
        <script>
            alert('Không được để trống thông tin');
            window.location = 'index.php?controller=homeadmin&action=editnc&manc=<?php echo $manc ?>';
        </script>
        <?php
    } else {
        if ($gianc < 0) {
        ?>
            <script>
                alert('Giá không được < 0');
                window.location = 'index.php?controller=homeadmin&action=editnc&manc=<?php echo $manc ?>';
            </script>
            <?php
        } else {
            $n = $nhaccu->update($manc, $tennc, $gianc, $ngaytaonc, $ttnc, $ml, $hinh);
            if ($n >= 0) {
            ?>
                <script>
                    alert('Cập nhật thành công');
                    window.location = 'index.php?controller=homeadmin&action=index';
                </script>
            <?php
            } else {
            ?>
                <script>
                    alert('Cập nhật thất bại');
                    window.location = 'index.php?controller=homeadmin&action=editnc&manc=<?php echo $manc ?>';
                </script>
        <?php
            }
        }
    }
}

if ($action == 'editdm') {
    $id = utilities::get('maloai');
    $data = $danhsach->getById($id);
    include './views/edit/editdm.php';
}

if ($action == 'updatedm') {
    $ml = utilities::get('maloaiud');
    $tl = utilities::get('tenloaiud');
    if ($tl == '') {
        ?>
        <script>
            alert('Tên không được để trống');
            window.location = 'index.php?controller=homeadmin&action=editdm&maloai=<?php echo $ml ?>';
        </script>
        <?php
    } else {
        $n = $danhsach->update($ml, $tl);
        if ($n >= 0) {
        ?>
            <script>
                alert('Cập nhật loại thành công');
                window.location = 'index.php?controller=homeadmin&action=adminlistdm';
            </script>
        <?php
        } else {

        ?>
            <script>
                alert('Cập nhật loại thất bại');
                window.location = 'index.php?controller=homeadmin&action=editdm&maloai=<?php echo $ml ?>';
            </script>
<?php
        }
    }
}
