<?php
// Kullanıcı adı ve şifreyi al
$email = $_POST['email'];
$password = $_POST['password'];

// Kullanıcı adından öğrenci numarasını çıkart
$studentNumber = substr($email, 0, -14);

// Şifre kontrolü
if ($password === $studentNumber) {
    // Başarılı giriş durumunda hoş geldin mesajını göster
    echo "Hoşgeldiniz \"$studentNumber\". Giriş işlemi başarılı.";
} else {
    // Başarısız giriş durumunda kullanıcıyı login sayfasına yönlendir
    header("Location: login.html");
    exit();
}
?>