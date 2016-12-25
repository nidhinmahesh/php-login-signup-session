<?php
session_start();
include'dbh.php';

$uid= $_POST['uid'];
$pwd= $_POST['pwd'];

$sql = "SELECT * FROM user WHERE uid='$uid' AND pwd='$pwd'";
$result= $conn->query($sql);

if(!$row= $result->fetch_assoc()){
  echo "password is incorrect!. please check again";
}else {
  $_SESSION['id'] = $row['id'];
}

header("Location: index.php");
?>
