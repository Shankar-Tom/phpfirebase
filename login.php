<?php
session_start();
include 'dbconnect.php';

use Kreait\Firebase\Exception\FirebaseException;

if(isset($_POST['login'])){
    $email=$_POST['email'];
    $password=$_POST['password'];
    try {
         $user = $auth->getUserByEmail($email);
         
  
                try {
                    $signInResult = $auth->signInWithEmailAndPassword($email, $password);
                        
                        $idTokenString=$signInResult->idToken();
                    $verifiedIdToken = $auth->verifyIdToken($idTokenString);
                    
                    $uid = $verifiedIdToken->claims()->get('sub');
                    $_SESSION['idToken']=$idTokenString;
                $_SESSION['uid']=$uid;
                    header('Location:home.php');
                

                } catch(FirebaseException  $e){
                    echo $e->getMessage();
                } 
    }

    catch (\Kreait\Firebase\Exception\Auth\UserNotFound $e) {
        echo $e->getMessage();
    }
}

?>



<form method="POST">
<input type="email" name="email" id="">
<input type="password" name="password" id="">
<input type="submit" value="Login" name="login">

</form>