<?php
include "constant.php";

//creating connenction 
$conn = new mysqli(HOSTNAME, HOSTUSER, HOSTPASSWORD, DBNAME);

//check connection 
if($conn->conn_error){
    die("connection to the database failed: ".$conn->connect_error);
}else{
    echo "Connection Successfuly to " .DBNAME. "database" ;
}


?>