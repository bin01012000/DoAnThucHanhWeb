<?php 
if (!defined('HOST')) exit;
class nhaccu extends db
{

    function getAll()
    {
        return $this->selectQuery('select * from nhaccu');
    }

    function delete($id)
    {
        return $this->updateQuery('delete from nhaccu where manhaccu=?', [$id]);
    }
    function getById($manhaccu)
    {
        $data= $this->selectQuery('select * from nhaccu where manhaccu=?', [$manhaccu]);
        if (Count($data)>0) return $data[0];
        return [];
    }

    function insert($id,$ten,$gia,$ngaytao,$trangthai,$maloai,$hinhanh){
        $sql = "insert into nhaccu(manhaccu,tennhaccu,gia,ngaytao,trangthai,maloainhaccu,hinhanh) values(?,?,?,?,?,?,?)";
        $arr = [$id,$ten,$gia,$ngaytao,$trangthai,$maloai,$hinhanh];
        return $this->updateQuery($sql,$arr);
    }
    
    function update($id,$ten,$gia,$ngaytao,$trangthai,$maloai,$hinhanh){
        $sql = "update nhaccu set tennhaccu=?, gia=?, ngaytao=?, trangthai=?, maloainhaccu=?, hinhanh=? where manhaccu=?";
        $arr = [$ten,$gia,$ngaytao,$trangthai,$maloai,$hinhanh,$id];
        return $this->updateQuery($sql,$arr);
    }

    function random($n)
    {
        $sql="select * from nhaccu order by rand() limit 0, $n";
        return $this->selectQuery($sql);
    }

    function randomOnLy($n,$id)
    {
        $sql="select * from nhaccu where maloainhaccu = '$id' order by rand() limit $n";
        return $this->selectQuery($sql);
    }

    function search($kw)
    {
        $sql ="select * from nhaccu where tennhaccu like ?";
        $arr =["%$kw%"];
        return $this->selectQuery($sql, $arr);
    }

    function getByLoai($maloai)
    {
        $sql ="select * from nhaccu where maloainhaccu = ?";
        $arr =[$maloai];
        return $this->selectQuery($sql, $arr);
    }

    function getDanhSach()
    {
        return $this->selectQuery('select * from danhsach');
    }


    function checkTonTai($id){
        $sql = "select * from nhaccu where manhaccu = ?";
        $arr = [$id];
        if($this->updateQuery($sql,$arr) > 0){
            return false;
        }
        return true;
    }

    function getAllSPNB()
    {
        return $this->selectQuery('select * from sanphamnoibat');
    }

    function getRDSPDC()
    {
        return $this->selectQuery('select * from sanphamdecap order by rand() limit 0, 3');
    }
    


}