<?php
  include_once '../opnsession.php';
  session_destroy();

  header ('Location: ../login.php');
?>
