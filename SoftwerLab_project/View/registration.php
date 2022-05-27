<!DOCTYPE html>
<html class="registration">
  <head>
    

    <title>Registration</title>

    <meta name='viewport' content='width=device-width, initial-scale=1.0, minimum-scale=1.0, user-scalable=yes'>



    
   
    <link rel="stylesheet" type="text/css" href="test.css" />
    

    
  </head>
  <body>
    <div class="registration-box-container">
    <div class="registration-box">
      <div class="registration-box-heading">
        Registration

      </div>
      <div class="registration-box-content">

<div class="login">
  <form method="post" action="../controller/registrationAll.php" enctype="multipart/form-data">
    <input type='hidden' name="" value='' />
    <input type="hidden" name="next" value="" />
    <div class="pad-block">
      <div class="input-label">Name</div>
      <input id="id_name" type="text" name="name" maxlength="75">
    </div>
	<div class="pad-block">
      <div class="input-label">Email</div>
      <input id="id_email" type="text" name="email" maxlength="75">
    </div>
	<div class="pad-block">
      <div class="input-label">Phone</div>
      <input id="id_phone" type="text" name="phone" maxlength="75">
    </div>
    <div class="pad-block">
      <div class="input-label">Image</div>
      <input type="file" name="image">
    </div>
    <div class="pad-block">
      <div class="input-label">Type</div>
      <select name="type" id="type">
        <option value="Admin">Admin</option>
        <option value="User">User</option>
      </select>
    </div>
    <div class="pad-block">
      <div class="input-label">Password</div>
      <input type="password" name="password" id="id_password">
    </div>

    
    <div class="pad-block">
      <input type="submit" name="createUser" value="Register" />
    </div>
    
  </form>
</div>

      </div>
    </div>
    </div>
  </body>
</html>
