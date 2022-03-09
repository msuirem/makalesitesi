<?php
$db = "ornek";
$bag=@mysql_connect('localhost','root','');
mysql_query("SET NAMES UTF8");
@mysql_select_db("$db");
if(!$bag)
     echo "MySQL sunucusuna bağlanılamadı!".mysql_error();
if(!$db)
{
	echo "<br>Veritabanına bağlanılamadı!";
}
?>

