<?php  ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Admin Panel</title>
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
          <a class="navbar-brand" href="#"><img src="../Landing Page/img/cricketlogo.png" alt=""></a>
        </div>
        <div class="collapse navbar-collapse" id="navbar-collapse-man">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="User/user.php">User</a></li>
            <li><a href="Team/team.php">TEAM</a></li>
            <li><a href="Contract/contract.php">CONTRACT</a></li>
            <li><a href="Club/club.php">CLUB</a></li>
            <li><a href="Player/player.php">PLAYER</a></li>
          </ul>
        </div>
      </div>
    </nav>



    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
      </ol>

      <!-- Wrapper for slides -->
      <div class="carousel-inner" role="listbox">
        <div class="item">
          <img src="../Landing Page/img/slide/image_01.jpg" alt="pic">
          <div class="carousel-caption">
          </div>
        </div>
        <div class="item active">
          <img src="../Landing Page/img/slide/image_02.jpg" alt="pic">
          <div class="carousel-caption">
          </div>
        </div>
        <div class="item">
          <img src="../Landing Page/img/slide/image_03.jpg" alt="lol">
          <div class="carousel-caption">
          </div>
        </div>
      </div>

      <!-- Controls -->
      <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>

    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>

    <!----------- SECOND DIV -------------->

    <div id="all-about-second" class="padding">
      <div class="container">
        <div class="row">
          <div class="col-sm-6">
            <img src="../Landing Page/img/cricket3.png" alt="cricket boy">
          </div>
          <div class="col-sm-6 text-center">
            <h2>All About Using Cricket</h2>
            <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
          </div>
        </div>
      </div>
    </div>


    <!----------- THIRD DIV -------------->

    <div class="padding">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <h4>HEADLINE GOES HERE</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
              Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
          </div>
          <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <img src="../Landing Page/img/cricket2.png" alt="" class="img-responsive">
          </div>
          <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <h4>ANOTHER HEADINGS</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
              Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
          </div>
          <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <img src="../Landing Page/img/bd.png" alt="" class="img-responsive">
          </div>
        </div>
      </div>
    </div>


    <!----------- FOURTH DIV -------------->

    <div id="fixed">
      <div class="padding">
        <div class="container">
          <div class="row">
            <div class="col-sm-6">
              <h4>Here's the coll thing about Bootstrap</h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore
                magna aliqua.</p>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore
                magna aliqua.</p>
            </div>
            <div class="col-sm-6">
              <img src="../Landing Page/img/cricket4.png" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-----------  FOOTER -------------->

    <footer class="container-fluid text-center">
      <div class="row">
        <div class="col-sm-4">
          <h3>Contact US</h3>
          <br>
          <h4>Our address and contact info here.</h4>
        </div>

        <div class="col-sm-4">
          <h3>Connect</h3>
          <a href="#" class="fa fa-facebook"></a>
          <a href="#" class="fa fa-twitter"></a>
          <a href="#" class="fa fa-google"></a>
          <a href="#" class="fa fa-linkedin"></a>
          <a href="#" class="fa fa-youtube"></a>
        </div>

        <div class="col-sm-4">
          <img src="../Landing Page/img/slide/footer_01.png" alt="B" class="icon">
        </div>
      </div>
    </footer>
    <div class="copyright">
      <p>©2018 | All right reserved by Rubel & Navid</p>
    </div>

  </body>
</html>
