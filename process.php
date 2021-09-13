<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank You Page</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
<?php

$conn = mysqli_connect("localhost", "root", "root", "blkdg");
if($conn === false){
    die("Error Connection. " 
        . mysqli_connect_error());
}
$first =  $_REQUEST['first'];
$last = $_REQUEST['last'];
$email = $_REQUEST['email'];
$password = $_REQUEST['password'];
$sql = "INSERT INTO users VALUES ('$first','$last','$email','$password')";

if(mysqli_query($conn, $sql)){ ?>
  
  <div class="copyWrapper">
  <h3>Success!! Please check out the "users" table in the "blkdg" database</h3>
  <?php echo nl2br("\n$first".' '."$last\n ". "$email\n $password"); ?>
  </div>

<?php } else{ ?>
        <?php mysqli_error($conn); ?>
<?php }
mysqli_close($conn);
?>

</body>
</html>