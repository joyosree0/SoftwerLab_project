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
        Add Book

      </div>
      <div class="registration-box-content">

<div class="login">
  <form method="post" action="../controller/addingBook.php" enctype="multipart/form-data">
    <input type='hidden' name="" value='' />
    <input type="hidden" name="next" value="" />
    <div class="pad-block">
      <div class="input-label">Book Name</div>
      <input id="name" type="text" name="name" maxlength="75">
    </div>
	<div class="pad-block">
      <div class="input-label">Writer Name</div>
      <input id="writer" type="text" name="writer" maxlength="75">
    </div>
	<div class="pad-block">
      <div class="input-label">Genra</div>
      <input id="genra" type="text" name="genra" maxlength="75">
    </div>
    <div class="pad-block">
      <div class="input-label">Book Image</div>
      <input type="file" name="image">
    </div>
    
    <div class="pad-block">
      <div class="input-label">Publisher</div>
      <input type="text" name="publisher" id="publisher">
    </div>

    <div class="pad-block">
      <div class="input-label">Date</div>
      <input type="text" name="date" id="date">
    </div>

    <div class="pad-block">
      <div class="input-label">Country</div>
      <input type="text" name="country" id="country">
    </div>

    <div class="pad-block">
      <div class="input-label">Language</div>
      <input type="text" name="language" id="language">
    </div>
    
    <div class="pad-block">
      <div class="input-label">Details</div>
      <input type="text" name="Details" id="Details">
    </div>

    

    
    <div class="pad-block">
      <input type="submit" name="adding" value="Add Book" />
    </div>
    
  </form>
</div>

      </div>
    </div>
    </div>
  </body>
</html>
