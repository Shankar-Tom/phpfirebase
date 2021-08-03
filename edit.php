<?php
include 'dbconnect.php';
$id=$_GET['id'];
$fetchdata=$database->getReference($table)->getChild($id)->getValue();


?>
<form action="update.php" method="post">
    <input type="text" name="id" id="" value="<?= $id ?>" hidden>
<input type="text" name="name" id="" value="<?= $fetchdata['name']?>">
<input type="email" name="email" id="" value="<?= $fetchdata['email']?>">
<input type="text" name="phone" id="" value="<?= $fetchdata['number']?>">
<input type="submit" value="Update">
</form>
