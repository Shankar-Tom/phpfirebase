<?php
include 'authenticate.php';

echo 'Login With : '.$_SESSION['uid'];

?>
<a href="logout.php">Logout</a>