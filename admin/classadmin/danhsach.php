<?php 
if (!defined('HOST')) exit;
class danhsach extends dbadmin
{
    function getAllDS()
    {
        return $this->selectQuery('select * from danhsach');
    }
    function delete($id)
    {
        return $this->updateQuery('delete from danhsach where maloainhaccu=?', [$id]);
    }
    function getById($id)
    {
        $data= $this->selectQuery('select * from danhsach where maloainhaccu=?', [$id]);
        if (Count($data)>0) return $data[0];
        return [];
    }
    function search($kw)
    {
        $sql ="select * from danhsach where tenloainhaccu like ?";
        $arr =["%$kw%"];
        return $this->selectQuery($sql, $arr);
    }
    function update($id,$ten){
        return $this->updateQuery('update danhsach set tenloainhaccu=? where maloainhaccu=?',[$ten,$id]);
    }
    function insertDS($id,$ten)
    {
        return $this->updateQuery('insert into danhsach(maloainhaccu, tenloainhaccu) values(?, ?)',[$id,$ten]);
    }
    function checkTonTai($id){
        $sql = "select * from danhsach where maloainhaccu = ?";
        $arr = [$id];
        if($this->updateQuery($sql,$arr) > 0){
            return false;
        }
        return true;
    }
    function countLoai($maloai)
    {
        $sql ="select * from nhaccu where maloainhaccu = ?";
        $arr =[$maloai];
        return $this->updateQuery($sql, $arr);
    }
}