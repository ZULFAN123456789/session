<?php
$id = $_GET['id'];

$db = new PDO("mysql:host=localhost;dbname=rumkit", 'root', '');
$query = $db->query("DELETE FROM user WHERE id='$id'");

if($query){
    header("location:admin.php");
}