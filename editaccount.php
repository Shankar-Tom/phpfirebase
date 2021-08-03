<?php
include 'dbconnect.php';
use Kreait\Firebase\Exception\FirebaseException;
$id=$_GET['id'];
try {
    $user = $auth->getUser($id);
$name=$user->displayName;
$phone=$user->phoneNumber;
} catch (\Kreait\Firebase\Exception\Auth\UserNotFound $e) {
    echo $e->getMessage();
}
if(isset($_POST['updateUser'])){
$update=[
    'displayName'=>$_POST['name'],
    'phoneNumber'=>$_POST['phone']
];
try{
$updatedUser = $auth->updateUser($id, $update);
header('location:accountlist.php');
}catch(FirebaseException  $e){
    echo $e->getMessage();
} 
}

?>

<form method="POST">
<input type="text" name="name" value="<?= $name?>" id="">
<input type="text" name="phone"  value="<?= $phone ?>" id="">
<input type="submit" name="updateUser" value="Upadte">

</form>