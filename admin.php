<?php
 $servername='localhost';
 $username='root';
 $password='';
 $dbname='dcsa';
 $total_od=15;
 $conn=mtsqli_connect($servername,$username,$password,$dbname);
 if(!$conn){
    die('cloud not connect MySql server:'.mysql_error());
 }
 ?>