<?php 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
 
 
require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
 
$email = htmlspecialchars($_POST['email']);
$judul = htmlspecialchars($_POST['judul']);
$pesan = htmlspecialchars($_POST['pesan']);
 
$mail = new PHPMailer(true);
 
try {                       
    $mail->SMTPDebug = 2;  
    $mail->isSMTP();
    $mail->Host       = 'smtp.gmail.com';
    $mail->SMTPAuth   = true;
    // email aktif yang sebelumnya di setting
    $mail->Username   = 'mail@gmail.com';
    // password yang sebelumnya di simpan
    $mail->Password   = 'password-dari-google';
    $mail->SMTPSecure = 'tls';
    $mail->Port       = 587;  
 
    $mail->setFrom('mail@gmail.com', 'tutorial malasngoding');
     $mail->addAddress($email); 
        $mail->isHTML(true);
        $mail->Subject = $judul;    
        $mail->Body = $pesan;
        $mail->send();
        header("location:index.php?alert=berhasil");
 
    }catch (Exception $e) {
    	header("location:index.php?alert=gagal"); 	
    }
 
?>