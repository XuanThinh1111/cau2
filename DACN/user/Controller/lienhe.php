<?php 
$action =isset($_GET['action'])?$_GET['action']:'lienhe';

if ($action=='lienhe')
{
    include './View/lienhe.php';

}