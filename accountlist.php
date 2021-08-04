<?php
include 'dbconnect.php';
$users = $auth->listUsers();
?>
<table border="1"  ><thead>
    <td>Display Name</td>
    <td>Email</td>
    <td>Phone</td>
    <td>A/C Status</td>
    <td>Action</td>
</thead>
<tbody >
<?php
foreach ($users as $user) {
  $accountStatus=$user->disabled?'<a href="enable.php?id='.$user->uid.'"">Disabled</a>':'<a href="disbale.php?id='.$user->uid.'"">Enabled</a>';
  echo '<tr>
  <td>'.$user->displayName.'</td>
  <td>'.$user->email.'</td>
  <td>'.$user->phoneNumber.'</td>
  <td>'.$accountStatus.'</td>
<td><a href="editaccount.php?id='.$user->uid.'">Edit</a>
<a href="deleteaccount.php?id='.$user->uid.'"">Delete</a></td>
  
</tr>';
}

?>

</tbody>
</table>
