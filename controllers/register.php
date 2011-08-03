<?php
  include_once '../opnsession.php';
  $password = sha1 ( $_POST [ 'password' ] );
  $username = $_POST [ 'username' ];
  $name = $_POST [ 'yourname' ];
  $email = $_POST [ 'email' ];
  $surname = $_POST [ 'surname' ];
    if (isset( $username ) && isset ( $email ) ) {
        $chk = mysql_query (
          'SELECT
             username , email
           FROM
             dunnousrs
           WHERE
             username = "' . $username . '"
             AND email = "' . $email . '"'
        );
    if ( mysql_num_rows ( $chk ) == 0 ) {
        mysql_query(
          'INSERT INTO
            dunnousrs
           SET
            username = "' . $username . '",
            password = "' . $password . '",
            email = "' . $email . '",
            yourname = "' . $name . '",
            surname = "' . $surname . '"
         
       ' );

        $_SESSION[ 'username' ] = $username;
        $_SESSION[ 'userid' ] = mysql_insert_id();
        header ('Location: ../index.php');
    }
    else {
        header( 'Location: ../register.php?error=1' );
    }
    }
    else {
        header('Location: ../register.php?error=1');
    }
?>
