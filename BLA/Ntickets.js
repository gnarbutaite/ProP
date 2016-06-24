/*var numberOfTickets;
var totalPrice = 0;
function addFields(numberOfFields){
    totalPrice = 0;
    var totalPriceLabel = document.getElementsByClassName("totalPrice")[0];
    totalPriceLabel.innerHTML = "Total price: \u20AC " + totalPrice.toFixed(2);
    
    numberOfTickets = numberOfFields;
    var container = document.getElementsByClassName("ticketContainer")[0];
    while (container.hasChildNodes()) {
        container.removeChild(container.lastChild);
    }
    for (var i = 1; i <= numberOfFields; i++) {
        
        var ticketDiv = document.createElement('div');
        ticketDiv.className = "singleTicket";
        ticketDiv.id = i;
        
       
        
        var ticketLabel = document.createElement("label");
        if(i==1){
            ticketLabel.innerHTML = "Ticket 1 ";
        }else{
            ticketLabel.innerHTML = "Ticket "+i;
        }
        

        var day1label = document.createElement("label");
        day1label.innerHTML = "  with overnight staying";
        var day2label = document.createElement("label");
        day2label.innerHTML = "  without overnight staying <br>";
        var firstNamebox = document.createElement("text");
        var lastnamebox = document.createElement("text");
        var emailbox=documen.createElement("text");
       
         var textboxes = document.createElement('div');
        textboxes.className = "textbox";
        
        var day1 = document.createElement("input");
        day1.type = "checkbox";
        day1.checked = false;
        day1.name="type";
        day1.className = "day1";
        day1.addEventListener('click',function(){
            ticketPrice(this);
        })
        
        var day2 = document.createElement("input");
        day2.type = "checkbox";
        day2.checked = false;
        day2.name="type";
        day2.className = "day2";
        day2.addEventListener('click',function(){
            ticketPrice(this);
        })
        
        
        var firstname = document.createElement("input");
        firstname.type= "text";
        firstname.className="textbox";
        firstname.placeholder="First Name";

          var lastname = document.createElement("input");
        lastname.type= "text";
        lastname.className="textbox";
        lastname.placeholder="Last Name";
        
             var email = document.createElement("input");
        email.type= "text";
        email.className="textbox";
        email.placeholder="email";
        
        var priceBox = document.createElement('div');
        priceBox.className = "priceBox";
        
        var priceLabel = document.createElement('label');
        priceLabel.innerHTML = 'Price: \u20AC 0.00';
        priceLabel.className="priceLabel";
        priceBox.appendChild(priceLabel);
        
        var line = document.createElement("HR");
        
        
        
        ticketDiv.appendChild(ticketLabel);
        ticketDiv.appendChild(day1);
        ticketDiv.appendChild(day1label);
        ticketDiv.appendChild(day2);
        ticketDiv.appendChild(day2label);
        ticketDiv.appendChild(textboxes);
     textboxes.appendChild(firstNamebox);
        textboxes.appendChild(firstname);
        textboxes.appendChild(lastname);
        textboxes.appendChild(lastnamebox);
       
        textboxes.appendChild(emailbox);
        
        ticketDiv.appendChild(priceBox);
        ticketDiv.appendChild(line);
        container.appendChild(ticketDiv);
        
       
    }; 
}

function ticketPrice(clickedcheckbox){
    if(clickedcheckbox.checked==true){
        totalPrice+=90;
    }else{
        totalPrice-=90;
    }
    var multiplier=0;
    var singleTicket = clickedcheckbox.parentNode;
    for (var i = 0; i < singleTicket.childNodes.length; i++) {
        if(singleTicket.childNodes[i].className == 'priceBox'){
            //alert("should be removed")
        }
        if(singleTicket.childNodes[i].className == "day1"){
            if(singleTicket.childNodes[i].checked==true){
                multiplier++;
            }
        }
    }
    var ticketCost = 90 * multiplier;
    
    var priceBox = singleTicket.getElementsByClassName("priceBox")[0];
    var priceLabel = singleTicket.getElementsByClassName("priceLabel")[0];
    priceLabel.innerHTML = 'Price: \u20AC ' + ticketCost.toFixed(2);
    var totalPriceLabel = document.getElementsByClassName("totalPrice")[0];
    totalPriceLabel.innerHTML = "Total price: \u20AC " + totalPrice.toFixed(2);
}


function ticketPrice2(clickedcheckbox){
    if(clickedcheckbox.checked==true){
        totalPrice+=55;
    }else{
        totalPrice-=55;
    }
    var multiplier=0;
    var singleTicket = clickedcheckbox.parentNode;
    for (var i = 0; i < singleTicket.childNodes.length; i++) {
        if(singleTicket.childNodes[i].className == 'priceBox'){
            //alert("should be removed")
        }
        if(singleTicket.childNodes[i].className == "day2"){
            if(singleTicket.childNodes[i].checked==true){
                multiplier++;
            }
        }
    }
    var ticketCost = 55 * multiplier;
    
    var priceBox = singleTicket.getElementsByClassName("priceBox")[0];
    var priceLabel = singleTicket.getElementsByClassName("priceLabel")[0];
    priceLabel.innerHTML = 'Price: \u20AC ' + ticketCost.toFixed(2);
    var totalPriceLabel = document.getElementsByClassName("totalPrice")[0];
    totalPriceLabel.innerHTML = "Total price: \u20AC " + totalPrice.toFixed(2);
}









//new****************************************



function buyTickets(){
	alert("kur1");
    var firstName = document.getElementsByName("firstname")[].value;
    var lastName = document.getElementsByName("lastname")[].value;
    var email = document.getElementsByName("email")[].value;
	
    var tickets = [];
   
    var with1 = document.getElementsByClassName("with1");
    var without = document.getElementsByClassName("without");
   alert "majka ti";
    var campsiteIncluded = document.getElementsByName("with1")[].checked;
    alert(campsiteIncluded);
    /*
    for (var i = 0; i < numberOfTickets; i++) {
        var singleTicket = [];
        singleTicket[0] = with1[i].checked;
        singleTicket[1] = without[i].checked;
        
        tickets.push(singleTicket);
    }

    alert(tickets);
     */
  
alert "bravo";

        $.ajax({
           url:"bilet.php",
            contentType: "application/json; charset=utf-8",
           type:"POST",
           data:{
                FIRST_NAME : firstName,
                LAST_NAME : lastName,
                EMAIL : email,
               
                tickets: JSON.stringify(tickets),
                nrtickets: numberOfTickets,
                campsiteIncluded : campsiteIncluded
           },
           success: function(response){
               alert("Success");
           },
           error: function (error) {
               alert("pak si eba maikata");
           }

        }); 

 
}







