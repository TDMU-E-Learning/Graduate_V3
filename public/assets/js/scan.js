
socket.on('push-to-check', function(data){
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
  $('#studentId-error').css('display','none');
});

socket.on('push-to-check-error', (error) => {
  $('#studentId-error').css('display','block');
})
$(document).ready(function(){
  $('#btnSubmit').on('click', function(){
    let studentId = document.getElementById('txtStudentId').value;
    socket.emit('push-to-check', studentId);
    document.getElementById('txtStudentId').value = "";
  });
});