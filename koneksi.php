<?php
 
$user_name = "root";
$password = "";
$database = "db_kemahasiswaan";
$host_name = "localhost"; 
 
$koenksi=mysql_connect("$host_name", "$user_name", "$password")or die("Tidak dapat konek ke server MySQL");
 
mysql_select_db("$database")or die("Database Tidak Ada");
 
