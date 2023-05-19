<?php
$email = $_POST['email'];
$password = $_POST['password'];

$studentNumber = substr($email, 0, -14);

if ($password === $studentNumber) {
    echo "Hoşgeldiniz \"$studentNumber\". GİRİŞ İŞLEMİ BAŞARILI.";
} else {
    header("Location: giris.html");
    exit();
}
?>