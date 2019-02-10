<?php

   $db = mysqli_connect('localhost', 'root', '', 'contract');

  $clubid = '';
  $clubname = '';
  $pfirstname = '';
  $pmiddlename = '';
  $plastname = '';
  $playerid = '';

  $afirstname = '';
  $amiddlename = '';
  $alastname = '';
  $adesignation = '';

  $startdate = '';
  $enddate = '';
  $contract_amount = '';

  $serial_number = '';
  $duedate = '';
  $paydate = '';
  $firstwitness = '';
  $secondwitness = '';



  if(isset($_POST['contract-form-button'])){
    $clubid = mysqli_real_escape_string($db, $_POST['clubid']);
    $clubname = mysqli_real_escape_string($db, $_POST['clubname']);
    $playerid = mysqli_real_escape_string($db, $_POST['playerid']);
    $pfirstname = mysqli_real_escape_string($db, $_POST['pfirstname']);
    $pmiddlename = mysqli_real_escape_string($db, $_POST['pmiddlename']);
    $plastname = mysqli_real_escape_string($db, $_POST['plastname']);





    $sql = "INSERT INTO contractform (clubid, clubname, playerid, firstname, middlename, lastname) VALUES ('$clubid', '$clubname', '$playerid', '$pfirstname', '$pmiddlename', '$plastname')";
    $query = mysqli_query($db, $sql);



    //Authorized Person
    $afirstname = mysqli_real_escape_string($db, $_POST['afirstname']);
    $amiddlename = mysqli_real_escape_string($db, $_POST['amiddlename']);
    $alastname = mysqli_real_escape_string($db, $_POST['alastname']);
    $adesignation = mysqli_real_escape_string($db, $_POST['adesignation']);


    //CONTRACT PERIOD

    $startdate = mysqli_real_escape_string($db, $_POST['startdate']);
    $enddate = mysqli_real_escape_string($db, $_POST['enddate']);
    $contract_amount = mysqli_real_escape_string($db, $_POST['contract_amount']);


    //PAYMENT TABLE
    $serial_number = mysqli_real_escape_string($db, $_POST['serial_no_01']);
    $duedate = mysqli_real_escape_string($db, $_POST['duedate_01']);
    $paydate = mysqli_real_escape_string($db, $_POST['paydate_01']);
    $amount = mysqli_real_escape_string($db, $_POST['amount_01']);
    $firstwitness = mysqli_real_escape_string($db, $_POST['firstwitness']);
    $secondwitness = mysqli_real_escape_string($db, $_POST['secondwitness']);


    if($query == 1){

    //Authorized Person
      $sql_01 = "INSERT INTO authorizedinfo (clubid, playerid, firstname, middlename, lastname, designation) VALUES ('$clubid', '$playerid', '$afirstname', '$amiddlename', '$alastname', '$adesignation')";
      $query_01 = mysqli_query($db, $sql_01);


    //CONTRACT PERIOD

      $sql_02 = "INSERT INTO contractperiod (clubid, playerid, startdate, enddate, amount) VALUES ('$clubid', '$playerid', '$startdate', '$enddate', '$amount')";
      $query_02 = mysqli_query($db, $sql_02);



        //PAYMENT TABLE

      $sql_03 = "INSERT INTO payment (clubid, playerid, serialnumber, duedate, paydate, amount, firstwitness, secondwitness) VALUES ('$clubid', '$playerid', '$serial_number', '$duedate', '$paydate', '$amount',  '$firstwitness', '$secondwitness')";
      $query_03 = mysqli_query($db, $sql_03);

    }
  }
 ?>
