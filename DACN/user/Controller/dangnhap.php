<?php 

$action =isset($_GET['action'])?$_GET['action']:'dangnhap';
$dangnhap = new dangnhapmodel();

if ($action=='dangnhap')
{
    include'./View/dangnhap.php';

}
if($action=='login')
{ 
    if(!isset($_SESSION)){
    session_start();
    $email=$_POST['email'];
    $password=md5($_POST['password']);
    $data=$dangnhap->dangnhap($email,$password);

    if($data>0){
        $_SESSION["email"]=$email;
        header('location:index.php?controller=trangchu');
    }else{
        header('location:index.php?controller=dangnhap');
    }
}
}
if ($action=='dangky')
{
    include './View/dangky.php';
}
if ($action=='logout')
{
	if(!isset($_SESSION)){
    session_start();
	session_destroy();
    header('location:index.php?controller=trangchu');
}
}
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
if($action=='xuly'){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];
    $password = md5($_POST['password']);
    $repassword = md5($_POST['repassword']);
   $arr=[$email,$password, $name, $address, $phone];
    $data=$dangnhap->insert($email,$password, $name, $address, $phone);
    $data=$dangnhap->all();
    header('location:index.php?controller=dangnhap');


    require('mail/PHPMailer/Exception.php');
    require('mail/PHPMailer/SMTP.php');
    require('mail/PHPMailer/PHPMailer.php');

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
                       //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'dangkhoathai163@gmail.com';                     //SMTP username
    $mail->Password   = 'vtcrywlawrqbtnbr';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('dangkhoathai163@gmail.com', 'Admin BOOK TORE');
    $mail->addAddress($email, $ten);     //Add a recipient
    

    

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Dang ky tai khoan BOOKSTORE STU thanh cong';
    $mail->Body    = '<b>Email: </b>'.$email.'<br><b>Password: </b>'.$_POST['password'];
    $mail->AltBody = '<b>Email: </b>'.$email.'<br><b>Password: </b>'.$_POST['password'];

    $mail->send();
    //echo 'G???i email th??nh c??ng';
} catch (Exception $e) {
    echo "Kh??ng g???i ???????c email. email l???i: {$mail->ErrorInfo}";
}

    $message = "????ng k?? t??i kho???n th??nh c??ng.";
            echo "<script type='text/javascript'>alert('$message');</script> Nh???n v??o ????y ????? <a href='javascript: history.go(-1)'>Tr??? l???i</a>";
            exit;   

}
        
    

?>