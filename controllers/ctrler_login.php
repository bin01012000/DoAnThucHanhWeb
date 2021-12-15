<?php
$action = utilities::get('action', 'index');
$user = new users();
if ($action == 'index') {
    if (isset($_SESSION['user'])) {
?>
        <script>
            alert('Bạn cần đăng xuất để thực hiện chức năng này');
            window.location = 'index.php?controller=home';
        </script>
    <?php
    } else {
        include './views/login/index.php';
    }
}
if ($action == 'signin') {
    $u = utilities::get('username');
    $p = utilities::get('password');
    if ($u == '' || $p == '') {
    ?>
        <script>
            alert('Tài khoản hoặc mật khẩu không được để trống');
            window.location = 'index.php?controller=login';
        </script>
        <?php
    } else {
        if ($user->checkLogin($u, $p) == false) {
        ?>
            <script>
                alert('Tài khoản hoặc mật khẩu sai');
                window.location = 'index.php?controller=login';
            </script>
        <?php
        } else {
        ?>
            <script>
                alert('Đăng nhập thành công');
                window.location = 'index.php?controller=home';
            </script>
        <?php
        }
    }
}

if ($action == 'signup') {
    $u = utilities::get('usernamesu');
    $p = utilities::get('passwordsu');
    $ht = utilities::get('hoten');
    $sdt = utilities::get('sdt');
    $email = utilities::get('email');
    if ($u == '' || $p == '' || $ht == '' || $sdt == '' || $email == '') {
        ?>
        <script>
            alert('Không được để trống');
            window.location = 'index.php?controller=login';
        </script>
        <?php
    } else {
        if ($user->checkTonTai($u) == false) {
        ?>
            <script>
                alert('Tài khoản đã tồn tại');
                window.location = 'index.php?controller=login';
            </script>
            <?php
        } else {
            if ($sdt < 0) {
            ?>
                <script>
                    alert('Số điện thoại không đúng');
                    window.location = 'index.php?controller=login';
                </script>
                <?php
            } else {
                $n = $user->insertUser($u, $p, $ht, $sdt, $email);
                if ($n > 0) {
                ?>
                    <script>
                        alert('Đăng ký thành công');
                        window.location = 'index.php?controller=login';
                    </script>
        <?php
                }
            }
        }
    }
}

if ($action == 'logout') {
    if (isset($_SESSION['user'])) {
        unset($_SESSION['user']);
        ?>
        <script>
            alert('Đã đăng xuất');
            window.location = 'index.php?controller=login';
        </script>
    <?php
    } else {
    ?>
        <script>
            alert('Bạn cần đăng nhập để thực hiện chức năng này');
            window.location = 'index.php?controller=login';
        </script>
<?php
    }
}
