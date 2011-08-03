<?php
function pmlist($userid){
   $res = db(
      'SELECT
        *
       FROM
        dunnopm CROSS JOIN dunnousrs
        ON dunnousr.userid = dunnopm.senderid
       WHERE
        dunnopm.reciverid = "'.$userid.'"
       ORDER BY
        creted DESC'
    );
   $ret = array();
   while( $row = mysql_fetch_array($res) ) {
       $ret[] = $row;
   }
   return $ret;
}
?>
