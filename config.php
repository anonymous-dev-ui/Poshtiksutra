<?php 

define("Db_server","localhost");
define("Db_user" ,"ewebtalk_poshtik");
define("Db_pass","Mb5YVxzPeaWL");
define('Db_name', 'ewebtalk_poshtik');

$conn=  mysqli_connect(Db_server,Db_user,Db_pass,Db_name);

if($conn){
    // echo "connected";
}
else{
    echo"denied";
}
?>
