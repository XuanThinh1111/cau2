<?php 
$action =isset($_GET['action'])?$_GET['action']:'baiviet';

if ($action=='baiviet')
{

  
    include './View/baiviet.php';

}