<?php
   include'config.php';
   include'opendb.php';
   session_start();
   
   $user_check = $_SESSION['login_user'];
   
   $ses_sql = mysql_query($conn,"SELECT * FROM users WHERE username = '$user_check' ");
   
   $row = mysql_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $login_session = $row['username'];
   
   if(!isset($_SESSION['login_user'])){
      header('Location:login.php');
   }
?>