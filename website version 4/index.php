<!DOCTYPE HTML>
<html>
<head>
<link rel="stylesheet"; type="text/css"; href="Styling.css">

    <script>
       <!--Platonics Button-->
    var website;
    
        function HomeButton() { 
    
    
    setTimeout(image1, 0);
    setTimeout(image2, 250);
    setTimeout(Change, 500);}

    function image1()
    {   var image = document.getElementById('button');
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
function bigImg(x) {
    x.style.height = "150%";
    x.style.width = "100%";
}

function normalImg(x) {
    x.style.height = "100%";
    x.style.width = "100%";
}
</script>
    
    
    
    
            <script>
function bigImgss(x) {
    x.style.height = "70%";
    x.style.width = "50%";
}

function normalImgss(x) {
    x.style.height = "33%";
    x.style.width = "33%";
}
</script>
    
    
    
    
    <style>
.podium{
position:relative
}
</style>
<script language="JavaScript1.2">

/*
Shake image script (onMouseover)- 
(c) Dynamic Drive (www.dynamicdrive.com)
For full source code, usage terms, and 100's more DHTML scripts, visit http://dynamicdrive.com
*/

//configure shake degree (where larger # equals greater shake)
var rector=3

///////DONE EDITTING///////////
var stopit=0 
var a=1

function init(which){
stopit=0
shake=which
shake.style.left=0
shake.style.top=0
}

function rattleimage(){
if ((!document.all&&!document.getElementById)||stopit==1)
return
if (a==1){
shake.style.top=parseInt(shake.style.top)+rector+"px"
}
else if (a==2){
shake.style.left=parseInt(shake.style.left)+rector+"px"
}
else if (a==3){
shake.style.top=parseInt(shake.style.top)-rector+"px"
}
else{
shake.style.left=parseInt(shake.style.left)-rector+"px"
}
if (a<4)
a++
else
a=1
setTimeout("rattleimage()",50)
}

function stoprattle(which){
stopit=1
which.style.left=0
which.style.top=0
}

</script>
    
    
      <style>
.car{
position:relative
}
</style>
<script language="JavaScript1.2">

/*
Shake image script (onMouseover)- 
(c) Dynamic Drive (www.dynamicdrive.com)
For full source code, usage terms, and 100's more DHTML scripts, visit http://dynamicdrive.com
*/

//configure shake degree (where larger # equals greater shake)
var rector=3

///////DONE EDITTING///////////
var stopit=0 
var a=1

function init(which){
stopit=0
shake=which
shake.style.left=0
shake.style.top=0
}

function rattleimage(){
if ((!document.all&&!document.getElementById)||stopit==1)
return
if (a==1){
shake.style.top=parseInt(shake.style.top)+rector+"px"
}
else if (a==2){
shake.style.left=parseInt(shake.style.left)+rector+"px"
}
else if (a==3){
shake.style.top=parseInt(shake.style.top)-rector+"px"
}
else{
shake.style.left=parseInt(shake.style.left)-rector+"px"
}
if (a<4)
a++
else
a=1
setTimeout("rattleimage()",50)
}

function stoprattle(which){
stopit=1
which.style.left=0
which.style.top=0
}

</script>
    
    
    
    
    
    
    
    
    
    
    
    
</head>

<body>
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
    
        <div class="index">
            <div class="cars">
                <img class="car" onMouseover="init(this);rattleimage()" onMouseout="stoprattle(this);top.focus()" src="auto.png">
                <img class="car"onMouseover="init(this);rattleimage()" onMouseout="stoprattle(this);top.focus()" src="auto.png">
                <img class="car"onMouseover="init(this);rattleimage()" onMouseout="stoprattle(this);top.focus()" src="auto.png">
                <img class="car"onMouseover="init(this);rattleimage()" onMouseout="stoprattle(this);top.focus()" src="auto.png">
                <img class="car"onMouseover="init(this);rattleimage()" onMouseout="stoprattle(this);top.focus()" src="auto.png">
                <img class="car"onMouseover="init(this);rattleimage()" onMouseout="stoprattle(this);top.focus()" src="auto.png">
                <img class="car"onMouseover="init(this);rattleimage()" onMouseout="stoprattle(this);top.focus()" src="auto.png">
                <img class="car"onMouseover="init(this);rattleimage()" onMouseout="stoprattle(this);top.focus()" src="auto.png">
                <img class="car"onMouseover="init(this);rattleimage()" onMouseout="stoprattle(this);top.focus()" src="auto.png">
                <img class="car"onMouseover="init(this);rattleimage()" onMouseout="stoprattle(this);top.focus()" src="auto.png">
                <img class="car"onMouseover="init(this);rattleimage()" onMouseout="stoprattle(this);top.focus()" src="auto.png">
                <img class="car"onMouseover="init(this);rattleimage()" onMouseout="stoprattle(this);top.focus()" src="auto.png">
                <img class="car"onMouseover="init(this);rattleimage()" onMouseout="stoprattle(this);top.focus()" src="auto.png">
                <img class="car"onMouseover="init(this);rattleimage()" onMouseout="stoprattle(this);top.focus()" src="auto.png">
                <img class="car"onMouseover="init(this);rattleimage()" onMouseout="stoprattle(this);top.focus()" src="auto.png">
                <img class="car"onMouseover="init(this);rattleimage()" onMouseout="stoprattle(this);top.focus()" src="auto.png">
                <img class="car"onMouseover="init(this);rattleimage()" onMouseout="stoprattle(this);top.focus()" src="auto.png">
                <img class="car"onMouseover="init(this);rattleimage()" onMouseout="stoprattle(this);top.focus()" src="auto.png">
            </div>
            <div class="fences">
            <img class="fence" src="Fence.png">
                 <img class="fence" src="Fence.png">
                 <img class="fence" src="Fence.png">
                 <img class="fence" src="Fence.png">             
            </div>
            <div class="ticketbooths">
                <img class="ticketbooth" src=Ticket_Booth.PNG>
                <img class="ticketbooth" src=Ticket_Booth.PNG>
            </div>
            <div class="ticketbanners">
                <img class="ticketbanner" src="ticket_banner_icon.png">
                <img class="ticketbanner1" src="ticket_banner_icon.png">
            </div>
            <div class="lakes">
                <img class="lake" onmouseover="bigImg(this)" onmouseout="normalImg(this)" src="mountain_mountain-lake-1.png">
            </div>
            <div class="tents">
                <img class="tent" onmouseover="bigImgss(this)" onmouseout="normalImgss(this)" src="tent-311073_960_720.png">
                <img class="tent" onmouseover="bigImgss(this)" onmouseout="normalImgss(this)" src="tent-hi.png">
                <img class="tent" onmouseover="bigImgss(this)" onmouseout="normalImgss(this)" src="tent-311073_960_720.png">
                <img class="tent" onmouseover="bigImgss(this)" onmouseout="normalImgss(this)" src="tent-hi.png">
                <img class="tent" onmouseover="bigImgss(this)" onmouseout="normalImgss(this)" src="camping_tent_T.png">
                <img class="tent" onmouseover="bigImgss(this)" onmouseout="normalImgss(this)" src="tent-hi.png">
               
                <img class="tent"onmouseover="bigImgss(this)" onmouseout="normalImgss(this)" src="tent-hi.png">
                <img class="tent"onmouseover="bigImgss(this)" onmouseout="normalImgss(this)" src="tent-161442_960_720.png">
                
            </div>
        <div class="shopbooths">
                <img class="shopbooth" src=Ticket_Booth.PNG>
                <img class="shopbooth" src=Ticket_Booth.PNG>
                <img class="shopbooth" src=Ticket_Booth.PNG>

            </div>
            <div class="banners">
                <img class="drinkbanner" src="drinks_banner_icon.png">
                <img class="foodbanner" src="Food_banner_icon.png">
                <img class="gearbanner" src="gear_banner_icon.png">
            </div>
            
    <div class="podia">
        <img class="podium" onMouseover="init(this);rattleimage()" onMouseout="stoprattle(this);top.focus()" onClick="top.focus()" src="Mainstage.png">
       
          </div>
        <div class="singers">
            <img class="singers" src="band.png">
            </div>
            
            
            
            
             <div class="friends">
        <img class="friends" src="group.png">
       
        </div>
        
        <div class="friendss">
        <img class="friendss" src="group.png">
       <img class="friendss" src="group.png">  
        </div>
        
        
        
        
  
    <div class="index">
            <div class="beers a">
                <img class="beer" src="fattymattybrewing-Fatty-Matty-Brewing-Beer-Mug-Icon.png">
                <img class="beer" src="fattymattybrewing-Fatty-Matty-Brewing-Beer-Mug-Icon.png">   
            </div>
                <div class="beers b">
                <img class="beer" src="fattymattybrewing-Fatty-Matty-Brewing-Beer-Mug-Icon.png">
                <img class="beer" src="fattymattybrewing-Fatty-Matty-Brewing-Beer-Mug-Icon.png">   
            </div>
    <div class="beers c">
                <img class="beer" src="fattymattybrewing-Fatty-Matty-Brewing-Beer-Mug-Icon.png">
                <img class="beer" src="fattymattybrewing-Fatty-Matty-Brewing-Beer-Mug-Icon.png">   
            </div>
    <div class="beers d">
                <img class="beer" src="fattymattybrewing-Fatty-Matty-Brewing-Beer-Mug-Icon.png">
                <img class="beer" src="fattymattybrewing-Fatty-Matty-Brewing-Beer-Mug-Icon.png">   
            </div>
    <div class="beers e">
                <img class="beer" src="fattymattybrewing-Fatty-Matty-Brewing-Beer-Mug-Icon.png">
                <img class="beer" src="fattymattybrewing-Fatty-Matty-Brewing-Beer-Mug-Icon.png">   
            </div>
    <div class="beers f">
                <img class="beer" src="fattymattybrewing-Fatty-Matty-Brewing-Beer-Mug-Icon.png">
                <img class="beer" src="fattymattybrewing-Fatty-Matty-Brewing-Beer-Mug-Icon.png">   
            </div>
    <div class="beers g">
                <img class="beer" src="fattymattybrewing-Fatty-Matty-Brewing-Beer-Mug-Icon.png">
                <img class="beer" src="fattymattybrewing-Fatty-Matty-Brewing-Beer-Mug-Icon.png">   
            </div>
    <div class="beers h">
                <img class="beer" src="fattymattybrewing-Fatty-Matty-Brewing-Beer-Mug-Icon.png">
                <img class="beer" src="fattymattybrewing-Fatty-Matty-Brewing-Beer-Mug-Icon.png">   
            </div>
    <div class="beers i">
                <img class="beer" src="fattymattybrewing-Fatty-Matty-Brewing-Beer-Mug-Icon.png">
                <img class="beer" src="fattymattybrewing-Fatty-Matty-Brewing-Beer-Mug-Icon.png">   
            </div>
    
            <div class="tables a">
                <img class="table" src="table-xxl.png">
                <img class="table" src="table-xxl.png">
                <img class="table" src="table-xxl.png">
            </div>
    
                <div class="tables b">
                <img class="table" src="table-xxl.png">
                <img class="table" src="table-xxl.png">
                <img class="table" src="table-xxl.png">
            </div>
                    <div class="tables c">
                <img class="table" src="table-xxl.png">
                <img class="table" src="table-xxl.png">
                <img class="table" src="table-xxl.png">
            </div>
        
        
        <div class="ppls">
<img class="ppls" src="pplss.png">
        
        
        </div>
        
        
        <div class="stageppl">
        <img class="stageppl" src="mob2.png">
        
        </div>
        
         <div class="stageppl2">
        <img class="stageppl2" src="mob2.png">
        
        </div>
        
        
        
        
        <div class="que">
                
            <img class="que" src="man.png">
            <img class="ques" src="woman.png">
            <img class="que" src="man2.png">
        </div>
        
   
        
        
        
        
        
        
            <div class="grass"><img class="grass" src="Grass_border2.png"> <br>  </div>
           
    </div>
    </div>
       <div class="footers">
           
           
           <a href="https://twitter.com/?lang=en"><img class="footerss" src="Twitter"></a>
           <a href="https://www.facebook.com/"><img class="footers" src="facebook-icon.png"></a>
           <a href="https://www.instagram.com/"><img class="footers" src="instagram.png"></a>
    </div>

</body>
</html>

    
