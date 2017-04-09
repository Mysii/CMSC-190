function calculateTubos()
{
    var p = document.getElementById("principalLoan").value;
    var i = p * 0.10;
    var t = Number(p) + Number(i);  
    document.getElementById("tubos").value = t; 
}

function calculateDueDate()
{
	var d = document.getElementById('date').value;

    var date = new Date(d);
    var duedate = new Date(date);

    duedate.setDate(duedate.getDate() + 30);

    var dd = duedate.getDate();
    var mm = duedate.getMonth() + 1;
    var y = duedate.getFullYear();

    var formattedDate = mm + '/' + dd + '/' + y;
    document.getElementById('dueDate').value = formattedDate;
}
