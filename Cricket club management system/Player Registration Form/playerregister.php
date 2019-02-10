<?php
   $db = mysqli_connect('localhost', 'root', '', 'player');

  $firstname = '';
  $middlename = '';
  $lastname = '';
  $fathername = '';
  $mothername = '';

  $pr_house = '';
  $pr_location = '';
  $pr_village = '';
  $pr_thana = '';
  $pr_district = '';
  $pr_postcode = '';

  $per_house = '';
  $per_location = '';
  $per_village = '';
  $per_thana = '';
  $per_district = '';
  $per_postcode = '';
  $dob = '';



  // PREVIOUS HISTORY

  $player_id = '';
  $clubname = '';
  $clubfrom = '';
  $clubto = '';
  $run = '';
  $wicket = '';
  $teamleader = '';


  if(isset($_POST['player-reg-button'])){
    $firstname = mysqli_real_escape_string($db, $_POST['firstname']);
    $middlename = mysqli_real_escape_string($db, $_POST['middlename']);
    $lastname = mysqli_real_escape_string($db, $_POST['lastname']);
    $fathername = mysqli_real_escape_string($db, $_POST['fathername']);
    $mothername = mysqli_real_escape_string($db, $_POST['mothername']);

    $pr_house = mysqli_real_escape_string($db, $_POST['pr_house']);
    $pr_location = mysqli_real_escape_string($db, $_POST['pr_location']);
    $pr_village = mysqli_real_escape_string($db, $_POST['pr_village']);
    $pr_thana = mysqli_real_escape_string($db, $_POST['pr_thana']);
    $pr_district = mysqli_real_escape_string($db, $_POST['pr_district']);
    $pr_postcode = mysqli_real_escape_string($db, $_POST['pr_postcode']);

    $per_house = mysqli_real_escape_string($db, $_POST['per_house']);
    $per_location = mysqli_real_escape_string($db, $_POST['per_location']);
    $per_village = mysqli_real_escape_string($db, $_POST['per_village']);
    $per_thana = mysqli_real_escape_string($db, $_POST['per_thana']);
    $per_district = mysqli_real_escape_string($db, $_POST['per_district']);
    $per_postcode = mysqli_real_escape_string($db, $_POST['per_postcode']);
    $dob = mysqli_real_escape_string($db, $_POST['dob']);


       $sql = "INSERT INTO playerreg (firstname, middlename, lastname, fathername, mothername, pr_house, pr_location, pr_village, pr_thana, pr_district, pr_postcode, per_house, per_location, per_village, per_thana, per_district, per_postcode, dob) VALUES ('$firstname', '$middlename', '$lastname', '$fathername', '$mothername', '$pr_house', '$pr_location', '$pr_village', '$pr_thana', '$pr_district', '$pr_postcode', '$per_house', '$per_location', '$per_village', '$per_thana', '$per_district', '$per_postcode', '$dob')";
       $query = mysqli_query($db, $sql);



         // PREVIOUS HISTORY 01

         $clubname = mysqli_real_escape_string($db, $_POST['clubname_01']);
         $clubfrom = mysqli_real_escape_string($db, $_POST['club_from_01']);
         $clubto = mysqli_real_escape_string($db, $_POST['club_to_01']);
         $run = mysqli_real_escape_string($db, $_POST['total_run_01']);
         $wicket = mysqli_real_escape_string($db, $_POST['total_wicket_01']);
         $teamleader = mysqli_real_escape_string($db, $_POST['team_leader_01']);


         // BEST PERFORMANCE

         $bp_clubname = mysqli_real_escape_string($db, $_POST['bp_clubname_01']);
         $bp_opp_club = mysqli_real_escape_string($db, $_POST['bp_opp_club_01']);
         $bp_eventid = mysqli_real_escape_string($db, $_POST['bp_eventid_01']);
         $bp_matchid = mysqli_real_escape_string($db, $_POST['bp_match_id_01']);
         $bp_run = mysqli_real_escape_string($db, $_POST['bp_run_01']);
         $bp_wicket = mysqli_real_escape_string($db, $_POST['bp_wicket_01']);


         // EDUCATIONAL QUALIFICATIONS

         $degree = mysqli_real_escape_string($db, $_POST['degree_01']);
         $ins_dpt = mysqli_real_escape_string($db, $_POST['ins_dept_01']);
         $board_uni = mysqli_real_escape_string($db, $_POST['board_uni_01']);
         $year = mysqli_real_escape_string($db, $_POST['pass_year_01']);
         $result = mysqli_real_escape_string($db, $_POST['result_01']);


         //MEMBERSHIP
         $org = mysqli_real_escape_string($db, $_POST['member-radio']);
         $org_text = mysqli_real_escape_string($db, $_POST['org_text']);
         $player_sign = mysqli_real_escape_string($db, $_POST['player_sign']);
         $sign_date = mysqli_real_escape_string($db, $_POST['sign_date']);



         if($query == 1){

           // PREVIOUS HISTORY 01
           $sql_01 = "INSERT INTO previoushistory (player_id, clubname, clubfrom, clubto, run, wicket, teamleader) VALUES ('$player_id', '$clubname', '$clubfrom', '$clubto', '$run', '$wicket', '$teamleader')";
           $query_01 = mysqli_query($db, $sql_01);


           // BEST PERFORMANCE 01

           $sql_02 = "INSERT INTO bestperform (player_id, clubname, opp_club, event_id, match_id, run, wicket) VALUES ('$player_id', '$clubname', '$bp_opp_club', '$bp_eventid', '$bp_matchid', '$bp_run', '$bp_wicket')";
           $query_02 = mysqli_query($db, $sql_02);


           // EDUCATIONAL QUALIFICATIONS

           $sql_03 = "INSERT INTO educations (player_id, degree, ins_dept, board_uni, year, result) VALUES ('$player_id', '$degree', '$ins_dpt', '$board_uni', '$year', '$result')";
           $query_03 = mysqli_query($db, $sql_03);


           //MEMBERSHIP

           $sql_04 = "INSERT INTO membership (player_id, org, org_text, player_sign, sign_date) VALUES ('$player_id', '$org', '$org_text', '$player_sign', '$sign_date')";
           $query_04 = mysqli_query($db, $sql_04);

         }

  }
 ?>
