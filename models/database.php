<?php
function db($mysql){
    $res = mysql_query( $mysql ) or die( mysql_error() );
    return $res;
}
mysql_connect("localhost","bannik","1234");
mysql_select_db("bannik");
mysql_query( "SET NAMES UTF8" );
?>           
