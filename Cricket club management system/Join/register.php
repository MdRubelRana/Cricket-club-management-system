<?php
  session_start();
   $db = mysqli_connect('localhost', 'root', '', 'registration');

  $username = '';
  $email = '';
  $password_1 = '';
  $password_2 = '';

  if(isset($_POST['register-button'])){
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
    $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);


    if($password_1 == $password_2){
       $sql = "INSERT INTO register (username, email, password) VALUES ('$username', '$email', '$password_1')";
      mysqli_query($db, $sql);
      header('location:join.php');
    }
  }

  if(isset($_POST['login-button'])){
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $password_1 = mysqli_real_escape_string($db, $_POST['password']);

    $query = "SELECT * FROM register WHERE username='$username' AND password='$password_1'";
    $result = mysqli_query($db, $query);
    if(mysqli_num_rows($result) == 1){
      $_SESSION['username'] = $username;
      header("Location: ../Landing Page/homepage.php");
    }
    else{
      echo "Failed";
    }
  }
 ?>
