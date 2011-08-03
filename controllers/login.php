<?php
  include_once '../opnsession.php';
  $username = $_POST[ 'username' ];
  $password = sha1 ($_POST[ 'password' ]);
  
 if ( isset( $_POST[ 'username' ] )) {
  $res = mysql_query (
      'SELECT
         userid, username
       FROM
         dunnousrs
       WHERE
         username = "' .$username. '"
         AND password = "' .$password. '"
       LIMIT 1'
    );
   if ( mysql_num_rows ($res) == 1 ) {
       $user = mysql_fetch_array( $res );
       $_SESSION[ 'username' ] = $_POST[ 'username'];
       $_SESSION[ 'userid' ] = $user[ 'userid' ];
       header( 'Location: ../index.php' );
   }
   else{
       header ( 'Location: ../login.php?error=1' );
   }
 }
 else {
     header ( 'Location: ../login.php?error=1' );
 }
 ?>
