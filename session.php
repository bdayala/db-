<?php
   include('config.php');
   session_start();
   
   $email = $_SESSION['email_adress'];
   
   $ses_sql = mysqli_query($db,"select email_adress from parent where email = '$email' ");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $login_session = $row['email_adress'];
   
   if(!isset($_SESSION['email_adress'])){
      header("location:plogin.php");
   }
?>