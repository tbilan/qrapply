<?php

$servername='provantagefeedback-server.mysql.database.azure.com';
$username='csvfagergj';
$password='C3D1T015D2Q64V34$';
$dbname = "provantagefeedback-database";
//$conn=mysqli_connect($servername,$username,$password,"$dbname");

$conn = mysqli_init();
mysqli_ssl_set($conn,NULL,NULL, "DigiCertGlobalRootCA.crt.pem", NULL, NULL);
mysqli_real_connect($conn, "provantagefeedback-server.mysql.database.azure.com", "csvfagergj", "C3D1T015D2Q64V34$", "feedback", 3306, MYSQLI_CLIENT_SSL);

if(!$conn){
   die('Could not Connect My Sql:' .mysql_error());
}
?>