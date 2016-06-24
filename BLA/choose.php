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
    <script src="Ntickets.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
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
                    </ul>
            </div>
    
        <div class="pageWidth">
    
         
         <h2>Tickets</h2><br><br>
    <form id="ticketform" method="post" action>
         <fieldset class="ticketsfields">
         Please select the number of tickets you want to order:&nbsp;
        
        <select id="ticketselector" onchange="addFields(this.value)" name="nrtickets">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
        </select>
         <br><br>s
        <div class="ticketContainer"> 
            <div class="singleTicket">
                <p> Ticket 1:</p>
            <input type="checkbox" class="day1" name="type" onchange="ticketPrice(this)" ><label>with overnight staying</label>
            <input type="checkbox" class="day2" name="type" onchange="ticketPrice(this)" ><label>without overnight staying</label>
            <div class="priceBox">
            <label class="priceLabel">Price: 0.00</label>
            
            </div>
        
                  <input type="text" name="firstname" placeholder="First Name">
            <input type="text" name="lastname" placeholder="Last Name">
            <input type="text" name="email" placeholder="email">
               
                
                    <hr>
    <br>        </div>
          
         </div>
        
    
<label class="totalPrice"><br><br>Total price:  0.00 <br><br></label>
         <br>
         
        
         
        
            </fieldset>
             <input id="button" class="continue" type="button" name="submit" value="Buy tickets" onclick="buyTickets()">

    
                <br>
            </form>
                </div>
       
    </body>
</html>















