<html>
   
   <head>
      <title>Anonymous Message</title>
      <link rel="stylesheet" type="text/css" href="css/message.css">
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
   </head>
   
   <body>
      <!-- navigation bar -->
<?php include 'navigationbar.php'  ?>
      
     
<div id="mainBody">
<div class="container">
<div class="row">
<div class="span4">
      <center><img class="prof" src="images/ano.png" alt="image" ></center>
      <h4 class="title"><center><strong>Send me a message ANONYMOUSLY</strong></center></h4>  
      <form action="controller/myfunction.php?action=insertmsg" id="main-contact-form" class="form-horizontal" name="contact-form" method="post"><center>
          <div class="control-group">
            <h1 class="title">Code Name:</h1>
            <input type="text" name="codename"  class="ano" required=""/>
          </div>
          <div class="control-group">
            <h1 class="title">Message:</h1>
            <textarea rows="3" name="msg" id="msg" class="message input-xlarge" required=""></textarea>
          </div>
            <button name="submit" class="btn btn-large" type="submit">Send Message</button>
            </center>
      </form>
</div>
</div>
</div>
</div>
   </body>
</html>