<?php
$action = utilities::get('action', 'index');
$nhaccu = new nhaccu();
if ($action == 'index') {
    $data = $nhaccu->getAll();
    include './views/product/index.php';
}

if($action == 'only'){
    $ml = utilities::get('maloai');
    $data = $nhaccu->getByLoai($ml);
    include './views/product/index.php';
}

if($action == 'search'){
    $kw = utilities::get('keyWord');
    $data = $nhaccu->search($kw);
    include './views/product/index.php';
}

if($action == 'details'){
    $dataSPDC = $nhaccu->getRDSPDC();
    $dataSPDC2 = $nhaccu->getRDSPDC();
    $id = utilities::get('manc');
    $data = $nhaccu->getById($id);
    include './views/product/detail.php';
}
