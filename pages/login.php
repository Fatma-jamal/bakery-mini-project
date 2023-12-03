<?php


?>

    <div class="login-container cover">
        <div class="login-card">
            <div>
                <form  id="login-form" method="post">
                  <input type="hidden" name="form" value="login">
                  <div class="input-container">
                    <input type="text" name="username" required=""/>
                    <label>Username</label>		
                  </div>
                  <div class="input-container">		
                    <input type="password" name="password" required=""/>
                    <label>Password</label>
                  </div>
                  <input type="submit" value="login" class="loginBtn">
                    <p>or</p>
                  <button type="submit" class="googleBtn">Continue with google</button>
                  <br><br>
                  <p>Don't have an account?
                      <a class="signupLink" href="signUp.html">Sign up</a>
                  </p>
                </form>
            </div>
          </div>
    </div>
    <button id="scrollToTopBtn" title="Go to top">&#8593;</button>

