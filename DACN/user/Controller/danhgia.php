<?php 
$action =isset($_GET['action'])?$_GET['action']:'danhgia';

if ($action=='danhgia')
{

    include './View/danhgia.php';

}