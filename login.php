 <!-- Modelo: https://bootsnipp.com/snippets/X2ADG -->
<!DOCTYPE html>
<html lang="en">

  <head>
    <!--Configuración-->
    <meta charset="utf-8">
    <title>IMG Login</title> 
    <link rel="shortcut icon" href="images/mainIcon.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS -->
    <link rel = "stylesheet" type = "text/css" href = "css/style.css" />
    <link rel="stylesheet" href="css/font-awesome/css/font-awesome.min.css">
    <link rel='stylesheet prefetch' href='http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css'>

    <!-- JavaScript -->
    <!-- <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet"> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="js/popUp.js"></script>
  </head>

  <body class="align">
     <!-- 
    <div id="lenguajes"> 
      <img class="lengIcon" src="images/flag-spain.png">
      <img class="lengIcon" src="images/United-Kingdom-flag-icon.png">      
    </div>
     -->
    <div id="divTitle" class="">
      <h1 id="title">IMG_CLOUD</h1>
    </div>

    <div id="signin" class="grid">

      <form action="php/loginDB.php" method="POST" class="form login">

        <div class="form__field">
          <label for="login__email">           
            <i class="icon ion-person" style="text-align: center;font-size: 30px; margin: 5px"></i>            
            <span class="hidden">Email</span>
          </label>
          <input id="login__email" type="text" name="email" class="form__input" placeholder="Enter an email" required>
        </div>

        <div class="form__field">
          <label for="login__password">            
            <i class="icon ion-lock-combination" style="text-align: center;font-size: 30px; margin: 5px;"></i>            
            <span class="hidden">Password</span></label>
          <input id="login__password" type="password" name="password" class="form__input" placeholder="Password" required>
        </div>

        <div class="form__field">
          <input type="submit" value="Sign In">
        </div>

      </form>

      <p class="text--center">Not a member? 
      <a id="buttonSignUp" href="#">Sign up now</a>
      </p>

    </div>

    <div id="signup" class="grid">

      <form action="php/signup.php" method="POST" class="form login">

        <div class="form__field">
          <label for="login__email">           
            <i class="icon ion-person" style="text-align: center;font-size: 30px; margin: 5px"></i>            
            <span class="hidden">Email</span>
          </label>
          <input id="login__email" type="text" name="email" class="form__input" placeholder="Enter an email" required>
        </div>

        <div class="form__field">
          <label for="login__password">            
            <i class="icon ion-lock-combination" style="text-align: center;font-size: 30px; margin: 5px;"></i>            
            <span class="hidden">Password</span></label>
          <input id="login__password" type="password" name="password" class="form__input" placeholder="Enter a strong password" required>
        </div>

        <div class="form__field">
          <input class="signupInput" type="submit" value="Sign Up">
        </div>

        <a id="backtosignin" class=" text--center" href="#">
          <i class="buttonBack fa fa-chevron-left" aria-hidden="true"></i>
        </a>
      </form> 

      
    
    </div>

   
    
 

  </body>

</html>