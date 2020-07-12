<html>
  <head>
    <title>Jukebox</title>

  </head>
    <body>
    <!-- login -->
      <div id = "loginInputContainer">
        <form id="loginForm" action="login.php" method="POST">
          <h2>Login into your account</h2>
          <div class="loginInput">
          <label for= "loginUsername">Username</label>
          <input id="loginUsername" name="loginUsername" type="text" placeholder="Enter your Username" required/>
          </div>
          <div class="loginInput">
          <label for= "loginPassword">Password</label>
          <input id="loginPassword" name="loginPassword" type="password" placeholder="Enter your Password" required/>
          </div>
          <button type="submit" name="loginButton">log in</button>
        </form>
      </div>

<!-- signup -->
      <div id = "signupInputContainer">
        <form id="signupForm" action="signup.php" method="POST">
          <h2>Create an account</h2>
           <!-- username -->
          <div class="signupInput">
          <label for= "signupUsername">Username</label>
          <input id="signupUsername" name="signupUsername" type="text" placeholder="Enter your Username" required/>
          </div>
          <!-- Firstname -->
          <div class="signupInput">
          <label for= "firstName">Username</label>
          <input id="firstName" name="firstName" type="text" placeholder="Enter your First Name" required/>
          </div>

          <!-- lastname -->

          <div class="signupInput">
          <label for= "lastName">Username</label>
          <input id="lastName" name="lastName" type="text" placeholder="Enter your Last Name" required/>
          </div>
          <!-- email -->
          <div class="signupInput">
          <label for= "signEmail">Username</label>
          <input id="signEmail" name="signEmail" type="email" placeholder="Enter your email" required/>
          </div>
          <!-- email Confirm-->
         <div class="signupInput">
          <label for= "signEmailConfirm">Username</label>
          <input id="signEmailConfirm" name="signEmailConfirm" type="email" placeholder="Enter your email" required/>
          </div>

          <!-- Password -->
          <div class="signupInput">
          <label for= "signupPassword">Password</label>
          <input id="signupPassword" name="signupPassword" type="password" placeholder="Confirm your email" required/>
          </div>
          <!-- Password Confirmation -->

          <div class="signupInput">
          <label for= "signupPasswordConfirm">Password</label>
          <input id="signupPasswordConfirm" name="signupPasswordConfirm" type="password" placeholder="Confirm your Password" required/>
          </div>

          <button type="submit" name="signupButton">sign in</button>
        </form>
      </div>
    </body>

</html>