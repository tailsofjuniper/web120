<?php include 'portal-config.php'?>

<!DOCTYPE html>
<html>
 <head>
  <title><?=$title?></title>
  <meta name="robots" content="noindex,nofollow" />
  <meta name="viewport" content="width=device-width" />
  <meta charset="utf-8" />
  <link rel="stylesheet" href="css/portal.css" />
  <link rel="stylesheet" href="css/nav.css" />
  <link rel="stylesheet" href="css/contact-form.css" />
  <link rel="stylesheet" href="css/table.css" />
  <script src="https://use.fontawesome.com/16b060aaa1.js"></script>

 </head>
    
 <body>
     <!-- Wrapper -->
    <main class="wrapper">
     <header>
        <h1><a href="index.php">
            <i class="logo fa <?=$logo?>"<?=$logo_color?>></i>Juniper's WEB120 Porthole</a>
        </h1>
     <nav>
         
<?=makeLinks($nav1)?>    
      <!--
        <li><a href="index.php" class="selected">Welcome</a></li>
        <li><a href="big/index.php">Big</a></li>
        <li><a href="contactme.php">Contact Juniper</a></li>
        <li><a href="table.php">Responsive Table</a></li>
    -->

         
      <ul class="topnav" id="myTopnav">

          
<!--
       <li><a href="index.php" class="active">Welcome</a></li>
       <li><a href="big/index.php">BIG</a></li>
       <li><a href="contact.php">Contact Juniper</a></li>
       <li><a href="table.php">Responsive Table</a></li>
-->
       <li class="icon"><a href="javascript:void(0);" onclick="myFunction()">&#9776;</a></li>
      </ul>
     </nav>
    </header>
        
<!-- Comment       -->    
    <section>
        <h2 class="pageID"><?=$PageID?></h2>    
    </section>
     

    <main class="wrapper">
     
     <img class="desktop" src="images/desktop.jpg" alt="Fallen, melting ice cream cone" />
       
     <img class="tablet" src="images/tablet.jpg" alt="glowing red cactus" />
       
     <img class="phone" src="images/phone.jpg" alt="A pile of bikes covered in snow" />
    </main>
