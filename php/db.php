<?php

function createDB(){
 $HOSTNAME ='localhost';
$DBNAME = 'phos1';
$DB_CHARSET ='utf8';
$HOSTUSER = 'root';
$HOSTPASSWORD = '';


//creating connenction 
$conn = new mysqli($HOSTNAME, $HOSTUSER, $HOSTPASSWORD);

if(!$conn){
    die("connection Failed:".mysqli_connect_error());
}

//CREATE DATABASE IF NOT EXISTS    
    $sql = "CREATE DATABASE IF NOT EXISTS $DBNAME"; 

    if(mysqli_query($conn, $sql)){
        echo "Database Created";
    }else{
        echo "Error while creating database". mysqli_error($conn);
    }   
}


?>