<?php
ini_set("display_errors", "1");
$host = 'domU-12-31-39-10-56-F4';
$username = 'root';
$password = '111111';
$dbname = 'today_fortune';
$link = mysql_connect($host, $username, $password);
if (!$link) {
  die('접속실패 : ' . mysql_error());
} else {
    echo "접속성공<br />";
}
$db_selected = mysql_select_db($dbname, $link);
if (!$db_selected) {
   die ('Can\'t use foo : ' . mysql_error());
} else {
    echo "DB선택성공<br />";
}
?>