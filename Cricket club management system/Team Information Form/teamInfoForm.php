<?php
  include('teamregister.php');
  include('../Join/register.php');
 ?>



<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Team Information Form</title>
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
          <li><a class="active" href="../Team Information Form/teamInfoForm.php">TEAM</a></li>
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



  <section>
    <div class="container-fluid">
      <div class="container">
        <div class="formBox">
          <form action="teamInfoForm.php" method="post" role="form">
            <div class="row">
              <div class="col-sm-12">
                <h1>Team Information Form</h1>
              </div>

              <div class="col-sm-6">
                <div class="inputBox">
                  <div class="inputText">Club id</div>
                  <input type="text" name="clubid" class="input" required>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="inputBox">
                  <div class="inputText">Player id</div>
                  <input type="text" name="playerid" class="input">
                </div>
              </div>

              <div class="col-sm-6">
                <div class="inputBox">
                  <div class="inputText">Team formation date (DD-MM-YYYY)</div>
                  <input type="text" name="tfdate" class="input">
                </div>
              </div>
              <div class="col-sm-6">
                <div class="inputBox">
                  <div class="inputText">Event name/Event id</div>
                  <input type="text" name="eventname" class="input">
                </div>
              </div>

              <div class="col-sm-6">
                <div class="inputBox">
                  <div class="inputText">Team leader id (Player id)</div>
                  <input type="text" name="teamleaderid" class="input">
                </div>
              </div>
              <div class="col-sm-6">
                <div class="inputBox">
                  <div class="inputText">Player name</div>
                  <input type="text" name="playername" class="input">
                </div>
              </div>

              <div class="col-sm-6">
                <div class="inputBox">
                  <div class="inputText">Coach id</div>
                  <input type="text" name="coachid" class="input">
                </div>
              </div>
              <div class="col-sm-6">
                <div class="inputBox">
                  <div class="inputText">Coach name</div>
                  <input type="text" name="coachname" class="input">
                </div>
              </div>


              <table id="form-table" class="table table-striped">
                <thead id="table-head">
                  <tr>
                    <th id="header-id">Player id</th>
                    <th>Name</th>
                  </tr>
                </thead>
                <tbody id="table-body">

                  <tr>
                    <td><input class="col-xs-6" type="text" name="playerid_01" value="" placeholder="1001"></td>
                    <td><input class="col-xs-10" type="text" name="playername_01" value="" placeholder="Ashraful Kabir"></td>
                  </tr>
                  <tr>
                    <td><input class="col-xs-6" type="text" name="playerid_02" value=""></td>
                    <td><input class="col-xs-10" type="text" name="playername_02" value=""></td>
                  </tr>
                  <tr>
                    <td><input class="col-xs-6" type="text" name="playerid_03" value=""></td>
                    <td><input class="col-xs-10" type="text" name="playername_03" value=""></td>
                  </tr>
                  <!-- <tr>
                    <td><input class="col-xs-6" type="text" name="playerid_01" value=""></td>
                    <td><input class="col-xs-10" type="text" name="playername_01" value=""></td>
                  </tr>
                  <tr>
                    <td><input class="col-xs-6" type="text" name="playerid_01" value=""></td>
                    <td><input class="col-xs-10" type="text" name="playername_01" value=""></td>
                  </tr> -->
                  <!--<tr>
                        <td><input class="col-xs-6" type="text" name="" value=""></td>
                        <td><input class="col-xs-10" type="text" name="" value=""></td>
                      </tr>
                      <tr>
                        <td><input class="col-xs-6" type="text" name="" value=""></td>
                        <td><input class="col-xs-10" type="text" name="" value=""></td>
                      </tr>
                      <tr>
                        <td><input class="col-xs-6" type="text" name="" value=""></td>
                        <td><input class="col-xs-10" type="text" name="" value=""></td>
                      </tr>
                      <tr>
                        <td><input class="col-xs-6" type="text" name="" value=""></td>
                        <td><input class="col-xs-10" type="text" name="" value=""></td>
                      </tr>
                      <tr>
                        <td><input class="col-xs-6" type="text" name="" value=""></td>
                        <td><input class="col-xs-10" type="text" name="" value=""></td>
                      </tr>
                      <tr>
                        <td><input class="col-xs-6" type="text" name="" value=""></td>
                        <td><input class="col-xs-10" type="text" name="" value=""></td>
                      </tr>
                      <tr>
                        <td><input class="col-xs-6" type="text" name="" value=""></td>
                        <td><input class="col-xs-10" type="text" name="" value=""></td>
                      </tr>
                      <tr>
                        <td><input class="col-xs-6" type="text" name="" value=""></td>
                        <td><input class="col-xs-10" type="text" name="" value=""></td>
                      </tr>
                      <tr>
                        <td><input class="col-xs-6" type="text" name="" value=""></td>
                        <td><input class="col-xs-10" type="text" name="" value=""></td>
                      </tr>
                      <tr>
                        <td><input class="col-xs-6" type="text" name="" value=""></td>
                        <td><input class="col-xs-10" type="text" name="" value=""></td>
                      </tr> -->
                  <!-- <tr>
                        <td><input class="col-xs-6" type="text" name="" value=""></td>
                        <td><input class="col-xs-10" type="text" name="" value=""></td>
                      </tr>
                      <tr>
                        <td><input class="col-xs-6" type="text" name="" value=""></td>
                        <td><input class="col-xs-10" type="text" name="" value=""></td>
                      </tr>
                      <tr>
                        <td><input class="col-xs-6" type="text" name="" value=""></td>
                        <td><input class="col-xs-10" type="text" name="" value=""></td>
                      </tr>
                      <tr>
                        <td><input class="col-xs-6" type="text" name="" value=""></td>
                        <td><input class="col-xs-10" type="text" name="" value=""></td>
                      </tr>
                      <tr>
                        <td><input class="col-xs-6" type="text" name="" value=""></td>
                        <td><input class="col-xs-10" type="text" name="" value=""></td>
                      </tr>
                      <tr>
                        <td><input class="col-xs-6" type="text" name="" value=""></td>
                        <td><input class="col-xs-10" type="text" name="" value=""></td>
                      </tr>
                      <tr>
                        <td><input class="col-xs-6" type="text" name="" value=""></td>
                        <td><input class="col-xs-10" type="text" name="" value=""></td>
                      </tr>
                      <tr>
                        <td><input class="col-xs-6" type="text" name="" value=""></td>
                        <td><input class="col-xs-10" type="text" name="" value=""></td>
                      </tr>
                      <tr>
                        <td><input class="col-xs-6" type="text" name="" value=""></td>
                        <td><input class="col-xs-10" type="text" name="" value=""></td>
                      </tr>
                      <tr>
                        <td><input class="col-xs-6" type="text" name="" value=""></td>
                        <td><input class="col-xs-10" type="text" name="" value=""></td>
                      </tr>
                      <tr>
                        <td><input class="col-xs-6" type="text" name="" value=""></td>
                        <td><input class="col-xs-10" type="text" name="" value=""></td>
                      </tr>
                      <tr>
                        <td><input class="col-xs-6" type="text" name="" value=""></td>
                        <td><input class="col-xs-10" type="text" name="" value=""></td>
                      </tr>
                      <tr>
                        <td><input class="col-xs-6" type="text" name="" value=""></td>
                        <td><input class="col-xs-10" type="text" name="" value=""></td>
                      </tr>
                      <tr>
                        <td><input class="col-xs-6" type="text" name="" value=""></td>
                        <td><input class="col-xs-10" type="text" name="" value=""></td>
                      </tr>
                      <tr>
                        <td><input class="col-xs-6" type="text" name="" value=""></td>
                        <td><input class="col-xs-10" type="text" name="" value=""></td>
                      </tr> -->
                </tbody>
              </table>


              <div class="col-sm-12">
                <input type="submit" class="team-info-button" name="team-reg-btn" value="Submit">
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
