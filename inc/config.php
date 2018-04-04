
<?php


/*
SISTEM INFORMASI GEOGRAFIS SEBARAN SEKOLAH MENENGAH ATAS DI BANDAR LAMPUNG
*/
	define('db_host','localhost');
	define('db_user','root');
	define('db_pass','');
	define('db_name','gmaps');
	
	mysql_connect(db_host,db_user,db_pass);
	mysql_select_db(db_name);
	  
?>