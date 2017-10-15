 <!-- Modelo: https://bootsnipp.com/snippets/X2ADG -->
<!DOCTYPE html>
<html lang="en">

  <head>
    <!--Configuración-->
    <meta charset="utf-8">
    <title>IMG Index</title> 
    <link rel="shortcut icon" href="images/mainIcon.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS -->
    <link rel = "stylesheet" type = "text/css" href = "css/style.css" />
    <link rel="stylesheet" href="css/font-awesome/css/font-awesome.min.css">
    <link rel='stylesheet prefetch' href='http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css'>

    <!-- JavaScript -->
    <!-- <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet"> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> 
    <script src="js/changeUpload.js"></script> 
    <!-- <script src="js/printDetails.js"></script>--> 

    
      
  </head>
  <?php
						/*cargamos las variables de la sesion*/
            session_start();
      if(!(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true)) {
        header("Location: ./login.php");
        die();
      }
  ?>
    <div id="index_header" class="align" >      
      <h1 id="title">IMG_CLOUD</h1>      
    </div>    
    <div class="mainBlock">
      <div id="leftBlock">
        <div id="optionSelected" href="#">
          <a id="sfromdisk" class="selectOption" href="#">From Disk</a>
          <h4 class="selectOption splitBar">_|_</h4>
          <a id="sfromweb" class="selectOption " href="#">From Web</a>
        </div>        
        <div id="profile">
          <img src="images/profile.png" alt="profile" >
        </div>
        <h2 id="nick"> <?php session_start(); 
                            echo $_SESSION['email']; ?>
        </h2>        
        <form id="form_fromPC"  action="php/uploadfromPC.php" method="POST"  enctype="multipart/form-data">
          <input id="folderFile" placeholder=" path/" disabled="disabled" />
          
          <div id="fileUpload" class="fileUpload btn btn-primary">
            <span>Search IMG
              <i class="fa fa-cloud-upload" aria-hidden="true"></i>
              <input id="uploadBtn" type="file" name="imgn" class="upload" />
            </span>
          </div>          
          
          <h5>Name: </h5>
          <input class="img_name" name="img_namePC" placeholder="" />
          <h5>Description: </h5>
          <input class="img_description" name="img_description" placeholder="" />

          <input id="btnPost" type="submit" value="Upload Image" name="submit">
        </form>

        <form id="form_fromWeb"  action="php/uploadfromPC.php" method="POST"  enctype="multipart/form-data">
          <input id="folderFileWeb" placeholder=" Link:" />                  
          
          <h5>Name: </h5>
          <input class="img_name" name="img_nameWeb" placeholder="" />
          <h5>Description: </h5>
          <input class="img_description" name="img_description" placeholder="" />

          <input id="btnPost" type="submit" value="Upload Image" name="submit">
        </form>
        
        <div id="infoUpload">
          <p>Info:</p>
          <div id="detailsUpload">
          <?php
          uploadOK();
          ?>
          </div>

        </div>
        
          
      </div>

      <div id="rightBlock">

      </div>
      

    </div>
    
    
 

  </body>
  <script>     
      document.getElementById("uploadBtn").onchange = function () {
      document.getElementById("folderFile").value = this.value;
      };
    </script> 
</html>