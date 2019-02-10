<?php
  include('clubregister.php');
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Club Registration Form</title>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="../Landing Page/css/style.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
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
          <li><a class="active" href="../Club Registration Form/clubRegistration.php">CLUB</a></li>
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


  <section>
    <div class="container-fluid">
      <div class="container">
        <div class="formBox">
          <form action="clubRegistration.php" method="post" role="form">
            <div class="row">
              <div class="col-sm-12">
                <h1>Club Registration Form</h1>
              </div>

              <div class="col-sm-6">
                <div class="inputBox">
                  <div class="inputText">Name of the club</div>
                  <input type="text" name="clubname" class="input" required>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="inputBox">
                  <div class="inputText">Date of Establishment (DD-MM-YYYY)</div>
                  <input type="text" name="estdate" class="input" required>
                </div>
              </div>

              <div class="col-sm-6">
                <div class="inputBox">
                  <div class="inputText">House No.</div>
                  <input type="text" name="house" class="input" required>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="inputBox">
                  <div class="inputText">Location</div>
                  <input type="text" name="location" class="input" required>
                </div>
              </div>

              <div class="col-sm-6">
                <div class="inputBox">
                  <div class="inputText">Village/Street</div>
                  <input type="text" name="village" class="input" required>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="inputBox">
                  <div class="inputText">Thana</div>
                  <input type="text" name="thana" class="input" required>
                </div>
              </div>

              <div class="col-sm-6">
                <div class="inputBox">
                  <div class="inputText">District</div>
                  <input type="text" name="district" class="input" required>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="inputBox">
                  <div class="inputText">Post code</div>
                  <input type="text" name="postcode" class="input" required>
                </div>
              </div>

              <div class="col-sm-6">
                <div class="inputBox">
                  <div class="inputText">Name of the President</div>
                  <input type="text" name="president" class="input" required>
                </div>
              </div>

              <div class="col-sm-12">
                <input type="submit" class="club-reg-button" id="club-reg-button" name="club-reg-button" value="Register">
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>



  <div class="copyright">
    <p>©2018 | All right reserved by Rubel & Navid</p>
  </div>

  <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
  <script type="text/javascript">
    $(".input").focus(function() {
      $(this).parent().addClass("focus")
    }).blur(function() {
      if ($(this).val() === '') {
        $(this).parent().removeClass("focus");
      }
    })
  </script>

</body>

</html>
