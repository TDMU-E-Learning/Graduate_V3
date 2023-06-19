$(document).ready(function(){
  var table = $('#queueTable').DataTable({
    ajax: 'http://127.0.0.1:8000/api/show_list_queue',
    columns:[
      {data: 'student_id'},
      {data: 'name'},
      {data: 'degree'},
      {data: 'majour'},
      {data: 'time_at'}
    ],
    order: [[4, 'asc']],
    "dom": 't',
    lengthMenu: [
      [-1],
      ['Tất cả']
    ],
  });

  setTimeout(function(){
    $('#queueTable tbody tr:first').addClass('selected');
  }, 1000);

  $('#queueTable tbody').on('click', 'tr', function(){
    if(!$(this).hasClass('selected')){
      table.$('tr.selected').removeClass('selected');
      $(this).addClass('selected');
    }
  });

  $(document).keydown(function(e){
    if(e.keyCode == 32 || e.keyCode == 13 || e.keyCode == 40){
      var selectedRow = $('#queueTable tbody tr.selected');
      var nextRow = selectedRow.next('tr');

      if(nextRow.length){
        table.$('tr.selected').removeClass('selected');
        nextRow.addClass('selected');
      }
    }

    if(e.keyCode == 38){
      var selectedRow = $('#queueTable tbody tr.selected');
      var preRow = selectedRow.prev('tr');

      if(preRow.length){
        table.$('tr.selected').removeClass('selected');
        preRow.addClass('selected');
      }
    }
  });

  socket.on('refresh_list_queue', function (data) {
    if(data == 'add successful' || data == 'update successful'){
      table.ajax.reload();
    }
  });
});