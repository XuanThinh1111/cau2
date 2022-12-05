<?php 
$action =isset($_GET['action'])?$_GET['action']:'sachgiaokhoa';

if ($action=='sachgiaokhoa')
{
 
    include './View/sachgiaokhoa.php';

}