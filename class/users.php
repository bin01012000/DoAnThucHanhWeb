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

    function checkTonTaiEmail($id)
    {
        $sql = "select * from users where email = ?";
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

    function goiMail($user, $token)
    {
        require "PHPMailer-master/src/PHPMailer.php";
        require "PHPMailer-master/src/SMTP.php";
        require 'PHPMailer-master/src/Exception.php';
        $mail = new PHPMailer\PHPMailer\PHPMailer(true);
        try {
            $mail->SMTPDebug = 0;
            $mail->isSMTP();
            $mail->CharSet  = "utf-8";
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $nguoigui = 'ndah31122000@gmail.com';
            $matkhau = 'nqcflzkplpsmbqfg';
            $tennguoigui = 'Nguyễn Dương Anh Huy - NhacCuBin';
            $mail->Username = $nguoigui;
            $mail->Password = $matkhau;
            $mail->SMTPSecure = 'ssl';
            $mail->Port = 465;              
            $mail->setFrom($nguoigui, $tennguoigui);
            $mail->addAddress($user);
            $mail->isHTML(true);
            $mail->Subject = 'Gửi thư từ php';
            $noidungthu = "<h2>Đây là code xác nhận của bạn: $token</h2>";
            $mail->Body = $noidungthu;
            $mail->smtpConnect(array(
                "ssl" => array(
                    "verify_peer" => false,
                    "verify_peer_name" => false,
                    "allow_self_signed" => true
                )
            ));
            $mail->send();
        } catch (Exception $e) {
            echo 'Mail không gửi được. Lỗi: ', $mail->ErrorInfo;
        }
    }
}
