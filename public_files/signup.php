<?php
	session_start();

	include("../templates/header.php");
	include("../templates/mainmenu.php");
?>

    <div class="my-content" >
        <div class="container" >
            <div class="row">
                <div class="col-sm-6" >
                  <h1>Sign Up</h1>
                  <div class="mydescription">
                    <!-- <p>Formulario de Registro diseñado con Bootstrap. </p> -->
                  </div>
                </div>
            </div>
            <div class="row">
              <div class="col-sm-6 col-sm-offset-3 myform-cont" >
                    <div class="myform-top">
                        <div class="myform-top-left">
                          <!-- <h3>Regístrate en nuestro sitio.</h3>
                            <p>Por favor ingresa tus datos personales:</p> -->
                        </div>
                        <div class="myform-top-right">
                          <i class="fa fa-user"></i>
                        </div>
                    </div>
                    <div class="myform-bottom">
                      <form role="form" action="../datos/signup_action.php" method="post" class="">
                        <div class="form-group">
                            <input type="text" name="userName" placeholder="username" class="form-control" id="form-username" require="required">
                        </div>
                        <div class="form-group">
                            <input type="email" name="email" placeholder="email" class="form-control" id="form-email" require="required">
                        </div>

                        <div class="form-group">
                            <input type="password" name="pwd" placeholder="password" class="form-control" id="form-pwd" require="required">
                        </div>
                        <div class="form-group">
                            <input type="password" name="pwdConfirm" placeholder="confirm password" class="form-control" id="form-pwdConfirm" require="required">
                        </div>



			<button type="submit" class="mybtn mb-3">Sign Up</button>
	     		<button type="reset" class="mybtn mb-3">Clean</button>


                      </form>
                    </div>
              </div>
            </div>
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
