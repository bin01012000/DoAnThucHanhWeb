<?php
$action = utilities::get('action', 'index');

if ($action == 'index') {
    include './views/loginadmin/index.php';
}
if ($action == 'signin') {
    $u = utilities::get('username_admin');
    $p = utilities::get('password_admin');
    if ($u == '' || $p == '') {
?>
        <script>
            alert('Tài khoản hoặc mật khẩu không được để trống');
            window.location = 'index.php?controller=loginadmin';
        </script>
    <?php
    }
    if ($u == 'admin' && $p == '123456') {
        if (!isset($_SESSION)) session_start();
        if (!isset($_SESSION['admin'])) $_SESSION['admin'] = [];
    ?>
        <script>
            alert('Đăng nhập thành công');
            window.location = 'index.php?controller=homeadmin';
        </script>
    <?php
    } else {
    ?>
        <script>
            alert('Tài khoản hoặc mật khẩu sai');
            window.location = 'index.php?controller=loginadmin';
        </script>
<?php
    }
}
