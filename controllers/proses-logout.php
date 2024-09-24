<?php
session_start();
session_unset();
session_destroy();

header('location: /pertemuan13c/login-form-20/index.html');