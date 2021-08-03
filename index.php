<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Firebase test</title>
</head>
<body>
<form action="add.php" method="post">
<input type="tel" name="name" id="">
<input type="email" name="email">
<input type="tel" name="phone" id="">
<input type="submit" value="Save data">
</form>
<a href="register.php">Register</a>
<a href="login.php">Login</a>

<br> <br>
<table border="1">
    <thead>
        <tr><th>Name</th><th>Email</th><th>Phone</th><th>Action</th></tr>
    </thead>

<?php  
include 'dbconnect.php';  
  $fetchdata=$database->getReference($table)->getValue();
    $totalNumber=$database->getReference($table)->getSnapshot()->numChildren();
   echo 'Total data :'.$totalNumber;
  if($fetchdata>0){
    foreach($fetchdata as $key=>$row)
    {
        echo '<tbody>
        <tr>
        <td>'.$row['name'].'</td>
        <td>'.$row['email'].'</td>
        <td>'.$row['number'].'</td>
        <td><a href="edit.php?id='.$key.'">Edit</a></td>
        <td><a href="delete.php?id='.$key.'">Delete</a></td>

        </tr>
    </tbody>';

    }
    
   
  }
  else{
      echo 'No data found';
  }


?>


</table>


</body>
</html>