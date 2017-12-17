<!DOCTYPE html>

<html>

  <head>

    <title>Final Project</title>

  </head>

  <body>

    <div class="page login-page">

      <div class="container d-flex align-items-center">

        <div class="form-holder has-shadow">

          <div class="row">

                    <h1>Todo Tasks Process</h1>
                    <h3>Registration</h3>

                  </div>

                  </div>

              </div>

            </div>


                  <form id="register-form" action="index.php?page=accounts&action=register" method="POST">

                    <div class="form-group">

                      <input id="register-username" type="email" name="email" required class="input-material">

                      <label for="register-username" class="label-material">Email Address</label>

                    </div>

                    <div class="form-group">

                      <input id="register-First name" type="First Name" name="fname" required class="input-material">

                      <label for="register-First name" class="label-material">First Name      </label>

                    </div>

                    <div class="form-group">

                      <input id="register-Last name" type="Last Name" name="lname" required class="input-material">

                      <label for="register-Last name" class="label-material">Last Name      </label>

                    </div>

                    <div class="form-group">

                      <input id="register-Phonenumber" type="Phone Number" name="phone" required class="input-material">

                      <label for="register-Phonenumber" class="label-material">Phone Number        </label>

                    </div>

                    <div class="form-group">

                      <input id="register-Birthdate" type="Birthday" name="bday" required class="input-material">

                      <label for="register-Birthdate" class="label-material">Birthdate        </label>

                    </div>

                    <div class="form-group">

                      <input id="register-Gender" type="Gender" name="gender" required class="input-material">

                      <label for="register-Gender" class="label-material">Gender        </label>

                    </div>

                    <div class="form-group">

                      <input id="register-passowrd" type="password" maxlength="6" name="password" required class="input-material">

                      <label for="register-passowrd" class="label-material">password        </label>

                    </div>

                    <div class="form-group terms-conditions">

                      <input id="license" type="checkbox" class="checkbox-template">

                      <label for="license">Agree the terms and policy</label>

                    </div>



                    <input id="register" type="submit" value="Register" class="btn btn-primary">

                  </form>Have an account? <a href="index.php" class="signup">Login</a>

  </body>
