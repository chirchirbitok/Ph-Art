<link rel="stylesheet" href="style.css">
<?php
    require_once ("./connection.php");
    require_once ("component.php");

    if($conn->conn_error){
        die("connection to the database failed: ".$conn->connect_error);
    }else{
        //echo "Connection Successfuly to " .$DBNAME. "database" ;
    }

    if(isset($_POST["create"])){
        createData();
        //echo "ilajil cccccc";
    }

    if(isset($_POST["read"])){
        getData();
        //echo "ilajil cccccc";
    }

    if(isset($_POST["update"])){
        UpdateData();
        //echo "ilajil cccccc";
    }

    if(isset($_POST["delete"])){
        deleteRecord();
        //echo "ilajil cccccc";
    }

    function createData(){
        $serviceTitle = textboxValue("title");
        $serviceText = textboxValue("serviceDesc");
        
        if($serviceTitle && $serviceText){
            $sql = "INSERT INTO services (service_title, services) 
            VALUES ('$serviceTitle', '$serviceText')";

            if(mysqli_query($GLOBALS['conn'], $sql)){
                echo "Record Successfully inserted";
            }else{
                echo "Error";
            }
        }else{
            //echo "Provide data in the Textbox";
            TextNode("success", "Provide Message in the text box");
        }
        
    }

    function textboxValue($value){
        $textbox = mysqli_real_escape_string($GLOBALS['conn'], trim($_POST[$value]));   
            if(empty($textbox)){
                return false;
            }else{
                return $textbox;
            }
        
    }

    //Messages
    function TextNode($classname, $msg){
        $element = "<h6 class='$classname'>$msg</h6>";
        echo $element;
    }

    //get data from mysql database
    function getData(){
        $sql = "SELECT * FROM services";

        $result = mysqli_query($GLOBALS['conn'], $sql);

        if(mysqli_num_rows($result)>0){
            return $result;
        }
    }

    function UpdateData(){
        $service_id = textboxValue("service_id");
        $service_title = textboxValue("title");
        $service_desc = textboxValue("serviceDesc");

        if($service_id && $service_title && $service_desc){
            $sql = "UPDATE services SET service_id='$service_id', service_title='$service_title', services='$service_desc' WHERE service_id='$service_id'";

            if(mysqli_query($GLOBALS['conn'], $sql)){
                TextNode("success", "Record inserted successfuly");
            }else{
                TextNode("Error", "unable to update data");
            }
        }else{
            TextNode("error" , "Select service using edit icon");
        }
    }

    function deleteRecord(){
        $id = (int)textboxValue('service_id');

        $sql = "DELETE FROM services WHERE service_id=$id";

        if(mysqli_query($GLOBALS['conn'], $sql)){
            TextNode("Warning", "Record successfuly deleted");
        }else{
            TextNode("error", "Record not deleted");
        }

    }


?>