<?php
  $db = mysqli_connect('localhost', 'root', '', 'registration');

  $firstname = '';
  $lastname = '';
  $age = '';
  $mobile = '';
  $email = '';
  $address = '';
  $password_1 = '';
  $password_2 = '';

  if(isset($_POST['profile-info-button'])){
    $firstname = mysqli_real_escape_string($db, $_POST['firstname']);
    $lastname = mysqli_real_escape_string($db, $_POST['lastname']);
    $age = mysqli_real_escape_string($db, $_POST['age']);
    $mobile = mysqli_real_escape_string($db, $_POST['mobile']);
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $address = mysqli_real_escape_string($db, $_POST['address']);
    $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
    $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);




    if($password_1 == $password_2){

      $sql = "INSERT INTO profileinfo (firstname, lastname, age, mobile, email, address, password) VALUES ('$firstname', '$lastname', '$age', '$mobile', '$email', '$address', '$password_1')";
     mysqli_query($db, $sql);
    }
    }
 ?>
