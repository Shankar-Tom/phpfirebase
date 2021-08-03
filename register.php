<?php
include 'dbconnect.php';
use Kreait\Firebase\Exception\FirebaseException;

if(isset($_POST['register'])){
    $userProperties = [
        'email' => $_POST['email'],
        'emailVerified' => false,
        'phoneNumber' =>'+91'.$_POST['phone'],
        'password' => $_POST['password'],
        'displayName' => $_POST['name']
       
    ];
    //print_r($userProperties);exit;
    try{
    $createdUser = $auth->createUser($userProperties);

        header('Location:login.php');

}catch(FirebaseException  $e){
    echo $e->getMessage();
}
}


?>
<form method="POST">
    <input type="text" name="name" id="">
    <input type="email" name="email" id="">
    <input type="tel" name="phone" id="">
    <input type="password" name="password" id="">
    <input type="submit" name="register" id="">

</form>