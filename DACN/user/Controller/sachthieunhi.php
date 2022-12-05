<?php 
$action =isset($_GET['action'])?$_GET['action']:'sachthieunhi';

if ($action=='sachthieunhi')
{
   // echo 'trang chu';
    //load model-> lay data
  
    include './View/sachthieunhi.php';

}