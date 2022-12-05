<?php 
$action =isset($_GET['action'])?$_GET['action']:'sachmoi';

if ($action=='sachmoi')
{
   
  
    include './View/sachmoi.php';

}