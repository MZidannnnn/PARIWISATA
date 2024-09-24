<?php
if (!isset($_SESSION)) {
    session_start();
}
if (!$_SESSION['login']) {
    header('location: /pertemuan13c/login-form-20/index.html');
}