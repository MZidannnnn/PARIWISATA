<?php
session_start();

include '../connection/koneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];

$result = $db->query("SELECT * FROM user WHERE username= '$username'");

// buat perulangan if
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    if (password_verify($password, $row['password'])) {
        $_SESSION['login'] = true;
        header('location: /pertemuan13c/view/tampil-pesanan.php');
    }
}
// var_dump($_POST);
// die;
echo "
        <script>
        alert('Username Dan Password Salah!');
        document.location.href = '/pertemuan13c/login-form-20/index.html';    
        </script>";

