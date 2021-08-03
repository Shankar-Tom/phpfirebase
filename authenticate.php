<?php
session_start();
include 'dbconnect.php';
use Firebase\Auth\Token\Exception\InvalidToken;
if(isset($_SESSION['uid'])){
    $idTokenString=$_SESSION['idToken'];
    try {
        $verifiedIdToken = $auth->verifyIdToken($idTokenString);
        
        $uid = $verifiedIdToken->claims()->get('sub');
        $_SESSION['idToken']=$idTokenString;
       $_SESSION['uid']=$uid;
   
      
    
    } catch (InvalidToken $e) {
        echo $e->getMessage();
        header('Location:login.php');
    }  catch (\InvalidArgumentException $e) {
        echo $e->getMessage();
        header('Location:login.php');
    }
}else{
    header('Location:login.php');
}
