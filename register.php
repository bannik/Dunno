<?php
 include_once 'header.php'
?>
<h2>Εγγραφη Νεου Χρηστη</h2>
<h3>Κανε εγγραφη τωρα. Τι μπορει να παει στραβα;</h3>
<?php
  if(isset($_GET['error']) && $_GET[ 'error' ] == "1") {
?>
  <p>Ωχ κατι πηγε στραβα ελεγξτε τα στοιχεια σας, ενδεχεται το ονομα χρηστη ή η διευθυνση ηλεκτρονικου Ταχυδρομειου να χρησημοποιειται ηδη<p>
<?php
}
?>
  <form action="controllers/register.php" method="post">
  <input type="text" name="username" placeholder="Ονομα Χρηστη" required />
  <input type="password" name="password" placeholder="Κωδικος Προσβασης" required />
  <input type="email" name="email" placeholder="Ηλεκτρονικο Ταχυδρομειο"  required />
  <input type="text" name="yourname" placeholder="Ονομα" required />
  <input type="text" name="surname" placeholder="Επιθετο" required />
  <input type="submit" value="Εγγραφη"/>
  </form>
<?php
include_once 'footer.php'
?>
