<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="sign12.css">
    <title>Sign</title>
</head>
<body>
    <div class="title">
        <h1>e-Knowledge</h1>
    </div>
  
  <div class="container">
    <div class="flip-card">
        <div class="menu">
          <button disabled id="signIn" class="menu-btn sign-in active">Sign In</button>
          <button  id="singUp" class="menu-btn sign-up">Sign Up</button>
        </div>
      <div id="cardInner" class="flip-card-inner ">
  
        <div class="flip-card-front">
          
          <h2>Sign In</h2>
          <form id="signInForm" action="../includes/login.inc.php" method="POST">
            <div class="input-gorup email-input">
              <input required type="text" name="uid" autocomplete="off"  placeholder="Your Email / Username ">
              <i class="left-icon fas fa-at"></i>
            </div>
            
            <div class="input-gorup password-input">
              <input id="signInPass" required type="password" name="pwd" autocomplete="off" placeholder="Your Password">
              <i class="left-icon fas fa-lock"></i>
              <i id="signInShowPass" class="right-icon fas fa-eye show-pass"></i>
            </div>
            
           
            
            <div class="input-gorup submit-input">
              <input type="submit" name="submit" value="Submit">
            </div>
          </form>
          
          <span>
            <a class="forgot-link" href="">Forgot your password?</a>
          </span>
          
          
        </div>
        
        <div class="flip-card-back">
          <h2>Sign Up</h2>
          <form id="signUpForm" action="../includes/signup.inc.php" method="POST">
            <div class="input-gorup name-input">
              <input required type="text" name="name" autocomplete="off" placeholder="Your Name">
              <i class="left-icon fas fa-user"></i>
            </div>
            
            <div class="input-gorup email-input">
              <input type="email" name="email" autocomplete="off" placeholder="Your Email">
              <i class="left-icon fas fa-at"></i>
            </div>

            <div class="input-gorup name-input">
              <input type="text" name="uid" autocomplete="off" placeholder="Your Username">
              <i class="left-icon fas fa-at"></i>
            </div>
            
            <div class="input-gorup password-input">
              <input id="signUpPass" required type="password" name="pwd" autocomplete="off" placeholder="Your Password">
              <i class="left-icon fas fa-lock"></i>
              <i id="signUpShowPass" class="right-icon fas fa-eye show-pass"></i>
            </div>

            <div class="input-gorup password-input">
              <input id="signUpPass" required type="password" name="pwdrepeat" autocomplete="off" placeholder="Your Password repate">
              <i class="left-icon fas fa-lock"></i>
              <i id="signUpShowPass" class="right-icon fas fa-eye show-pass"></i>
            </div>
            
            <div class="input-gorup submit-input">
              <input type="submit" name="submit" value="Submit">
            </div>
          </form>
        </div>
        
      </div>
    </div>
  </div>
  <script src="sign.js"></script>
</body>
</html>