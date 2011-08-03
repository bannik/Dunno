<?php
  include_once 'header.php';
?>
<?php
  if(isset($_SESSION[ 'username' ]) && isset($_SESSION[ 'userid' ])){
?>
  <h2> Ρωτα τους </h2>
  <form action="controllers/post.php" method="post">
  <input type="text" name="asktitle" placeholder="Θεμα Ερωτησης" required/>
  <textarea name="asktext" placeholder="Ερωτηση" required></textarea>
  <input type="submit" value="Ρωτα!"/>
  </form>
<?php
  }
?>
  <h2>Τι ρωτησαν οι αλλοι</h2>
  <ol><?php
     if (isset($_SESSION['userid'])){
         $rows = PostList($_SESSION['userid']);
     }
     else
     {
         $rows = PostList();
     }
     foreach ( $rows as $row ) {
         ?><li>
           <strong>
           <a href="profile.php?p= <?= $row['userid']; ?>" ><?=  $row[ 'username' ]; ?></a> asked:</strong> <span>
            <a href="post.php?p=<?= $row['postid']; ?>"><?php echo $row[ 'asktitle' ];
           ?></a><br/>
           <?php
           echo $row[ 'asktext' ];
           ?><br/><?php
           echo $row[ 'created' ];
           ?></span>
           </li>
         <?php
     }
     ?>
</ol>

<?php
  include_once 'footer.php';
?>
