<?php
  require_once 'opnsession.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
  <link rel="stylesheet" type="text/css" href="styles.css" />
  <meta content="text/html; charset=UTF-8" http-equiv="Content-Type" />
  <meta content="dunno" name="description" />
  <?php
  if(isset($_SESSION['username'])){
  ?>
  <title>Dunno | <?php echo $_SESSION['username']; ?></title>
  <?php } else { ?>
  <title>Dunno | Εχεις απορεια? Ρωτα!</title>
  <?php } ?>
  <link type="image/x-icon" rel="shortcut icon" href="images/favicon.ico"     />
  </head>
 <body>
  <div id="header">
  <a href="index.php"><h1>Dunno!?</h1></a>
<?php
  if (isset($_SESSION[ 'username' ]) && isset ($_SESSION[ 'userid' ])) {
  ?><a href="profile.php?p=<?php echo $_SESSION['userid']; ?>"> <?php echo $_SESSION[ 'username' ];?></a>
 | 
   <a href="controllers/logout.php">Εξοδος</a>
|
   <a href="pm.php">Μηνυματα</a>
<?php
  }
  else{
?>
   <a href="login.php">Εισοδος</a>
   |<a href="register.php">Εγγραφη</a>
<?php
   }
?>
  </div>
