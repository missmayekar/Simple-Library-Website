<?php
  session_start();
  session_destroy();
  unset($_session['un']);
  unset($_session['psw']);
  $_SESSION['message']="you are not logged out";
  header("location:../php/login.php");

 ?>
