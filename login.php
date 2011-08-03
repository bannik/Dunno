<?php
  include_once 'header.php';
?>
<form action="controllers/login.php" method="post" />
<input type="username" name="username" placeholder="Ονομα Χρηστη" required />
<input type="password" name="password" placeholder="Κωδικος" required /><input type="submit" value="Εισοδος"/>
</form>
<?php
  include_once 'footer.php';
?>
