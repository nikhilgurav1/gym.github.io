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
  
}

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
  $product_name = $_POST['product_name'];
  $Price = $_POST['Price'];
  $mfgdate = $_POST['mfgdate'];
  $Exp_date = $_POST['Exp_date'];
  $qut = $_POST['qut'];
}

  $sql = "INSERT INTO addp (product_name, Price, mfgdate, Exp_date, qut) VALUES ('$product_name', '$Price', '$mfgdate', '$Exp_date', '$qut')";
  $result = mysqli_query($join, $sql);
  
  if($result){
    echo '<div class= "alert alert-success alert-dismissible fade show" role="alert"><strong>Success!</strong> Your Product Added Successfully..!</div>';
  }
  else{
    echo "Sorry Record Not Inseerted Successfully--->". mysqli_error($join);
}

?>

