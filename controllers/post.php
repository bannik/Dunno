<?php
  include_once 'opnsession.php';
  $asktitle = htmlspecialchars($_POST['asktitle']);
  $asktext = htmlspecialchars($_POST['asktext']);
  if (isset($_SESSION['userid']) && isset($_SESSION['username'])){
  if (isset($asktitle) && isset($asktext)){
   mysql_query (
      'INSERT INTO
        dunno
       SET
        created = NOW(),
        asktext = "'.$asktext.'",
        asktitle = "'.$asktitle.'",
        userid = "' . $_SESSION['userid'].'"'
        );
   header ( 'Location:../index.php' );
  }
  else {
      header ( 'Location:../index.php?error=1' );
  }
  }
  else {
      header ( 'Location: ../login.php');
  }
  ?>
