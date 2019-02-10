<?php
  include('../Join/register.php');
  include('contractregister.php');
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1">
  <title>Contract Form</title>
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
          <li><a class="active" href="../Contract Form/contractForm.php">CONTRACT</a></li>
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
          <form action="contractForm.php" method="post" role="form">
            <div class="row">
              <div class="col-sm-12">
                <h1>Contract Form</h1>
              </div>


              <div class="col-sm-4">
                <div class="inputBox">
                  <div class="inputText">Club Id</div>
                  <input type="text" name="clubid" class="input">
                </div>
              </div>
              <div class="col-sm-8">
                <div class="inputBox">
                  <div class="inputText">Club Name</div>
                  <input type="text" name="clubname" class="input">
                </div>
              </div>


              <!--   FIRST PARTY   --->
              <div class="col-sm-12">
                <h4 class="name-player">Name of the Player</h4>
              </div>
              <div class="col-sm-4">
                <div class="inputBox">
                  <div class="inputText">First Name:</div>
                  <input type="text" name="pfirstname" class="input" required>
                </div>
              </div>
              <div class="col-sm-4">
                <div class="inputBox">
                  <div class="inputText">Middle Name:</div>
                  <input type="text" name="pmiddlename" class="input">
                </div>
              </div>
              <div class="col-sm-4">
                <div class="inputBox">
                  <div class="inputText">Last Name:</div>
                  <input type="text" name="plastname" class="input">
                </div>
              </div>
              <div class="col-sm-4">
                <div class="inputBox">
                  <div class="inputText">Player Id</div>
                  <input type="text" name="playerid" class="input">
                </div>
              </div>



              <!--   SECOND PARTY   --->
              <div class="col-sm-12">
                <h4 class="name-player">Authorized Person</h4>
              </div>
              <div class="col-sm-4">
                <div class="inputBox">
                  <div class="inputText">First Name:</div>
                  <input type="text" name="afirstname" class="input">
                </div>
              </div>
              <div class="col-sm-4">
                <div class="inputBox">
                  <div class="inputText">Middle Name:</div>
                  <input type="text" name="amiddlename" class="input">
                </div>
              </div>
              <div class="col-sm-4">
                <div class="inputBox">
                  <div class="inputText">Last Name:</div>
                  <input type="text" name="alastname" class="input">
                </div>
              </div>

              <div class="col-sm-6">
                <div class="inputBox">
                  <div class="inputText">Designation</div>
                  <input type="text" name="adesignation" class="input">
                </div>
              </div>




              <!--   CONTRACT PERIOD   --->
              <div class="col-sm-12">
                <h4 class="name-player">Contract Period</h4>
              </div>
              <div class="col-sm-6">
                <div class="inputBox">
                  <div class="inputText">Start Date (DD-MM-YYYY)</div>
                  <input type="text" name="startdate" class="input">
                </div>
              </div>
              <div class="col-sm-6">
                <div class="inputBox">
                  <div class="inputText">End Date (DD-MM-YYYY):</div>
                  <input type="text" name="enddate" class="input">
                </div>
              </div>

              <div class="col-sm-6">
                <div class="inputBox">
                  <div class="inputText">Contract Amount</div>
                  <input type="text" name="contract_amount" class="input">
                </div>
              </div>




              <!-- PAYMENT TABLE ---->

              <div class="col-sm-12">
                <h4 class="name-player">Payment Schedule</h4>
              </div>

              <table id="form-table" class="table table-striped">
                <thead id="table-head">
                  <tr>
                    <th>Serial Number</th>
                    <th>Due date</th>
                    <th>Payment date</th>
                    <th>Amount</th>
                  </tr>
                </thead>
                <tbody id="table-body">

                  <tr>
                    <td><input class="col-xs-4" type="text" name="serial_no_01" value="" placeholder="1001"></td>
                    <td><input class="col-xs-9" type="text" name="duedate_01" value="" placeholder="DD-MM-YYYY"></td>
                    <td><input class="col-xs-9" type="text" name="paydate_01" value="" placeholder="DD-MM-YYYY"></td>
                    <td><input class="col-xs-7" type="text" name="amount_01" value="" placeholder="60000"></td>
                  </tr>
                  <tr>
                    <td><input class="col-xs-4" type="text" name="serial_no_02" value=""></td>
                    <td><input class="col-xs-9" type="text" name="duedate_02" value=""></td>
                    <td><input class="col-xs-9" type="text" name="paydate_02" value=""></td>
                    <td><input class="col-xs-7" type="text" name="amount_02" value=""></td>
                  </tr>

                </tbody>
              </table>

              <div class="col-sm-6">
                <div class="inputBox">
                  <div class="inputText">Contract witness 1:</div>
                  <input type="text" name="firstwitness" class="input">
                </div>
              </div>
              <div class="col-sm-6">
                <div class="inputBox">
                  <div class="inputText">Contract witness 2:</div>
                  <input type="text" name="secondwitness" class="input">
                </div>
              </div>


              <div class="col-sm-12">
                <input type="submit" class="contract-button" name="contract-form-button" value="CONFIRM">
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
