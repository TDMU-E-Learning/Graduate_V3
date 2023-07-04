

$(document).ready(function () {
  $('#btnSubmit').on('click', function () {
    let studentId = $('#txtStudentId').val();
    socket.emit('send_student_id', studentId);
    $('#txtStudentId').val("");
    console.log(studentId);
  });

  $('#txtStudentId').keydown(function (e) {
    if (e.keyCode == 13) {
      let studentId = $('#txtStudentId').val();
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
    if(data.messages == 'add successful' || data.messages == 'update successful'){
      table.ajax.reload();
      if(data.messages == 'add successful'){
        $('#message').text('Thêm thành công').css({'color': 'green'});
      }
      else{
        $('#message').text('Cập nhật thành công').css({'color': 'blue'});
      }
    }
    if(data.messages == 'dont exists'){
      $('#message').text('Không tìm thấy mã này').css({'color': 'red'});
    }
    
  });

  // setInterval( function () {
  //   table.ajax.reload();
  // }, 5000 );
});