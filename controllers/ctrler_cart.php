<?php
$action = utilities::get('action', 'index');
$nhaccu = new nhaccu();
if (!isset($_SESSION)) session_start();
if (!isset($_SESSION['cart'])) $_SESSION['cart'] = [];
$c = $_SESSION['cart'];
if ($action == 'index') {
    include './views/cart/index.php';
}
if ($action == 'themgiohang') {
    if (isset($_SESSION['user'])) {
        $id = utilities::get('manc');
        $p =  utilities::get('value');
        $data = $nhaccu->getById($id);
        if ($p == "Add") {
            if (!isset($c[$id]))
                $c[$id] = ['id' => $data['MaNhacCu'], 'name' => $data['TenNhacCu'], 'price' => $data['Gia'], 'qty' => '1', 'hinh' => $data['HinhAnh']];
            else $c[$id]['qty'] += 1;
        }
        if ($p == "Delete") {
            unset($c[$id]);
        }
        $_SESSION['cart'] = $c;
        include './views/cart/index.php';
    }else{
        ?>
        <script>
            alert('Bạn cần đăng nhập để thực hiện chức năng này');
            window.location = 'index.php?controller=login';
        </script>
        <?php
    }
}
