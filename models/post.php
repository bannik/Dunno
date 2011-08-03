<?php
    function PostList($myuserid = 0){
        $res = db(
                'SELECT
                * 
                FROM
                dunno CROSS JOIN dunnousrs
                ON dunnousrs.userid = dunno.userid
                WHERE
                dunnousrs.userid != "'.$myuserid.'"
                ORDER BY
                created DESC'
                );

        $ret = array();
        while ( $row = mysql_fetch_array($res) ) {
            $ret[] = $row;
        }
        return $ret;
    }

    function SinglePost($post) {
        $ask = db(
                'SELECT
                  *
                 FROM
                   dunno CROSS JOIN dunnousrs
                   ON dunnousrs.userid = dunno.userid
                 WHERE
                   postid = "'.$post.'"
                ');
        $ret = array();
        while ( $askrow = mysql_fetch_array($ask)) {
            $ret[] = $askrow;
        }
        return $ret;
    }
?>
