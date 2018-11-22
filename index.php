<?php
  include_once 'php_scripts/connect.php';
  session_start();
  ?>
<!doctype html>
<html lang="en">
    <head>
        <title>
            Home
        </title>
    <script>
    </script>
    <link rel="stylesheet" type="text/css" href="style/main.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.bundle.min.js" integrity="sha384-pjaaA8dDz/5BgdFUPX6M/9SUZv4d12SUPF0axWc+VRZkx5xU3daN+lYb49+Ax+Tl" crossorigin="anonymous"></script>   
    <script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
  <script src="js/main.js"></script>
</head>
    
    <body>
     <div class="container">
            <div class="row-1" id="signUp">
            <form class="text-center border border-light p-5" method="POST" action="php_scripts/login.php">

                    <p class="h4 mb-4">Sign in</p>
                
                    <!-- Email -->
                    <input type="email" id="mailLogin" name="mailLogin" class="form-control mb-4 mailLogin" placeholder="E-mail">
                
                    <!-- Password -->
                    <input type="password" name="passwordLogin" id="passwordLogin" class="form-control mb-4 passwordLogin" placeholder="Password">
                
                    <div class="d-flex justify-content-around">
                         <!-- Remember me -->
                         <!-- <div>
                           
                          
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="defaultLoginFormRemember">
                                <label class="custom-control-label" for="defaultLoginFormRemember">Remember me</label>
                            </div>
                        </div>-->
                        <div>
                            <!-- Forgot password -->
                            <a href="">Forgot password?</a>
                        </div>
                    </div>
                
                    <!-- Sign in button -->
                    <button class="btn btn-outline-info btn-block my-4 logInBtn" id="logInBtn" type="submit">Sign in</button>
                
                    <!-- Register -->
                    <p>Not a member?
                        <a href="#registerForm" id="registerLink">Register</a>
                    </p>
                
                    <!-- Social login -->
                 
                    <p>or sign in with:</p>
                
                    <a href class="black-text mx-2">
                        <i class="fa fa-facebook" ></i>
                    </a>
                    <a href="#" class="black-text mx-2">
                        <i class="fa fa-twitter"></i>
                    </a>
                    <a href="#" class="black-text mx-2">
                        <i class="fa fa-linkedin"></i>
                    </a>
                    <a href="#" class="black-text mx-2">
                        <i class="fa fa-github"></i>
                    </a>
                    <a href="#" class="black-text mx-2">
                      <i class="fa fa-google"></i>
                  </a>
                  <a href="#" class="black-text mx-2">
                    <i class="fa fa-youtube"></i>
                </a>
                <a href="#" class="black-text mx-2">
                  <i class="fa fa-instagram"></i>
              </a>
              <a href="#" class="black-text mx-2">
                <i class="fa fa-behance"></i>
            </a>
            <a href="#" class="black-text mx-2">
              <i class="fa fa-whatsapp"></i>
          </a>
          <a href="#" class="black-text mx-2">
            <i class="fa fa-skype"></i>
        </a>
        
                
                </form>
                    </div>

                    <div id="registerForm" >
                            <form action="php_scripts/register.php" class="text-center border border-light p-5" method="POST">
                                    <p class="h4 mb-4">New User</p>
                                    <div class="row">
                                      <div class="col-lg-6">
                                        <div class="form-group">
                                          <input type="text" class="form-control mt-2 name" id="name" name="name" placeholder="Name" required>
                                        </div>
                                      </div>
                                      <div class="col-lg-6">
                                        <div class="form-group">
                                          <input type="text" class="form-control mt-2 surname" id="surname" name="surname" placeholder="Surname" required>
                                        </div>
                                      </div>
                                      <div class="col-lg-6">
                                        <div class="form-group">
                                          <input type="email" class="form-control mt-2 mail" id="mail" name="mail" placeholder="Email" required>
                                        </div>
                                      </div>
                                      <div class="col-lg-6">
                                        <div class="form-group">
                                          <input type="number" class="form-control mt-2 num" name="num" id="num" placeholder="Mobile Number" required>
                                        </div>
                                      </div>
                                      <div class="col-lg-6">
                                            <div class="form-group">
                                              <input type="password" class="form-control mt-2 pass" name="pass" id="pass" placeholder="Password" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                                <div class="form-group">
                                                  <input type="password" class="form-control mt-2 passConfirm" name="passConfirm" id="passConfirm" placeholder="Confirm Password" required>
                                                </div>
                                            </div>
                                      <div class="col-12">
                                      <div class="form-group">
                                        <!--<div class="form-check">
                                          <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
                                          <label class="form-check-label" for="invalidCheck2">
                                            Gender
                                          </label>
                                        </div>-->
                                      </div>
                                      </div>
                                      <!--Register button -->
                                      <button class="btn btn-outline-danger btn-block my-4 sumitBtn" id="sumitBtn" type="submit">Submit</button>
                                    </div>
                                  </form>
                    </div>
            </div>
            

    </body>
</html>


