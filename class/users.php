<?php
if (!defined('HOST')) exit;
class users extends db
{
    function delete($id)
    {
        return $this->updateQuery('delete from loai where maloai=?', [$id]);
    }
    function getById($id)
    {
        $data = $this->selectQuery('select * from users where userid=?', [$id]);
        if (Count($data) > 0) return $data[0];
        return [];
    }
    function insertUser($id, $pass, $hoten, $sdt, $email)
    {
        return $this->updateQuery('insert into users(userid,userpassword,hoten,dienthoai,email) values(?,?,?,?,?)', [$id, $pass, $hoten, $sdt, $email]);
    }
    function checkTonTai($id)
    {
        $sql = "select * from users where userid = ?";
        $arr = [$id];
        if ($this->updateQuery($sql, $arr) > 0) {
            return false;
        }
        return true;
    }

    function checkLogin($acc, $pass)
    {
        if (!isset($_SESSION)) session_start();
        $data = $this->getById($acc);
        if ($acc == $data['UserId'] && $pass == $data['UserPassword']) {
            $_SESSION['user'] = $acc;
            return true;
        }

        return false;
    }
}
