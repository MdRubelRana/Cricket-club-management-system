<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Team Information</title>
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
          <li><a class="active" href="team.php">TEAM</a></li>
          <li><a href="../Contract/contract.php">CONTRACT</a></li>
          <li><a href="../Club/club.php">CLUB</a></li>
          <li><a href="../Player/player.php">PLAYER</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <table class="container">
    <tr>
      <th>Club id</th>
      <th>Team leader id</th>
      <th>Leader Name</th>
      <th>Player id</th>
      <th>Team F. Date</th>
      <th>Event name/Even id</th>
      <th>Coach id</th>
      <th>Coach name</th>
      <th>Player Name</th>
    </tr>

    <?php
      $conn = mysqli_connect("localhost", "root", "", "teaminfo");

      $sql = "SELECT teamreg.clubid, teamreg.playerid, teamreg.tfdate, teamreg.event_id, teamreg.teamleaderid, teamreg.playername AS leadername, teamreg.coachid, teamreg.coachname,  teamplayer.playername FROM teamreg, teamplayer WHERE (teamreg.clubid = teamplayer.clubid) AND (teamreg.teamleaderid = teamplayer.teamleaderid)";
      $result = $conn->query($sql);

      if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {

          echo "<tr><td>" . $row["clubid"]. "</td><td>" . $row["teamleaderid"] . "</td><td>" . $row["leadername"] . "</td><td>" . $row["playerid"]. "</td><td>"
          . $row["tfdate"] . "</td><td>"  . $row["event_id"] . "</td><td>" . $row["coachid"]. "</td><td>" . $row["coachname"] . "</td><td>" . $row["playername"] . "</td></tr>";

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
