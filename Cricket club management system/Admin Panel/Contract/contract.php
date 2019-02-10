<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Contract</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="../../Landing Page/css/style.css">
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
  <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="../adminpanel.php"><img src="../../Landing Page/img/cricketlogo.png" alt=""></a>
      </div>
      <div class="collapse navbar-collapse" id="navbar-collapse-man">
        <ul class="nav navbar-nav navbar-right">
          <li><a href="../User/user.php">User</a></li>
          <li><a href="../Team/team.php">TEAM</a></li>
          <li><a class="active" href="contract.php">CONTRACT</a></li>
          <li><a href="../Club/club.php">CLUB</a></li>
          <li><a href="../Player/player.php">PLAYER</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <table class="container" id="contract-table">
    <tr>
      <th>Club Id</th>
      <th>Player Id</th>
      <th>Club Name</th>
      <th>P. First Name</th>
      <th>P. Middle Name</th>
      <th>P. Last Name</th>
      <th>A. First Name</th>
      <th>A. Middle Name</th>
      <th>A. Last Name</th>
      <th>Designation</th>
      <th>Start Date</th>
      <th>End Date</th>
      <th>Amount</th>
    </tr>

    <?php
      $conn = mysqli_connect("localhost", "root", "", "contract");

      $sql = "SELECT contractform.clubid, contractform.playerid, contractform.clubname, contractform.firstname AS pfirstname, contractform.middlename AS pmiddlename, contractform.lastname AS plastname, authorizedinfo.firstname AS afirstname, authorizedinfo.middlename AS amiddlename, authorizedinfo.lastname AS alastname, authorizedinfo.designation, contractperiod.startdate, contractperiod.enddate, contractperiod.amount FROM contractform, authorizedinfo, contractperiod, payment WHERE (contractform.clubid = authorizedinfo.clubid AND contractform.playerid = authorizedinfo.playerid) AND (contractform.clubid = contractperiod.clubid AND contractform.playerid = contractperiod.playerid) AND (contractform.clubid = payment.clubid AND contractform.playerid = payment.playerid)";

      $result = $conn->query($sql);

      if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {

          echo "<tr><td>" . $row["clubid"]. "</td><td>" . $row["playerid"]. "</td><td>" . $row["clubname"] . "</td><td>" . $row["pfirstname"] . "</td><td>" . $row["pmiddlename"]. "</td><td>"
          . $row["plastname"] . "</td><td>"  . $row["afirstname"] . "</td><td>" . $row["amiddlename"]. "</td><td>" . $row["alastname"] . "</td><td>"  . $row["designation"] . "</td><td>" . $row["startdate"]. "</td><td>" . $row["enddate"]. "</td><td>" . $row["amount"]. "</td></tr>";

        }
        echo "</table>";
      }
      else {
        echo "No member registerd yet.";
      }

      $conn->close();
      ?>
  </table>

  <div class="copyright">
    <p>©2018 | All right reserved by Rubel & Navid</p>
  </div>

</body>

</html>
