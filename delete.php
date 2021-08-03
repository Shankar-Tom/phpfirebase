<?php
include 'dbconnect.php';
$id=$_GET['id'];
$updatetable=$table."/".$id;

$delete=$database->getReference($updatetable)->remove();
if($delete){
    header('Location:index.php');

}
else{
    header('Location:edit.php');
}