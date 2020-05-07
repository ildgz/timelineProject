<?php

  include("../templates/header.php");
  //include("../templates/mainmenu.php");

?>

 <div class="my-content" id="micontenido">
        <div class="container" > 

            <div class="row">
              <div class="col-sm-6" >
                  <h1>Log in</h1>
                  <div class="mydescription">
                    <!-- <p></p> -->
                  </div> 
              </div>
            </div>

            <div class="row">
                  <div class="col-sm-6 col-sm-offset-3 myform-cont" >
                      <div class="myform-top">
                          <div class="myform-top-left">
                            <!-- <h3>Ingresa a nuestro sitio.</h3>
                              <p>Digita tu usuario y contraseña:</p> -->
                          </div> 
                          <div class="myform-top-right">
                            <i class="fa fa-key"></i>
                          </div>
                      </div>
                      <div class="myform-bottom">
                        <!-- <form role="form" action="../datos/login_action.php" method="post" class="" id="my-form"> -->
                        <form action="../datos/login_action.php" method="post" name="form" class="" id="my-form">
                          <div class="form-group">
                              <input type="text" name="userName" placeholder="username" class="form-control" id="form-username">
                          </div>
                          <div class="form-group">
                              <input type="password" name="password" placeholder="password" class="form-control" id="form-password">
                          </div>
                          <button type="submit" class="mybtn">Log in</button>
                        </form>
                      </div>
                  </div>
            </div>
            
            <!-- ingresa por redes sociales -->
            <!-- <div class="row">
                 <div class="col-sm-12 mysocial-login">
                    <h3>...ingresa también por:</h3>
                    <div class="mysocial-login-buttons" >
                      <a class="mybtn-social" href="#">
                      <i class="fa fa-facebook"></i> Facebook
                      </a>
                      <a class="mybtn-social" href="#">
                      <i class="fa fa-twitter"></i> Twitter
                      </a>
                      <a class="mybtn-social" href="#">
                      <i class="fa fa-google-plus"></i> Google Plus
                      </a>
                    </div>
                </div>   
            </div> -->

        </div>
    </div>

    <!-- mensajes de error -->
    <script src="../templates/js/mensajes.js"></script> 