<?php
include "conn.php";
if ($_POST["pass"] == $_POST["pass2"]) {

    if( isset($_POST['username'])){
      $username = $_POST['username'];
    }
    if( isset($_POST['email'])){
      $email = $_POST['email'];
    }
    if( isset($_POST['password'])){
      $password = $_POST['password'];
    }
    if ($username&&$email&&$password) {
      $insert_query = "INSERT INTO `users`(`username`, `email`, `password`) VALUES ('". $username ."','". $email ."','". $password ."')";

      $result = mysqli_query($conn, $insert_query);

      if ($result) {
        echo "Record creatted successfully";

      }else {
        die('Query failed!'. mysqli_error($conn));
      }
      if ($result) {
        header('Location: login.php');
      }//else {
        //  die('Cration failed' . mysqli_error($conn));
        //}
      }else {
        echo "Provide text in the boxes!";
      }
    }
    //2 insert_query



    //3


    //var_dump($result);


?>
