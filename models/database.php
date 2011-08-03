<?php
function db($mysql){
    $res = mysql_query( $mysql ) or die( mysql_error() );
    return $res;
}
mysql_connect("localhost","bannik","*******");
mysql_select_db("bannik");
mysql_query( "SET NAMES UTF8" );
?>           
