<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "product";

// Create connection
$join = new mysqli($servername, $username, "", $dbname);
// Check connection
if ($join->connect_error) {
  die("Connection failed: " . $join->connect_error);
}