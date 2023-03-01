<?php
$servername = "localhost";
$username = "root";
$password = "";

// $username = "thaibyhost_soo_db";
// $password = "eBAE2gWPTk";

try {
  $conn = new PDO("mysql:host=$servername;dbname=webisme;charset=utf8", $username, $password);
  // $conn = new PDO("mysql:host=$servername;dbname=thaibyhost_soo_db;charset=utf8", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  //echo "Connected successfully";
} catch (PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
