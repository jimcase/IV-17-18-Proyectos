<?php
    /* start the session */
require('database.php');

require('imgClass.php');


function uploadOK(){
    if($_SESSION['uploadOK'])
    {
        echo ('<i class="fa fa-check-circle" aria-hidden="true" ></i>');
    }
    else{
        echo ('<i class="fa fa-times" aria-hidden="true"></i>');
    }
}
session_start();  
/* session_start();
$mysqli = connectDB();
 */
if(!empty($_POST)){    
    
    // echo $_FILES["imgn"]["tmp_name"];
    // echo $_SESSION['email'];
    $emailFolder = $_SESSION['email'];
    $single_name = $_POST['img_namePC'];
    $target_dir = "uploads/".$emailFolder."/";  
    
        

    if (!file_exists($target_dir)) {
        mkdir($target_dir, 0777, true);
    }   

    $target_file = $target_dir . basename($_FILES["imgn"]["name"]);    
    $uploadOk = 1;
    $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

    $destination = $single_name . "." .$imageFileType;
    $destination = $target_dir . $destination;

    

    $info_file = array();
    $aux = "OK";

    //echo "es: ".$_FILES["imgn"]["tmp_name"];

    if ($_FILES["imgn"]["tmp_name"] != null){
    
        if(isset($_POST["submit"])) {
            $check = getimagesize($_FILES["imgn"]["tmp_name"]);
            if($check !== false) {
                $aux = "File is an image - " . $check["mime"] . ".";
                //echo "File is an image - " . $check["mime"] . ".";
                $uploadOk = 1;
                array_push($info_file,$aux);
            } else {
                $aux = "File is not an image.";
                $uploadOk = 0;
                array_push($info_file,$aux);
            }
        }
    }
    else{
        $aux = "File is not an image.";
        $uploadOk = 0;
        array_push($info_file,$aux);
    }

    
    // Check if file already exists
    if (file_exists($target_file)) {
        $aux = "Sorry, file already exists.";
        $uploadOk = 0;
        array_push($info_file,$aux);
    }
    // Check file size
    if ($_FILES["imgn"]["size"] > 500000) {
        $aux = "Sorry, your file is too large, max. 50Mb.";
        $uploadOk = 0;
        array_push($info_file,$aux);
    }
    // Allow certain file formats
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif" ) {
        $aux = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
        array_push($info_file,$aux);
    }
    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        $aux = "Sorry, your file was not uploaded.";
        array_push($info_file,$aux);
    // if everything is ok, try to upload file
    } else {
        //move_uploaded_file($_FILES["file"]["tmp_name"], "../img/imageDirectory/" . $_FILES["file"]["name"]);
        //$destination = $POST['img_namePC'];
        $img_obj = new IMG($single_name,$destination,$emailFolder, $destination);
        $img_obj->addToDB($_FILES["imgn"]["tmp_name"]);      

    }

    //echo json_encode($info_file);
    
    header("Location: ../index.php");
    die();

}

 

?>




