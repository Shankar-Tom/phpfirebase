<?php
session_start();
unset($_SESSION['idToken']);
unset($_SESSION['uid']);
header('Location:login.php');