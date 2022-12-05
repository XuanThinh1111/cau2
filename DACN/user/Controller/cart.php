<?php 
if(!isset($_SESSION))
{
    session_start();               
}
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

$action =isset($_GET['action'])?$_GET['action']:'cart';
$book = new Book();

if ($action=='cart')
{  
    $data = $book->sptrongcart();
    include './View/giohang.php';
}
if(!isset($_SESSION["cart"]))
    {
        $_SESSION["cart"] =array();           
    }
    if(isset($_GET['action']))
    {
        function update_cart($add = false)
        {
                    foreach ($_POST['quantity'] as $id => $quantity){
            if($quantity == 0){
                    unset($_SESSION['cart'][$id]);
            }else{
                if($add) {
                    $_SESSION['cart'][$id] += $quantity;
                }else{
                    $_SESSION['cart'][$id] = $quantity;
                }
            }
                    }
                }
        switch($_GET['action']){
            case "add":
                
                $tongtien = 0;
                update_cart(true);
               
                header('location: index.php?controller=cart&action=cart');

                break;

            case "delete":
                if(isset($_GET['id']))
                {
                    unset($_SESSION['cart'][$_GET['id']]);
                }
                header('location: index.php?controller=cart&action=cart');
                break;
                        case "submit":
                            if(isset($_SESSION["email"])){
                                        $tongtien = 0;
                        $data=$book->$booktrongcart();

                        foreach($data as $value)
                        {
                            $tongtien += $value['gia']*$_POST['quantity'][$value['cat_id']]; 
                        }
                    }
                }
            }
