<?php
session_start();
include_once('db.php');
// print_r($_SESSION);

if ((!isset($_SESSION['email']) == true) and (!isset($_SESSION['password']) == true)) {
  unset($_SESSION['email']);
  unset($_SESSION['password']);
  header('Location: login.php');
}


$sql = "SELECT * FROM inscritos ORDER BY id DESC";
$result = $conn->query($sql);

?>