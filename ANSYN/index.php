

<!DOCTYPE html>
<html lang="en">
 <head>
  <title>Juniper's WEB 120 Porthole</title>
  <meta name="robots" content="noindex,nofollow" />
  <meta name="viewport" content="width=device-width" />
  <meta charset="utf-8" />
  <link rel="stylesheet" href="css/portal.css" />
  <link rel="stylesheet" href="css/nav.css" />
  <link rel="stylesheet" href="css/contact-form.css" />
  <link rel="stylesheet" href="css/table.css" />
 </head>
    
 <body>
     <header>
     <h1>Juniper's WEB120 Porthole</h1>
     <nav>
      <ul class="topnav" id="myTopnav">
       <li><a href="index.php" class="active">Welcome</a></li>
       <li><a href="big/index.php">BIG</a></li>
       <li><a href="contact.php">Contact Joon</a></li>
       <li><a href="table.php">Responsive Table</a></li>
       <li class="icon"><a href="javascript:void(0);" onclick="myFunction()">&#9776;</a></li>
      </ul>
     </nav>
     </header>
     
     <main class="wrapper">
     <img class="desktop" src="images/desktop.jpg" alt="Fallen, melting ice cream cone" />
       
     <img class="tablet" src="images/tablet.jpg" alt="glowing red cactus" />
       
     <img class="phone" src="images/phone.jpg" alt="A pile of bikes covered in snow" />
    </main>
    <section>
       <h2 class="subheader">A little about me:</h2>     
       <p>Aspiring web developer, itinerant wordherd, surrogate kitten snuggler. This is where I geek out about database development and complain about Google. </p>
    </section>
    <aside>
        <h3>BlahBlahBlah</h3>
        <p>BlahBlahBlahBlahBlahBlahBlahBlahBlahBlahBlahBlah</p>
    </aside>

    <footer>
      <p><small>&copy; 2019 by <a href="contact.php">Contact Juniper</a>, All Rights Reserved ~ <a href="http://validator.w3.org/check/referer" target="_blank">Valid HTML</a> ~ <a href="http://jigsaw.w3.org/css-validator/check?uri=referer" target="_blank">Valid CSS</a></small></p>
    </footer>
     
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
