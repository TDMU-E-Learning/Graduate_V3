
socket.on('push-to-check', function (data) {
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
  $('#studentId-error').css('display', 'none');
});

socket.on('push-to-check-error', (error) => {
  $('#studentId-error').css('display', 'block');
})
$(document).ready(function () {
  $('#btnSubmit').on('click', function () {
    // const apiURL = import.meta.env.SOCKET_URL;
    // console.log(apiURL);
    let studentId = document.getElementById('txtStudentId').value;
    socket.emit('push-to-check', studentId);
    document.getElementById('txtStudentId').value = "";
  });

  $('#txtStudentId').keydown(function (e) {
    if (e.keyCode == 13) {
      let studentId = document.getElementById('txtStudentId').value;
      console.log(studentId)
      if (studentId) {
        $('#btnSubmit').click();
      }
    }
  });
});