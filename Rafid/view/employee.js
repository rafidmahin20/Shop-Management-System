function onFormSubmit(){
	var formData = readFormData();
	insertNewRecord(formData);
}

function readFormData(){
	var formData = {};
	formData["fullname"] = document.getElementById("fullname").value;
	formData["empCode"] = document.getElementById("empCode").value;
	formData["salary"] = document.getElementById("salary").value;
	formData["city"] = document.getElementById("city").value;
	return formData;
}

function insertNewRecord(data){
	var table = document.getElementById("employeeList").getElementByTagName('tbody')[0];
	var newRow = table.insertRow(table.length);
	cell1 = newRow.insertCell(0);
	cell1.innerHTML = data.fullname;
	cell2 = newRow.insertCell(1);
	cell2.innerHTML= data.empCode;
	cell3 = newRow.insertCell(2);
	cell3.innerHTML = data.salary;
	cell4 = newRow.insertCell(3);
	cell4.innerHTML = data.city;
	cell5 = newRow.insertCell(4);
	cell5.innerHTML = <a>Edit</a>
}