<?php
$db = mysqli_connect("localhost", "root", "", "enepal");
if(isset($_POST['submit'])){
  $name = mysqli_real_escape_string($db, $_POST['name']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $phone = mysqli_real_escape_string($db, $_POST['phone']);
  $country = mysqli_real_escape_string($db, $_POST['country']);
  $message = mysqli_real_escape_string($db, $_POST['message']);
  $query = "INSERT INTO tbl_contact VALUES ('$name', '$email', '$phone', '$country', '$message')";
  $result = mysqli_query($db, $query);
  print "<p>Person's Information Inserted</p>";
}
$result = mysqli_query($db, "SELECT * FROM tbl_contact");
?>

<table border="2" class="table table-striped">
  <tr>
    <th>ID</th>   
    <th>Name</th>
    <th>Email</th>
    <th>Phone</th>
    <th>Country</th>
    <th>Message</th>
    <th>Action</th>
  </tr>
  <?php 
  while ($array = mysqli_fetch_row($result)) 
  {
    print "<tr> <td>";
    echo $array[0]; 
    print "</td> <td>";
    echo $array[1]; 
    print "</td> <td>";
    echo $array[2]; 
    print "</td> <td>";
    echo $array[3]; 
    print "</td> <td>";
    echo $array[4]; 
    print "</td> <td>";
    echo $array[5]; 
    print "</td> <td>";
    echo "<a href='?page=contact-delete&id=".$array[0]."'>Delete</a>";
    print "</td> </tr>";
  }
  ?>
</table>
