<?php

$conn = new mysqli('localhost','root','','library management system');
if(!$conn){
    die('connection Failed'.mysqli_connect_error());
}

?>