$(document).ready(function () {
  $('#btnSubmit').on('click', function () {
    let studentId = document.getElementById('txtStudentId').value;
    socket.emit('send_student_id', studentId);
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

  var table = $('#queueTable').DataTable({
    ajax: `${app_url}/api/show_list_queue`,
    columns:[
      {data: 'student_id'},
      {data: 'name'},
      {data: 'degree'},
      {data: 'majour'},
      {data: 'time_at'}
    ],
    order: [[4, 'asc']],
    "dom": '<"#length"lr>fti<"#paging"p>',
    lengthMenu: [
      [-1, 10, 25, 50],
      ['Tất cả', '10', '25', '50']
    ],
    buttons: [
      'pageLength'
    ]
  });

  socket.on('refresh_list_queue', function (data) {
    $('#div-message').show();
    if(data == 'add successful' || data == 'update successful'){
      table.ajax.reload();
      if(data == 'add successful'){
        $('#message').text('Thêm thành công').css({'color': 'green'});
      }
      else{
        $('#message').text('Cập nhật thành công').css({'color': 'blue'});
      }
    }
    if(data == 'dont exists'){
      $('#message').text('Không tìm thấy mã này').css({'color': 'red'});
    }
  });

  // setInterval( function () {
  //   table.ajax.reload();
  // }, 5000 );
});