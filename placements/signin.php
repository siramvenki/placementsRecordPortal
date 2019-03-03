
<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Starter Template - Materialize</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <!-- <script src="js/script.js"></script> -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <!-- <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script> -->
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>
  <!-- <script src="js/script.js"></script> -->
  <script type="text/javascript">
   
  $(function(){ 
  $("#login_btn").click(function(){

      var email=$("#email").val();
      var password=$("#password").val();

      $.ajax({
      url: 'signInTest.php',
      type: 'POST',
      data: {'email': email, 'password': password},
      success: function(data, status) {
        data = data.trim();
        if(data == "ok") {
          // alert("Registration success..!  please confirm your email sent to your mail account");
          // $("#error").text("success");
          <?php
          session_start();
          // header(" Location : index.php");
          //   exit();
          ?>
          window.location.href = 'index.php';
        } else {
          $("#error").text(data);
        }
      },
      error: function(xhr, desc, err) {
        console.log(xhr);
        console.log("Details: " + desc + "\nError:" + err);
      }
    }); // end ajax call
  });


  });
  
  </script>

</head>


<body>



  <?php
    include "header.php";
  ?>
  
<div class="row center">
    <form class="col s12 center">

      <div class="row">
        <div class="input-field col s12">
          <h4>Sign In </h4><br>  
         Do not hava an account ?  <a href="signup.php">Sign up here</a>

        </div>
      </div>
      <!-- <i> click me</i> -->

      <div class="row">
        <div class="input-field col s12">
          <input id="email" name="email" type="email" class="validate">
          <label for="email">Enter Email ID</label>
        </div>
      </div>

      <div class="row">
        <div class="input-field col s12">
          <input id="password" name="password" type="password" class="validate">
          <label for="password">Enter Password</label>
        </div>
      </div>

          
      <div class="row">
        <div class="input-field col s12">
        
          <button class="btn waves-effect waves-light green col s5 l5 m5 left" type="button" id="login_btn">Sign in </button>
          <button class="btn waves-effect waves-light green col s5 l5 m5 right" type="reset" id="reset">Reset</button>

        </div>
      </div>
      
    </form>

      <div id="error"></div>
  </div>

      <div class="row"></div>
      <div class="row"></div>
      <div class="row"></div>
      <div class="row"></div>
      <div class="row"></div>
      <div class="row"></div>
  <?php
    include "footer.php";
  ?>
  </body>

</html>
