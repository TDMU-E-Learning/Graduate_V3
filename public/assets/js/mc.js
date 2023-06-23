let selectedIndex = null;

$(document).ready(function(){
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
    "dom": 't',
    lengthMenu: [
      [-1],
      ['Tất cả']
    ],
  });

  setTimeout(function(){
    $('#queueTable tbody tr:first').addClass('selected');
    selectedIndex = table.cell(0, 0).data();
    send_next_student();
  }, 1000);

  $('#queueTable tbody').on('click', 'tr', function(){
    if(!$(this).hasClass('selected')){
      table.$('tr.selected').removeClass('selected');
      $(this).addClass('selected');
      selectedIndex = table.cell($(this).index(), 0).data();
      send_next_student();
    }
  });

  $(document).keydown(function(e){
    if(e.keyCode == 32 || e.keyCode == 13 || e.keyCode == 40){
      var selectedRow = $('#queueTable tbody tr.selected');
      var nextRow = selectedRow.next('tr');

      if(nextRow.length){
        table.$('tr.selected').removeClass('selected');
        nextRow.addClass('selected');
        selectedIndex = table.cell(nextRow.index(), 0).data();
        send_next_student();
      }
    }

    if(e.keyCode == 38){
      var selectedRow = $('#queueTable tbody tr.selected');
      var preRow = selectedRow.prev('tr');

      if(preRow.length){
        table.$('tr.selected').removeClass('selected');
        preRow.addClass('selected');
        selectedIndex = table.cell(preRow.index(), 0).data();
        send_next_student();
      }
    }
  });

  socket.on('refresh_list_queue', function (data) {
    if(data == 'add successful' || data == 'update successful'){
      table.ajax.reload();
      setTimeout(() => {
        var indexes = table.rows().eq( 0 ).filter( function (rowIdx) {
          return table.cell( rowIdx, 0 ).data() == selectedIndex ? true : false;
        });
        table
          .rows(indexes)
          .nodes()
          .to$()
          .addClass('selected');
      }, 500);
    }
  });

  function send_next_student(){
    const student = {
      name: table.cell(table.$('tr.selected').index(), 0).data(),
      degree: table.cell(table.$('tr.selected').index(), 0).data(),
      majour: table.cell(table.$('tr.selected').index(), 0).data()
    }
    socket.emit('send_next_student', student);
  }
});