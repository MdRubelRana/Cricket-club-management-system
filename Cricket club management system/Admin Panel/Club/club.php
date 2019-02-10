<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Club Information</title>
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
          <li><a class="active" href="club.php">CLUB</a></li>
          <li><a href="../Player/player.php">PLAYER</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <table class="container">
    <tr>
      <th>Id</th>
      <th>Name of club</th>
      <th>EST date</th>
      <th>House no.</th>
      <th>Location</th>
      <th>Village/Street</th>
      <th>Thana</th>
      <th>District</th>
      <th>Post code</th>
      <th>President</th>
    </tr>

    <?php
      $conn = mysqli_connect("localhost", "root", "", "registration");

      $sql = "SELECT id, clubname, estdate, house, location, village, thana, district, postcode, president FROM clubreg";
      $result = $conn->query($sql);

      if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {

          echo "<tr><td>" . $row["id"]. "</td><td>" . $row["clubname"] . "</td><td>" . $row["estdate"] . "</td><td>" . $row["house"]. "</td><td>"
          . $row["location"] . "</td><td>"  . $row["village"] . "</td><td>" . $row["thana"]. "</td><td>" . $row["district"] . "</td><td>"
          . $row["postcode"] . "</td><td>" . $row["president"] . "</td></tr>";

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
