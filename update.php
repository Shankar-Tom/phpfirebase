<?php
include 'dbconnect.php';
$id=$_POST['id'];
$postData = [
    'name'=>$_POST['name'],
    'number'=>$_POST['phone'],
    'email'=>$_POST['email']
];
$updatetable=$table."/".$id;
$update=$database->getReference($updatetable)->update($postData);
if($update){
    header('Location:index.php');

}
else{
    header('Location:edit.php');
}
