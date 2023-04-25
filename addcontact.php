<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "product";

// Create connection
$join = mysqli_connect($servername, $username, "", $dbname);
// Check connection
if (!$join) {
  die("Connection failed: ". mysqli_connect_error());
}else{
// echo "Thanks For Chousing Us..!"
}

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
  $fname = $_POST['fname'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $msg = $_POST['msg'];
}

  $sql = "INSERT INTO user_msg (fname, email, phone, msg ) VALUES ('$fname', '$email', '$phone', '$msg')";
  $result = mysqli_query($join, $sql);
  
  if($result){
    echo '<div class= "alert alert-success alert-dismissible fade show" role="alert"><strong>Success!</strong> Your Massege Successfully Sent..!</div>';
  }
  else{
    echo "Sorry Record Not Inseerted Successfully--->". mysqli_error($join);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> 

</head>
<body>
    
    <a class="btn btn-success-p-6" href="index.php">Back To Home</a>
    
</body>
</html>



