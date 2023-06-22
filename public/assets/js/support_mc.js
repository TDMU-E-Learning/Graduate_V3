$(document).ready(function () {

  var table = $('#queueTable').DataTable({
    ajax: 'http://127.0.0.1:8000/api/show_list_queue',
    columns:[
      {data: 'student_id'},
      {data: 'name'},
      {data: 'time_at'}
    ],
    order: [[2, 'asc']],
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
    table.ajax.reload();
  });
});