    <?php include 'includes/header.php';?>
     
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

       <?php include 'includes/footer.php';?>-->

     
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
