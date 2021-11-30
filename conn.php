<?php
$conn = mysqli_connect('localhost', 'root', '', 'facebook_post');

if (!$conn) {
   die('Connection failed'. mysqli_connect_error(). ' - '. mysqli_connect_error());
 }else {
    echo "Connected successfully!";
 }

?>
