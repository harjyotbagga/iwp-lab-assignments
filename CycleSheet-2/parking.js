var n;
function userCount() {
    n = prompt("Enter number of users: ");
    var table = document.getElementById('cost-table');
    for(var i=0;i<n;i++) {
        var row = table.insertRow(i+1);
        var cell1 = row.insertCell(0);
        var cell2 = row.insertCell(1);
        var cell3 = row.insertCell(2);
        cell1.innerHTML = `${i+1}`;
        cell2.innerHTML = `<input type="text" id="user${i}-hours">`
        cell3.innerHTML = `$<span id="user${i}-cost">0</span>`
        
    }
}

function getCost() {
    for(var i=0;i<n;i++) {
        var hours = parseInt(document.getElementById(`user${i}-hours`).value);
        var cost = calculateCharges(hours);
        document.getElementById(`user${i}-cost`).textContent = cost;
    }
}
document.getElementById(`user0-hours`)

function calculateCharges(hours) {
    var charge=0;
    if (hours<=3) {
        charge=2;
    }
    else {
        charge =  Math.min(10, 2 + 0.5*(hours-3));
    }
    return charge;
}