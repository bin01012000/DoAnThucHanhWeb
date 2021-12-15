<?php
$action = utilities::get('action', 'index');
$nhaccu = new nhaccu();
if ($action == 'index') {
    $dataSPNB = $nhaccu->getAllSPNB();
    $dataSPDC = $nhaccu->getRDSPDC();
    $dataSPDC2 = $nhaccu->getRDSPDC();
    $dataPiano = $nhaccu->randomOnLy(4, "L1");
    $dataOrgan = $nhaccu->randomOnLy(4, "L2");
    $dataGuitar = $nhaccu->randomOnLy(4, "L3");
    $dataTrong = $nhaccu->randomOnLy(4, "L4");
    $dataAmp = $nhaccu->randomOnLy(4, "L5");
    include './views/home/index.php';
}
