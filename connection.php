<?php

include "constant.php";

//creating connenction
$conn = new mysqli($HOSTNAME, $HOSTUSER, $HOSTPASSWORD);

//check connection
if($conn->conn_error){
    die("connection to the database failed: ".$conn->connect_error);
}else{
    // echo "Connection Successfuly to " .$DBNAME. "database" ;
}
$sql = "CREATE DATABASE IF NOT EXISTS $DBNAME";

if(mysqli_query($conn, $sql)){
    $conn = new mysqli($HOSTNAME, $HOSTUSER, $HOSTPASSWORD, $DBNAME);
    // echo "Connection Successfuly created db" ;
    $sql = "CREATE TABLE IF NOT EXISTS services(
        service_id int(11) AUTO_INCREMENT PRIMARY KEY,
        service_title VARCHAR(50),
        services VARCHAR(255)
    )";

        if(mysqli_query($conn, $sql)){
            //echo "Table created";
        }else{
            echo "Cannot create table...!";
        }

    $sql = "CREATE TABLE IF NOT EXISTS homes(
        id int(11) AUTO_INCREMENT PRIMARY KEY,
        title VARCHAR(50) NOT NULL,
        description VARCHAR(255) NOT NULL
    )";

        if(mysqli_query($conn, $sql)){
            //echo "Table created";
        }else{
            echo "Cannot create table...!";
        }

        $sql = "CREATE TABLE IF NOT EXISTS profile(
            profile_id int(11) AUTO_INCREMENT PRIMARY KEY,
            full_name VARCHAR(50) NOT NULL,
            bio VARCHAR(255) NOT NULL,
            wedding_skill int(11) NOT NULL, 
            fashion_skill int(11) NOT NULL,
            model_skill int(11) NOT NULL,
            photography_skills int(11)



        )";
    
            if(mysqli_query($conn, $sql)){
                //echo "Table created";
            }else{
                echo "Cannot create table...!";
            }
    
            $sql = "CREATE TABLE IF NOT EXISTS package(
                package_id int(11) AUTO_INCREMENT PRIMARY KEY,
                package_name VARCHAR(50) NOT NULL,
                package_type VARCHAR(50) NOT NULL
            )";
        
                if(mysqli_query($conn, $sql)){
                    //echo "Table created";
                }else{
                    echo "Cannot create table...!";
                }
                $sql = "CREATE TABLE IF NOT EXISTS about(
                    about_id int(11) AUTO_INCREMENT PRIMARY KEY,
                    about_title VARCHAR(50) NOT NULL,
                    about_text VARCHAR(255) NOT NULL,
                    about_image VARCHAR(255)
                )";
            
                    if(mysqli_query($conn, $sql)){
                        //echo "Table created";
                    }else{
                        echo "Cannot create table...!";
                    }

                    $sql = "CREATE TABLE IF NOT EXISTS package(
                package_id int(11) AUTO_INCREMENT PRIMARY KEY,
                package_name VARCHAR(50) NOT NULL,
                package_type VARCHAR(50) NOT NULL
            )";
        
                if(mysqli_query($conn, $sql)){
                    //echo "Table created";
                }else{
                    echo "Cannot create table...!";
                }

                $sql = "CREATE TABLE IF NOT EXISTS about(
                    about_id int(11) AUTO_INCREMENT PRIMARY KEY,
                    about_title VARCHAR(50) NOT NULL,
                    about_text VARCHAR(255) NOT NULL,
                    about_image VARCHAR(255)
                )";
            
                    if(mysqli_query($conn, $sql)){
                        //echo "Table created";
                    }else{
                        echo "Cannot create table...!";
                    }
    
                    $sql = "CREATE TABLE IF NOT EXISTS reviews(
                        reviews_id int(11) AUTO_INCREMENT PRIMARY KEY,
                        image VARCHAR(450),
                        review_title VARCHAR(50) NOT NULL,
                        review_comment VARCHAR(255) NOT NULL,
                        fullname VARCHAR(50) NOT NULL,
                        occupation_title VARCHAR(50) NOT NULL

                    )";
                
                        if(mysqli_query($conn, $sql)){
                            //echo "Table created";
                        }else{
                            echo "Cannot create table...!";
                        }

}else{
    echo "Error while creating database". mysqli_error($conn);
} 

?>

