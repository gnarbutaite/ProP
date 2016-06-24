var numberOfTickets;
var totalPrice = 0;



function addFields(nrOfFields) {
    numberOfTickets = numberOfFields;
    var div = document.createElement('div');

    div.className = 'singleTicket';

    div.innerHTML = '<input type="checkbox" class="day1" onchange="ticketPrice(this)"><label>with overnight staying</label><br>\
        <input type="checkbox" class="day2" onchange="ticketPrice(this)"><label>without overnight staying</label><br>\
        <input type="checkbox" class="day3" onchange="ticketPrice(this)"><label>camp spot per person</label>';    
    
     document.getElementById('1').appendChild(div);
}

