<?php
session_start();
$_SESSION["sesi"] = '';

unset($_SESSION['sesi']);
session_unset();
session_destroy();
header('Location:login.php');
