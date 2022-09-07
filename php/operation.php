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
    if(isset($_POST["create_Home"])){
        createHomeData();
        //echo "ilajil cccccc";
    }
    if(isset($_POST["create_profile"])){
        createProfileData();
        //echo "ilajil cccccc";
    }
    if(isset($_POST["create_about"])){
        createAboutData();
        //echo "ilajil cccccc";
    }
    if(isset($_POST["comment"])){
        insertComment();
        //echo "ilajil cccccc";
    }


    if(isset($_POST["read"])){
        getData();
        //echo "ilajil cccccc";
    }
    if(isset($_POST["readHome"])){
        getHomeData();
        //echo "ilajil cccccc";
    }
    if(isset($_POST["aboutWebData"])){
        getOurInfo();
        //echo "ilajil cccccc";
    }
    

    if(isset($_POST["update"])){
        UpdateData();
        //echo "ilajil cccccc";
    }

    if(isset($_POST["updateHome"])){
        UpdateHomeData();
        //echo "ilajil cccccc";
    }
    if(isset($_POST["update_profile"])){
        UpdateProfileData();
        //echo "ilajil cccccc";
    }
    if(isset($_POST["updateWebInfo"])){
        updateWebInfo();
        //echo "ilajil cccccc";
    }


    if(isset($_POST["delete"])){
        deleteRecord();
        //echo "ilajil cccccc";
    }
    if(isset($_POST["deleteRecordHome"])){
        deleteRecordHome();
    }
    if(isset($_POST["deleteMyProfile"])){
        deleteMyProfile();
    }
    if(isset($_POST["deleteInfo"])){
        deleteAboutInfo();
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

    function createHomeData(){

        $home_id = textboxValue("home_id");
        $home_title = textboxValue("home_title");
        $home_desc = textboxValue("home_desc");



        if($home_title && $home_desc){
            $sql = "INSERT INTO homes (title, description) 
            VALUES ('$home_title', '$home_desc')";

            if(mysqli_query($GLOBALS['conn'], $sql)){
                //echo "Record Successfully inserted";
            }else{
                echo "Error";
            }
        }else{
            //echo "Provide data in the Textbox";
            TextNode("success", "Provide Message in the text box");
        }
    }
    function createProfileData(){

        $fname = textboxValue("fname");
        $bio = textboxValue("bio");
        $wedding = textboxValue("wedding");
        $fashion = textboxValue("fashion");
        $model = textboxValue("model");
        $photography = textboxValue("photography");



        if($fname && $bio && $wedding && $fashion && $model && $photography){
            $sql = "INSERT INTO profile ( full_name, bio, wedding_skill, fashion_skill, model_skill, photography_skills) 
            VALUES ( '$fname', '$bio', '$wedding', '$fashion', '$model' , '$photography')";

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

    function createAboutData(){
        $id = textboxValue("aboutId");
        $title = textboxValue("aboutTitle");
        $text = textboxValue("about_description");

        if($id && $title && $text ){
            $sql = "INSERT INTO about ( about_id, about_title, about_text) 
            VALUES ( '$id', '$title', '$text')";

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
    function insertComment(){
        $id = textboxValue("id");
        $compliment = textboxValue("compliment");
        $userComment = textboxValue("userComment");
        $fname = textboxValue("fname");
        $occupation = textboxValue("occupation");
        $images = $_FILES['image']['name'];
        $fileTemp = $_FILES['image']['tmp_name'];
        $fileDestination = 'uploads/'.$images;
        

        if($id && $compliment && $userComment && $fname && $occupation && $fileDestination ){
            $sql = "INSERT INTO reviews (reviews_id, review_title, review_comment, fullname, occupation_title , image)
            VALUES ('$id', '$compliment', '$userComment', '$fname', '$occupation' , '$fileDestination')";

            if(mysqli_query($GLOBALS['conn'], $sql)){
                if(move_uploaded_file($fileTemp, $fileDestination)){
                    //echo "success";
                }else{
                    echo "fail";} 
                //echo "Record Successfully inserted";
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
    function getHomeData(){
        $sql = "SELECT * FROM homes";

        $result = mysqli_query($GLOBALS['conn'], $sql);

        if(mysqli_num_rows($result)>0){
            return $result;
        }
    }   
    function getProfileData(){
       //echo "This is great";
        $sql = "SELECT * FROM profile";

        $result = mysqli_query($GLOBALS['conn'], $sql);

        if(mysqli_num_rows($result)>0){
            return $result;
        }
    }
    function getOurInfo(){
        //echo "This is great";
        $sql = "SELECT * FROM about";

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
    
    function UpdateHomeData(){
        //echo "update";
        $id = textboxValue("home_id");
        $title = textboxValue("home_title");
        $description = textboxValue("home_desc");

        if($id && $title && $description){
            $sql = "UPDATE homes SET id = '$id', title = '$title', description = '$description' WHERE id = '$id'";
            
            if(mysqli_query($GLOBALS['conn'], $sql)){
                TextNode("success", "Record inserted successfuly");
            }else{
                TextNode("Error", "unable to update data");
            }
        }else{
            TextNode("error" , "Select service using edit icon");
        }
    }

    function UpdateProfileData(){
        //echo "update";
        $id = textboxValue("id");
        $name = textboxValue("fname");
        $bio = textboxValue("profile_bio");
        $wedding_skill = textboxValue("wedding");
        $fashion_skill = textboxValue("fashion");
        $model_skill = textboxValue("model");
        $photography_skills = textboxValue("photography");

        if($id && $name && $bio && $wedding_skill && $fashion_skill && $model_skill && $photography_skills){
            $sql = "UPDATE profile SET profile_id = '$id', full_name = '$name', bio = '$bio', wedding_skill = '$wedding_skill', fashion_skill = '$fashion_skill', model_skill = '$model_skill' , photography_skills = '$photography_skills' WHERE profile_id = '$id'";
            
            if(mysqli_query($GLOBALS['conn'], $sql)){
                TextNode("success", "Record inserted successfuly");
            }else{
                TextNode("Error", "unable to update data");
            }
        }else{
            TextNode("error" , "Select service using edit icon");
        }
    }
    function updateWebInfo(){
        $aboutId = textboxValue("aboutId");
        $aboutTitle = textboxValue("aboutTitle");
        $about_description = textboxValue("about_description");

        if($aboutId && $aboutTitle && $about_description){
            $sql = "UPDATE about SET about_id='$aboutId', about_title='$aboutTitle', about_text='$about_description' WHERE about_id='$aboutId'";

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

    function deleteRecordHome(){
        $id = (int)textboxValue('home_id');

        $sql = "DELETE FROM homes WHERE id=$id";

        if(mysqli_query($GLOBALS['conn'], $sql)){
            TextNode("Warning", "Record successfuly deleted");
        }else{
            TextNode("error", "Record not deleted");
        }

    }

    function deleteMyProfile(){
        $id = (int)textboxValue('id');

        $sql = "DELETE FROM profile WHERE profile_id=$id";

        if(mysqli_query($GLOBALS['conn'], $sql)){
            TextNode("Warning", "Record successfuly deleted");
        }else{
            TextNode("error", "Record not deleted");
        }
    }

    function deleteAboutInfo(){
        $id = (int)textboxValue('aboutId');

        $sql = "DELETE FROM about  WHERE about_id='$id'";

        if(mysqli_query($GLOBALS['conn'], $sql)){
            TextNode("Warning", "Record successfuly deleted");
        }else{
            TextNode("error", "Record not deleted");
        }
    }

?>