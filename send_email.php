<?php
// Load PHPMailer

require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
require 'PHPMailer/src/Exception.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = htmlspecialchars($_POST['name']);  // Ambil data nama
    $email = htmlspecialchars($_POST['email']); // Ambil email pengunjung
    $message = htmlspecialchars($_POST['message']); // Ambil pesan pengunjung

    // Inisialisasi PHPMailer
    $mail = new PHPMailer(true);

    try {
        // Konfigurasi SMTP
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com'; // Server SMTP Gmail
        $mail->SMTPAuth   = true;
        $mail->Username   = 'husnazakiyya23@gmail.com'; // Ganti dengan email Gmail admin
        $mail->Password   = 'xdbm icuo iyzu rqcf'; // Ganti dengan sandi aplikasi Google
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port       = 587;

        // Pengirim & Penerima
        $mail->setFrom($email, $name); // Email pengirim dari pengunjung
        $mail->addAddress('husnazakiyya23@gmail.com', 'Admin'); // Email penerima (admin)

        // Konten Email
        $mail->isHTML(true);
        $mail->Subject = 'Pesan Baru dari Pengunjung Website';
        $mail->Body    = "
            <h3>Pesan Baru dari Pengunjung</h3>
            <p><strong>Nama:</strong> $name</p>
            <p><strong>Email:</strong> $email</p>
            <p><strong>Pesan:</strong><br>$message</p>
        ";

        // Kirim Email
        $mail->send();
        echo "Pesan berhasil dikirim!";
    } catch (Exception $e) {
        echo "Pesan gagal dikirim. Error: {$mail->ErrorInfo}";
    }
} else {
    echo "Metode tidak valid.";
}
?>
