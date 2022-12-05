<?php 
$action =isset($_GET['action'])?$_GET['action']:'trangchu';
$sanpham =  new Book();
if ($action=='trangchu')
{
 
    $data = $sanpham->all();
    include './View/index.php';
}
if($action=='ttsanpham'){
    include './View/ttsanpham.php';
}
if($action=='ttsanpham2'){
    include './View/ttsanpham2.php';
}
if($action=='ttsanpham3'){
    include './View/ttsanpham3.php';
}
if ($action=='detail')
{
  //  echo 'chi tiet sach';
    
    //load model-> lay data 
    $masach = isset($_GET['id'])?$_GET['id']:'';
    $data =$sanpham->byId($masach);
    //gui data toi view: load view
    include 'View/detail.php';
}