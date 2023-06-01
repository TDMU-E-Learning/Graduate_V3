socket.on('push-to-mc', function(data){
  var table = document.getElementById('data-table');
  var newRow = table.insertRow();
  var studentIdCell = newRow.insertCell();
  var nameCell = newRow.insertCell();
  var degreeCell = newRow.insertCell();
  var majourCell = newRow.insertCell();
  var functionCell = newRow.insertCell();

  studentIdCell.innerHTML = data;
  nameCell.innerHTML = ""
  degreeCell.innerHTML = "";
  majourCell.innerHTML = "";
});