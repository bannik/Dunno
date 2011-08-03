<?php
    include_once'opnsession.php';
    $id = $_SESSION['userid'];
    $place ="../images/avatar/";
    if (is_dir($place)){
        $filename = $_FILES[ 'file' ] [ 'tmp_name' ];
        if (isset ( $filename ) ) {
            $uniqueFile = $_FILES[ 'file' ] [ 'name' ];
            move_uploaded_file($filename, $place . $uniqueFile);
        }
        $res = mysql_query (
                "UPDATE
                dunnousrs
                SET
                avatar =  '$uniqueFile'
                WHERE
                userid = $id

                ");
    }    
    header ("Location: http://dev.bannik.eu/dunno/profile.php?p=$id");
?>
