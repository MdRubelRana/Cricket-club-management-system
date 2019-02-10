<?php
  include('profileregister.php');
  include('../Join/register.php');
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <title>Profile</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <link rel="stylesheet" href="css/style.css">

</head>
  <body>
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand" href="../Landing Page/homepage.php"><img src="../Landing Page/img/cricketlogo.png" alt=""></a>
        </div>
        <div class="collapse navbar-collapse" id="navbar-collapse-man">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="../Team Information Form/teamInfoForm.php">TEAM</a></li>
            <li><a href="../Contract Form/contractForm.php">CONTRACT</a></li>
            <li><a href="../Club Registration Form/clubRegistration.php">CLUB</a></li>
            <li><a href="../Player Registration Form/playerRegistration.php">PLAYER</a></li>
            <li class="dropdown">
                 <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="glyphicon glyphicon-cog"></i></a>
                  <ul class="dropdown-menu" role="menu">
                     <li class="divider"></li>
                     <li><a href="../Profile/profile.php"><i class="glyphicon glyphicon-user"></i>&nbsp; Profile</a></li>
                     <li class="divider"></li>
                     <li><a href="../Profile/logout.php"><i class="glyphicon glyphicon-log-out"></i>&nbsp; Logout</a></li>
                  </ul>
              </li>
          </ul>
        </div>
      </div>
    </nav>



    <hr>
    <div id="profile-body" class="container bootstrap snippet">
      <div class="row">
        <div class="col-sm-12">
          <h1 class="welcome-profile">
                <?php
                  echo "Welcome ".$_SESSION['username'];
                ?></h1>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-3">



          <div class="text-center">
            <img src="http://ssl.gstatic.com/accounts/ui/avatar_2x.png" class="avatar img-circle img-thumbnail" alt="avatar">
            <h6>Upload a different photo</h6>
            <input type="file" class="text-center center-block file-upload">
          </div>
          </hr><br>


          <div class="panel panel-default">
            <div class="panel-heading"><i class="glyphicon glyphicon-user 2x"></i>  &nbsp; <?php
              $conn = mysqli_connect("localhost", "root", "", "registration");
              $sql = "SELECT firstname, lastname FROM profileinfo";
              $result = $conn->query($sql);
                while($row = $result->fetch_assoc()) {
                  echo  $row["firstname"] . " " . $row["lastname"];
                }
                ?></div>
          </div>


        </div>
        	<div class="col-sm-9">
                <ul class="nav nav-tabs">
                    <li  class="active"><a data-toggle="tab" href="#home">Profile</a></li>
                    <li><a data-toggle="tab" href="#settings">Settings</a></li>
                  </ul>


              <div class="tab-content">
                <div class="tab-pane active" id="home">
                    <hr>
                      <form class="form" action="##" method="post" id="registrationForm">
                        <div class="form-group">

                          <div class="col-xs-6">
                            <label for="first_name">
                              <h4>First Name</h4>
                            </label>
                            <input type="text" class="form-control" name="firstname" id="first_name" placeholder="first name" value="
                              <?php
                                $conn = mysqli_connect("localhost", "root", "", "registration");
                                $sql = "SELECT firstname FROM profileinfo";
                                $result = $conn->query($sql);
                                  while($row = $result->fetch_assoc()) {
                                    echo $row["firstname"];
                                  }
                                  ?>" disabled="disabled" readonly>
                          </div>
                        </div>
                        <div class="form-group">

                          <div class="col-xs-6">
                            <label for="last_name">
                              <h4>Last Name</h4>
                            </label>
                            <input type="text" class="form-control" name="lastname" id="last_name" value="
                              <?php
                                $conn = mysqli_connect("localhost", "root", "", "registration");
                                $sql = "SELECT lastname FROM profileinfo";
                                $result = $conn->query($sql);
                                  while($row = $result->fetch_assoc()) {
                                    echo  $row["lastname"];
                                  }
                                  ?>" disabled="disabled" readonly>
                          </div>
                        </div>

                        <div class="form-group">

                          <div class="col-xs-6">
                            <label for="phone">
                              <h4>Age</h4>
                            </label>
                            <input type="text" class="form-control" name="age" id="phone" value="
                              <?php
                                $conn = mysqli_connect("localhost", "root", "", "registration");
                                $sql = "SELECT age FROM profileinfo";
                                $result = $conn->query($sql);
                                  while($row = $result->fetch_assoc()) {
                                    echo  $row["age"];
                                  }
                                  ?>" disabled="disabled" readonly>
                          </div>
                        </div>

                        <div class="form-group">
                          <div class="col-xs-6">
                            <label for="mobile">
                              <h4>Mobile</h4>
                            </label>
                            <input type="text" class="form-control" name="mobile" id="mobile" value="
                              <?php
                                $conn = mysqli_connect("localhost", "root", "", "registration");
                                $sql = "SELECT mobile FROM profileinfo";
                                $result = $conn->query($sql);
                                  while($row = $result->fetch_assoc()) {
                                    echo  $row["mobile"];
                                  }
                                  ?>" disabled="disabled" readonly>
                          </div>
                        </div>
                        <div class="form-group">

                          <div class="col-xs-6">
                            <label for="email">
                              <h4>Email</h4>
                            </label>
                            <input type="email" class="form-control" name="email" id="email" value="
                              <?php
                                $conn = mysqli_connect("localhost", "root", "", "registration");
                                $sql = "SELECT email FROM profileinfo";
                                $result = $conn->query($sql);
                                  while($row = $result->fetch_assoc()) {
                                    echo  $row["email"];
                                  }
                                  ?>" disabled="disabled" readonly>
                          </div>
                        </div>
                        <div class="form-group">

                          <div class="col-xs-6">
                            <label for="email">
                              <h4>Address</h4>
                            </label>
                            <input type="text" class="form-control" name="address"
                             id="location" value="
                               <?php
                                 $conn = mysqli_connect("localhost", "root", "", "registration");
                                 $sql = "SELECT address FROM profileinfo";
                                 $result = $conn->query($sql);
                                   while($row = $result->fetch_assoc()) {
                                     echo  $row["address"];
                                   }
                                   ?>" disabled="disabled" readonly>
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="col-xs-12">
                            <br>
                            <button data-toggle="tab" href="#settings" class="btn btn-lg btn-success pull-right" type="submit"><i class="glyphicon glyphicon-pencil"></i> Change </button>
                          </div>
                        </div>
                  	</form>

                  <hr>

                 </div>


                 <div class="tab-pane" id="settings">
                      <hr>
                      <form class="form" action="##" method="post" id="registrationForm">
                        <div class="form-group">

                          <div class="col-xs-6">
                            <label for="first_name">
                              <h4>First Name</h4>
                            </label>
                            <input type="text" class="form-control" name="firstname" id="first_name" placeholder="Enter first name">
                          </div>
                        </div>
                        <div class="form-group">

                          <div class="col-xs-6">
                            <label for="last_name">
                              <h4>Last Name</h4>
                            </label>
                            <input type="text" class="form-control" name="lastname" id="last_name" placeholder="Enter last name">
                          </div>
                        </div>

                        <div class="form-group">

                          <div class="col-xs-6">
                            <label for="phone">
                              <h4>Age</h4>
                            </label>
                            <input type="text" class="form-control" name="age" id="phone" placeholder="Enter age">
                          </div>
                        </div>

                        <div class="form-group">
                          <div class="col-xs-6">
                            <label for="mobile">
                              <h4>Mobile</h4>
                            </label>
                            <input type="text" class="form-control" name="mobile" id="mobile" placeholder="Enter mobile name">
                          </div>
                        </div>
                        <div class="form-group">

                          <div class="col-xs-6">
                            <label for="email">
                              <h4>Email</h4>
                            </label>
                            <input type="email" class="form-control" name="email" id="email" placeholder="Enter email address">
                          </div>
                        </div>
                        <div class="form-group">

                          <div class="col-xs-6">
                            <label for="email">
                              <h4>Address</h4>
                            </label>
                            <input type="text" class="form-control" name="address" id="location" placeholder="Enter address">
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="col-xs-6">
                            <label for="email">
                              <h4>Password</h4>
                            </label>
                            <input type="password" class="form-control" name="password_1" id="location" placeholder="Enter your password">
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="col-xs-6">
                            <label for="email">
                              <h4>Confirm Password</h4>
                            </label>
                            <input type="password" class="form-control" name="password_2" id="location" placeholder="Enter confirm password">
                          </div>
                        </div>
                          <div class="form-group">
                               <div class="col-xs-12">
                                    <br>
                                  	<button class="btn btn-lg btn-success pull-right" name="profile-info-button" type="submit"><i class="glyphicon glyphicon-ok-sign"></i> Save</button>
                                </div>
                          </div>
                  	</form>
                  </div>

                  </div>
              </div>

            </div>
        </div>


        <div class="copyright">
          <p>©2018 | All right reserved by Rubel & Navid</p>
        </div>


<script type="text/javascript">
$(document).ready(function() {


    var readURL = function(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('.avatar').attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
    $(".file-upload").on('change', function(){
        readURL(this);
    });
});

</script>

  </body>

</html>
