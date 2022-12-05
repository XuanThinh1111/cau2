<?php 
$action =isset($_GET['action'])?$_GET['action']:'tieuthuyet';

if ($action=='tieuthuyet')
{
   
  
    include './View/tieuthuyet.php';

}