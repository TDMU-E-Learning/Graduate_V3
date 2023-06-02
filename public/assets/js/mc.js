socket.on('push-to-mc', function(data){
  var table = document.getElementById('data-table');
  var newRow = table.insertRow();
  var studentIdCell = newRow.insertCell();
  var nameCell = newRow.insertCell();
  var degreeCell = newRow.insertCell();
  var majourCell = newRow.insertCell();

  studentIdCell.innerHTML = data['student_id'];
  nameCell.innerHTML = data['name'];
  degreeCell.innerHTML = data['degree'];
  majourCell.innerHTML = data['majour'];
});