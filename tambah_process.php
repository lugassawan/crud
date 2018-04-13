<?php
session_start();
include('inc.php');

$name = $_POST['name'];
$address = $_POST['address'];

$query = mysqli_query($db, "INSERT INTO tb_info(name, address) VALUES('$name', '$address')");


header("location: index.php");
?>