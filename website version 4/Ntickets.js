var numberOfTickets;
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
        

        var with1label = document.createElement("label");
        with1label.innerHTML = "  with overnight staying";
        var withoutlabel = document.createElement("label");
        withoutlabel.innerHTML = "  without overnight staying <br>";
        var firstNamebox = document.createElement("text");
        var lastnamebox = document.createElement("text");
         var textboxes = document.createElement('div');
        textboxes.className = "textbox";
        
        var with1 = document.createElement("input");
        with1.type = "checkbox";
        with1.checked = false;
        with1.name="type";
        with1.className = "with1";
        with1.addEventListener('click',function(){
            ticketPrice(this);
        })
        
        var without = document.createElement("input");
        without.type = "checkbox";
        without.checked = false;
        without.name="type";
        without.className = "without";
        without.addEventListener('click',function(){
            ticketPrice2(this);
        })
        
        
        var firstname = document.createElement("input");
        firstname.type= "text";
        firstname.className="textbox";
        firstname.placeholder="First Name";

          var lastname = document.createElement("input");
        lastname.type= "text";
        lastname.className="textbox";
        lastname.placeholder="Last Name";
        
        
        var priceBox = document.createElement('div');
        priceBox.className = "priceBox";
        
        var priceLabel = document.createElement('label');
        priceLabel.innerHTML = 'Price: \u20AC 0.00';
        priceLabel.className="priceLabel";
        priceBox.appendChild(priceLabel);
        
        var line = document.createElement("HR");
        
        
        
        ticketDiv.appendChild(ticketLabel);
        ticketDiv.appendChild(with1);
        ticketDiv.appendChild(with1label);
        ticketDiv.appendChild(without);
        ticketDiv.appendChild(withoutlabel);
        ticketDiv.appendChild(textboxes);
     textboxes.appendChild(firstNamebox);
        textboxes.appendChild(firstname);
        textboxes.appendChild(lastname);
        textboxes.appendChild(lastnamebox);
        
        ticketDiv.appendChild(priceBox);
        ticketDiv.appendChild(line);
        container.appendChild(ticketDiv);
        
       
    }; 
}


function ticketPrice(clickedcheckbox){
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
        if(singleTicket.childNodes[i].className == "with1"){
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


function ticketPrice2(clickedcheckbox){
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
        if(singleTicket.childNodes[i].className == "without"){
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


























function validateForm(firstName,lastName,phone,email,password){
    var firstNameValid = /^[A-z ]+$/.test(firstName);
    var lastNameValid = /^[A-z ]+$/.test(lastName);
    var phoneValid = /(^\+[0-9]{2}|^\+[0-9]{2}\(0\)|^\(\+[0-9]{2}\)\(0\)|^00[0-9]{2}|^0)([0-9]{9}$|[0-9\-\s]{10}$)/.test(phone);
    var emailValid = /^[-a-z0-9~!$%^&*_=+}{\'?]+(\.[-a-z0-9~!$%^&*_=+}{\'?]+)*@([a-z0-9_][-a-z0-9_]*(\.[-a-z0-9_]+)*\.(aero|arpa|biz|com|coop|edu|gov|info|int|mil|museum|name|net|org|pro|travel|mobi|[a-z][a-z])|([0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}))(:[0-9]{1,5})?$/i.test(email);
    var passwordValid = /^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$/.test(password);
    
    if(!firstNameValid){
        alert("Enter a valid First name");
        return false;
    }else if(!lastNameValid){
        alert("Enter a valid Last name");
        return false;
    }else if(!phoneValid){
        alert("Enter a valid phone");
        return false;
    }
    else if(!emailValid){
        alert("Enter a valid email");
        return false;
    }else if(!passwordValid){
        alert("Password must contain minimum 8 characters at least 1 letter and 1 number")
    }else{
        return true;
    }
}



function buyTickets(){
    
    var firstName = document.getElementsByName("firstName")[0].value;
    var lastName = document.getElementsByName("lastName")[0].value;
    var email = document.getElementsByName("email")[0].value;
    var phone = document.getElementsByName("phone")[0].value;
    var password = document.getElementsByName("password")[0].value;
    var tickets = [];
    
    var with1 = document.getElementsByClassName("with1");
    var without = document.getElementsByClassName("without");
   
    
    for (var i = 0; i < numberOfTickets; i++) {
        var singleTicket = [];
        singleTicket[0] = with1[i].checked;
        singleTicket[1] = without[i].checked;
       
        tickets.push(singleTicket);
    }
    if(validateForm(firstName,lastName,phone,email,password)){
        $.ajax({
           url:"sign-up.php",
           type:"POST",
           data:{
                firstName : firstName,
                lastName : lastName,
                email : email,
                phone: phone,
                password: password,
                tickets: JSON.stringify(tickets),
                nrtickets: numberOfTickets
           },
           success: function(response){
               alert("Posted");
           },
           error: function (error) {
               alert("Error");
           }

        }); 
    }
   
}

function ticketLinking(){
    var firstName = document.getElementsByName("firstName")[0].value;
    var lastName = document.getElementsByName("lastName")[0].value;
    var email = document.getElementsByName("email")[0].value;
    var phone = document.getElementsByName("phone")[0].value;
    var password = document.getElementsByName("password")[0].value;
    var ticketnr = document.getElementsByName("ticketnr")[0].value;
    
    $.ajax({
        url: "linking.php",
        type: "POST",
        data:{
            firstName : firstName,
            lastName : lastName,
            email : email,
            phone: phone,
            password: password,
            ticketnr: ticketnr
        },
        success: function (data, textStatus, jqXHR) {
            alert("Success");
        },
        error: function (jqXHR, textStatus, errorThrown) {
            alert("Error");
        }
        
    });
    
}

