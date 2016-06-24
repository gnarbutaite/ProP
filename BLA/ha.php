<?php
require ('buy.php');
?>
<!DOCTYPE HTML>
<html>
<head>
<link rel="stylesheet"; type="text/css"; href="Styling.css">

    
    
    <script>
       <!--Platonics Button-->
    var website;
    
    function HomeButton() { 
    
    
    setTimeout(image1, 0);
    setTimeout(image2, 750);
    setTimeout(Change, 1000);}

    function image1()
    { 
       var image = document.getElementById('button');
       image.src = "Button_pressed_001.png" 
    }
    
    function image2()
    {   var image = document.getElementById('button');
        image.src="Button_unpressed.png"
    }
    
   function Change()
    {
        window.location.href = 'index.php';
    }
           <!--Platonics Button-->

    </script>
       
      
<script>
    
    
function myFunction() {

  
    var txt = "Total Price: 55 \u20AC";

    


    var i;
   // for (i = 0; i < type.length; i++) 
    if(document.getElementById('foo').checked)
    {
     txt = "Total Price : 90 \u20AC";
    }
    
    document.getElementById("priceBox").innerHTML = txt;
    
  
}
</script>
    
</head>

<body class="izbor">
          <div id="top">
            
            </div>
            <div id="menu">
                    <ul ID="menu">
                        <li><a href="Artists.php"><b>Artists</b></a></li>
                        <img class="left" src="GreyMenuBorder.png">
                        <li><a href="Place.php"><b>Place</b></a></li>
                        <img class="left" src="GreyMenuBorder.png">
                        <li><a href="register.php"><b>Tickets</b></a></li>
                
                    </ul>
                           <!--Platonics Button-->
    
                <img id="button" onclick="HomeButton('index.php')"  src="Button_unpressed.png">
                       <!--Platonics Button-->

                    <ul ID="menu2">
                        <li><a href="about.php"><b>About</b></a></li>
                        <img class="right" src="GreyMenuBorder.png">
                        <li><a href="propGallery.php"><b>Gallery</b></a></li>
                        <img class="right" src="GreyMenuBorder.png">
                        <li id="news"><a href="news.php"><b>News</b></a></li>
                        <li id="bla"><a href = "logOut.php"><b>logout</b></a></li>
                    </ul>
            </div>
    
       

    <p>Hello <?</p>

<div class="pageWidth">
<form action="buy.php" method="post" accept-charset="UTF-8" id="ticketform" >
    
  <fieldset class="ticketsfields">
      <h2 class="form">Your ticket:</h2><br><br>
    
    First name:<br>
    <input type="text" name="firstname" placeholder="firstName">
    <br>
    Last name:<br>
    <input type="text" name="lastname" id="box" placeholder="lastName">
    <br>
    Email:<br>
    <input type="text" name="email" id="box"  placeholder="email">
    <br><br>
 
          <input type="checkbox" id="foo" name="type" onchange="myFunction()"/> With camping spot<br>
 
          <br><br>

   
   
        
    <br>
<label id="priceBox" class="priceBox"><br><br>Total price: 55 € <br><br></label>





  </fieldset>
   <input id="button" class="continue" type="submit" name="submit" value="Buy tickets" >
        
</form>
    </div>
</body>
</html>
    
    
    
    
    
    
















