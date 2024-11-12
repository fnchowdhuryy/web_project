<?php
$db_host ="localhost";
$db_user ="root";
$db_password="";
$db_name ="OSMS";
$db_port=3306;

//connnection

$conn=new mysqli($db_host, $db_user ,$db_password, $db_name, $db_port);

//ck connec
if($conn->connect_error){
    die("Connection Failed");
}
//else{
 //   echo "Connect";
//}


?>