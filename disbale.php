<?php

use Kreait\Firebase\Exception\FirebaseException;

include 'dbconnect.php';
$id=$_GET['id'];
try{
$updatedUser = $auth->disableUser($id);
header('Location:accountlist.php');
}catch (FirebaseException $e){
    echo $e->getMessage();
}