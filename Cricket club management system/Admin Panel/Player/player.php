<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Player Information</title>
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
          <li><a href="../Contract/contract.php">CONTRACT</a></li>
          <li><a href="../Club/club.php">CLUB</a></li>
          <li><a class="active" href="player.php">PLAYER</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <table class="container" id="contract-table">
    <tr>
      <th>Player Id</th>
      <th>First name</th>
      <th>Middle name</th>
      <th>Last name</th>
      <th>Previous club</th>
      <th>Present club</th>
      <th>Total Run</th>
      <th>Total Wicket</th>
      <th>Best Run</th>
      <th>Best Wicket</th>
      <th>Organization</th>
      <th>Degree</th>
      <th>Date of Birth</th>
    </tr>

    <?php
      $conn = mysqli_connect("localhost", "root", "", "player");

      $sql = "SELECT playerreg.player_id, playerreg.firstname, playerreg.middlename, playerreg.lastname, previoushistory.clubfrom, previoushistory.clubto, previoushistory.run, previoushistory.wicket, bestperform.run AS bp_run, previoushistory.wicket AS bp_wicket, educations.degree, playerreg.dob, membership.org FROM playerreg , educations, previoushistory, bestperform, membership WHERE (playerreg.player_id = educations.player_id) AND (playerreg.player_id = previoushistory.player_id) AND (playerreg.player_id = bestperform.player_id) AND (playerreg.player_id = membership.player_id)";

      $result = $conn->query($sql);

      $result =  mysqli_query($conn,$sql);

       if ($result->num_rows > 0) {
        while($row = mysqli_fetch_array($result)) {

          echo "<tr><td>" . $row["player_id"]. "</td><td>" . $row["firstname"] . "</td><td>" . $row["middlename"] . "</td><td>" . $row["lastname"] . "</td><td>" . $row["clubfrom"]. "</td><td>"
          . $row["clubto"] . "</td><td>"  . $row["run"] . "</td><td>" . $row["wicket"]. "</td><td>" . $row["bp_run"] . "</td><td>"  . $row["bp_wicket"] . "</td><td>" . $row["org"]. "</td><td>" . $row["degree"]. "</td><td>" . $row["dob"]. "</td></tr>";
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
