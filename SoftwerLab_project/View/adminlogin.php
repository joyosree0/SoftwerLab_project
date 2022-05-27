<!DOCTYPE html>
<html class="registration">
  <head>
    

    <title>Admin Login</title>

    <meta name='viewport' content='width=device-width, initial-scale=1.0, minimum-scale=1.0, user-scalable=yes'>



    
   
    <link rel="stylesheet" type="text/css" href="test.css" />
    

    
  </head>
  <body>
    <div class="registration-box-container">
    <div class="registration-box">
      <div class="registration-box-heading">
        Admin Login

      </div>
      <div class="registration-box-content">

<div class="login">
  <form method="post" action="../controller/login.php">
    <input type='hidden' name='' value='' />
    <input type="hidden" name="next" value="" />
    <div class="pad-block">
      <div class="input-label">Email</div>
      <input id="email" type="text" name="email">
    </div>
    <div class="pad-block">
      <div class="input-label">Password</div>
      <input type="password" name="password" id="id_password">
    </div>

    
    <div class="pad-block"><input type="submit" name="login" value="Log In" /></div>
    
  </form>
</div>

      </div>
    </div>
    </div>
  </body>
</html>
