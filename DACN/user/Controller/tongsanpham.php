<?php 
$action =isset($_GET['action'])?$_GET['action']:'tongsanpham';
if ($action =='tongsanpham')
{
    include './View/tongsanpham.php';
}