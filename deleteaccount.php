<?php
include 'dbconnect.php';
$id=$_GET['id'];


$auth->deleteUser($id);
header('location:accountlist.php');