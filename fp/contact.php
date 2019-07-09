<!DOCTYPE html>
<html lang="en">
 <head>
  <title>MRT MIRROR</title>
  <meta name="robots" content="noindex,nofollow" />
  <meta name="viewport" content="width=device-width" />
  <meta charset="utf-8" />
  <link rel="stylesheet" href="css/portal.css" />
  <link rel="stylesheet" href="css/nav.css" />
     <link rel="stylesheet" href="css/contact-form.css" />
 </head>
 <body>
     <header>
     <h1>HRT MIRROR</h1>
     <nav class="topnav" id="myTopnav">
       <a href="index.html">Welcome</a>
       <a href="aia.html">AIA</a>
       <a href="contact.php" class="active">Contact MRT</a>
       <a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a>
     </nav>
     </header>
     
   <div class="wrapper">
     <h1>Contact MRT</h1>
       
    <?php include 'includes/simple.php';?>
	 <p class="clear-recaptcha"></p>

     <footer>
      <p><small>&copy; 2019 by <a href="contact.php">Contact MRT</a>, All Rights Reserved ~ <a href="http://validator.w3.org/check/referer" target="_blank">Valid HTML</a> ~ <a href="http://jigsaw.w3.org/css-validator/check?uri=referer" target="_blank">Valid CSS</a></small></p>
    </footer>
  </div>
     
  <!-- Toggle between adding and removing the "responsive" class to topnav when the user clicks on the icon -->
     
  <script>
    function myFunction() {
        var x = document.getElementById("myTopnav");
        if (x.className === "topnav") {
            x.className += " responsive";
        } else {
            x.className = "topnav";
        }
    }   
 </script>
     
 </body>
</html>