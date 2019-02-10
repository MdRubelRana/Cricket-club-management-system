<?php
  include('../Join/register.php');
  include('playerregister.php');
 ?>


<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Player Registration Form</title>
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
          <li><a href="../Club Registration Form/clubRegistration.php">CLUB</a></li>
          <li><a class="active" href="../Player Registration Form/playerRegistration.php">PLAYER</a></li>
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
          <form action="playerRegistration.php" method="post" role="form">
            <div class="row">
              <div class="col-sm-12">
                <h1>Player Registration Form</h1>
              </div>

              <div class="col-sm-4">
                <div class="inputBox">
                  <div class="inputText">First Name:</div>
                  <input type="text" name="firstname" class="input" required>
                </div>
              </div>
              <div class="col-sm-4">
                <div class="inputBox">
                  <div class="inputText">Middle Name:</div>
                  <input type="text" name="middlename" class="input">
                </div>
              </div>
              <div class="col-sm-4">
                <div class="inputBox">
                  <div class="inputText">Last Name:</div>
                  <input type="text" name="lastname" class="input">
                </div>
              </div>

              <div class="col-sm-6">
                <div class="inputBox">
                  <div class="inputText">Father's Name:</div>
                  <input type="text" name="fathername" class="input">
                </div>
              </div>
              <div class="col-sm-6">
                <div class="inputBox">
                  <div class="inputText">Mother's Name:</div>
                  <input type="text" name="mothername" class="input">
                </div>
              </div>


              <!--   PRESENT ADDRESS   --->
              <div class="col-sm-12">
                <h4>Present Address</h4>
              </div>
              <div class="col-sm-4">
                <div class="inputBox">
                  <div class="inputText">House No.</div>
                  <input type="text" name="pr_house" class="input">
                </div>
              </div>
              <div class="col-sm-4">
                <div class="inputBox">
                  <div class="inputText">Location</div>
                  <input type="text" name="pr_location" class="input">
                </div>
              </div>
              <div class="col-sm-4">
                <div class="inputBox">
                  <div class="inputText">Village/Street</div>
                  <input type="text" name="pr_village" class="input">
                </div>
              </div>

              <div class="col-sm-4">
                <div class="inputBox">
                  <div class="inputText">Thana</div>
                  <input type="text" name="pr_thana" class="input">
                </div>
              </div>

              <div class="col-sm-4">
                <div class="inputBox">
                  <div class="inputText">District</div>
                  <input type="text" name="pr_district" class="input">
                </div>
              </div>
              <div class="col-sm-4">
                <div class="inputBox">
                  <div class="inputText">Post code</div>
                  <input type="text" name="pr_postcode" class="input">
                </div>
              </div>


              <!--   PERMANENT ADDRESS   --->
              <div class="col-sm-12">
                <h4>Permanent Address</h4>
              </div>
              <div class="col-sm-4">
                <div class="inputBox">
                  <div class="inputText">House No.</div>
                  <input type="text" name="per_house" class="input">
                </div>
              </div>
              <div class="col-sm-4">
                <div class="inputBox">
                  <div class="inputText">Location</div>
                  <input type="text" name="per_location" class="input">
                </div>
              </div>
              <div class="col-sm-4">
                <div class="inputBox">
                  <div class="inputText">Village/Street</div>
                  <input type="text" name="per_village" class="input">
                </div>
              </div>

              <div class="col-sm-4">
                <div class="inputBox">
                  <div class="inputText">Thana</div>
                  <input type="text" name="per_thana" class="input">
                </div>
              </div>

              <div class="col-sm-4">
                <div class="inputBox">
                  <div class="inputText">District</div>
                  <input type="text" name="per_district" class="input">
                </div>
              </div>
              <div class="col-sm-4">
                <div class="inputBox">
                  <div class="inputText">Post code</div>
                  <input type="text" name="per_postcode" class="input">
                </div>
              </div>
              <div class="col-sm-6">
                <div class="inputBox">
                  <div class="inputText">Date of Birth (DD-MM-YYYY)</div>
                  <input type="text" name="dob" class="input">
                </div>
              </div>

              <!-- PREVIOUS HISTORY ---->


              <div class="col-sm-12">
                <h4 class="name-player">Previous History</h4>
              </div>
              <table id="form-table" class="table table-striped">
                <thead id="table-head">
                  <tr>
                    <th>Club name</th>
                    <th>From</th>
                    <th>To</th>
                    <th>Total Runs</th>
                    <th>Total Wickets</th>
                    <th>Team Leader(Y/N)</th>
                  </tr>
                </thead>
                <tbody id="table-body">
                  <tr>
                    <td><input class="col-xs-12" type="text" name="clubname_01" value="" placeholder="Sheikh Rasel"></td>
                    <td><input class="col-xs-12" type="text" name="club_from_01" value="" placeholder="Dhaka"></td>
                    <td><input class="col-xs-12" type="text" name="club_to_01" value="" placeholder="Khulna"></td>
                    <td><input class="col-xs-12" type="text" name="total_run_01" value="" placeholder="6000"></td>
                    <td><input class="col-xs-12" type="text" name="total_wicket_01" value="" placeholder="200"></td>
                    <td><input class="col-xs-12" type="text" name="team_leader_01" value="" placeholder="Y/N"></td>
                  </tr>
                  <tr>
                    <td><input class="col-xs-12" type="text" name="clubname_02" value=""></td>
                    <td><input class="col-xs-12" type="text" name="club_from_02" value=""></td>
                    <td><input class="col-xs-12" type="text" name="club_to_02" value=""></td>
                    <td><input class="col-xs-12" type="text" name="total_run_02" value=""></td>
                    <td><input class="col-xs-12" type="text" name="total_wicket_02" value=""></td>
                    <td><input class="col-xs-12" type="text" name="team_leader_02" value=""></td>
                  </tr>
                </tbody>
              </table>



              <!-- BEST PERFORMANCE ---->


              <div class="col-sm-12">
                <h4 class="name-player">BEST PERFORMANCE</h4>
              </div>
              <table id="form-table" class="table table-striped">
                <thead id="table-head">
                  <tr>
                    <th>Club name</th>
                    <th>Opponent club name</th>
                    <th>Event id</th>
                    <th>Match id</th>
                    <th>Runs</th>
                    <th>Wickets</th>
                  </tr>
                </thead>
                <tbody id="table-body">
                  <tr>
                    <td><input class="col-xs-12" type="text" name="bp_clubname_01" value="" placeholder="Sheikh Rasel"></td>
                    <td><input class="col-xs-12" type="text" name="bp_opp_club_01" value="" placeholder="Ishpahani"></td>
                    <td><input class="col-xs-12" type="text" name="bp_eventid_01" value="" placeholder="SH-ISP-23"></td>
                    <td><input class="col-xs-12" type="text" name="bp_match_id_01" value="" placeholder="SH-ISP-ODI-23"></td>
                    <td><input class="col-xs-12" type="text" name="bp_run_01" value="" placeholder="200"></td>
                    <td><input class="col-xs-12" type="text" name="bp_wicket_01" value="" placeholder="150"></td>
                  </tr>
                  <tr>
                    <td><input class="col-xs-12" type="text" name="bp_clubname_02" value=""></td>
                    <td><input class="col-xs-12" type="text" name="bp_opp_club_02" value=""></td>
                    <td><input class="col-xs-12" type="text" name="bp_eventid_02" value=""></td>
                    <td><input class="col-xs-12" type="text" name="bp_match_id_02" value=""></td>
                    <td><input class="col-xs-12" type="text" name="bp_run_02" value=""></td>
                    <td><input class="col-xs-12" type="text" name="bp_wicket_02" value=""></td>
                  </tr>
                </tbody>
              </table>



              <!-- EDUCATIONAL QUALIFICATIONS ---->


              <div class="col-sm-12">
                <h4 class="name-player">EDUCATIONAL QUALIFICATIONS</h4>
              </div>
              <table id="form-table" class="table table-striped">
                <thead id="table-head">
                  <tr>
                    <th>Name of Degree</th>
                    <th>Institute/Department</th>
                    <th>Board/University</th>
                    <th>Year</th>
                    <th>Result</th>
                  </tr>
                </thead>
                <tbody id="table-body">
                  <tr>
                    <td><input class="col-xs-12" type="text" name="degree_01" value="" placeholder="BSc"></td>
                    <td><input class="col-xs-12" type="text" name="ins_dept_01" value="" placeholder="Computer Science"></td>
                    <td><input class="col-xs-12" type="text" name="board_uni_01" value="" placeholder="North South University"></td>
                    <td><input class="col-xs-12" type="text" name="pass_year_01" value="" placeholder="2018"></td>
                    <td><input class="col-xs-12" type="text" name="result_01" value="" placeholder="4.00"></td>
                  </tr>
                  <tr>
                    <td><input class="col-xs-12" type="text" name="degree_02" value=""></td>
                    <td><input class="col-xs-12" type="text" name="ins_dept_02" value=""></td>
                    <td><input class="col-xs-12" type="text" name="board_uni_02" value=""></td>
                    <td><input class="col-xs-12" type="text" name="pass_year_02" value=""></td>
                    <td><input class="col-xs-12" type="text" name="result_02" value=""></td>
                  </tr>
                </tbody>
              </table>


              <!--- MEMBERSHIP --->

              <div class="col-sm-12">
                <h4 class="name-player">MEMBERSHIP</h4>
              </div>
              <div class="radio">
                <label><input type="radio" name="member-radio" value="iccb">ICCB</label>
              </div>
              <div class="radio">
                <label><input type="radio" name="member-radio" value="bccb">BCCB</label>
              </div>
              <div class="radio">
                <label><input type="radio" name="member-radio" value="accb">ACCB</label>
              </div>
              <div class="radio">
                <label><input type="radio" name="member-radio" value="others">OTHERS</label>
              </div>
              <br>



              <div class="row">
                <div class="col-sm-6">
                  <div class="inputBox">
                    <div class="inputText">If others, Name of the organization</div>
                    <input type="text" name="org_text" class="input">
                  </div>
                </div>
              </div>



              <div class="row">
                <div class="col-sm-6">
                  <div class="inputBox">
                    <div class="inputText">Signature of the Player:</div>
                    <input type="text" name="player_sign" class="input">
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="inputBox">
                    <div class="inputText">Date: (DD-MM-YYYY)</div>
                    <input type="text" name="sign_date" class="input">
                  </div>
                </div>
              </div>


              <div class="col-sm-12">
                <input type="submit" name="player-reg-button" class="player-reg-button" value="Submit">
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
