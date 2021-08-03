<?php
        include 'dbconnect.php';
  

        $postData = [
            'name'=>$_POST['name'],
            'number'=>$_POST['phone'],
            'email'=>$_POST['email']
        ];
     
$postRef = $database->getReference($table)->push($postData);

if($postRef){
    header("Location:index.php");
}

?>