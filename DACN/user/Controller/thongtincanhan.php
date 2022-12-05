<?php 
$action =isset($_GET['action'])?$_GET['action']:'thongtincanhan';

if ($action=='thongtincanhan')
{
   
  
    include './View/thongtincanhan.php';

}