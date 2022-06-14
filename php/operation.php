<?php
    require_once ("./connection.php");
    require_once ("component.php");



    if(isset($_POST["create"])){
        createData();
    }

    function createData(){
        $serviceTitle = textValue("title");
        $serviceText = textValue("serviceDesc");
        
        if($serviceTitle && $serviceText){
            $sql = "INSERT INTO services (service_title, services) VALUES ('$serviceTitle', '$serviceTitle')";

            if(mysqli_query($GLOBALS['$conn'], $sql)){
                echo "Record Successfully inserted";
            }else{
                echo "Error";
            }
        }else{
            echo "Provide data in the Textbox";
        }
        
    }

    function textValue($value){
        $textbox = mysqli_real_escape_string($GLOBALS['$conn'], trim($_POST[$value]));   
            if(empty($textbox)){
                return false;
            }else{
                return $textbox;
            }
        
    }
?>