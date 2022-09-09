<?php
$username = $_POST['username'];
$password = $_POST['password'];
$role = $_POST['role'];

$db = new PDO("mysql:host=localhost;dbname=rumkit", 'root', '');
$query = $db->query("INSERT INTO `user`(`id`, `username`, `password`, `role`) VALUES ('','$username','$password','$role')");

if($query){
    header("location:admin.php");
}