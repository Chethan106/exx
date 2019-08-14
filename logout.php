<?php
   session_start();
   unset($_SESSION["username"]);
   unset($_SESSION["password"]);
   
   echo 'Your session is dead';
   header('Refresh: 2; URL = logex.php');
?>
