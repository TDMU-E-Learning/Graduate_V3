let selectedIndex = null;

$(document).ready( function(){
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

  var row_continue = 0;
  socket.emit("join", "mc");
  
  socket.on("continue_row", (row) => {
    if(row !== -1) {
      if(confirm("Tiếp tục dòng trước đó ?")) row_continue = row;
    }
  });

  setTimeout( async function(){
    var query = "#queueTable tbody tr:nth-child(" + (row_continue + 1).toString() + ")";
    $(query).addClass('selected');
    selectedIndex = await table.cell($('tr.selected'), 0).data();
    send_next_student();
    // set_tmp_student();
    
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

  socket.on('refresh_list_queue', async function (data) {
    if(data.messages == 'add successful' || data.messages == 'update successful'){
      await table.ajax.reload();
      await setTimeout(async () => {

        // set_tmp_student();
        
        var query = "#queueTable tbody tr:nth-child(" + (data.index_current + 1).toString() + ")";
        
        if(!$(query).hasClass('selected')) $(query).addClass('selected');
        // var indexes = await table.rows().eq( 0 ).filter( function (rowIdx) {
        //   return table.cell( rowIdx, 0 ).data() == selectedIndex ? true : false;
        // });

        // await table
        //   .rows(indexes)
        //   .nodes()
        //   .to$()
        //   .addClass('selected');

        send_next_student()
      }, 500);

      
    }
    
  });

  function send_next_student(){


    const student = {
      name: table.cell(table.$('tr.selected').index(), 0).data(),
      degree: table.cell(table.$('tr.selected').index(), 0).data(),
      majour: table.cell(table.$('tr.selected').index(), 0).data()
    }
    
    socket.emit('send_next_student', {student, index_row : $('tr.selected').index()});
  };

  
  // function set_tmp_student(){
  //   const student = {
  //     name: table.cell(table.$('tr:last-child').index(), 0).data(),
  //     degree: table.cell(table.$('tr:last-child').index(), 0).data(),
  //     majour: table.cell(table.$('tr:last-child').index(), 0).data()
  //   };
  //   console.log(student," => before")
  //   if(student.name === undefined || student.degree === undefined || student.majour === undefined) {
  //     student.name = '0';
  //     student.degree ='0';
  //     student.majour = '0';
  //   }

  //   console.log(student, " => AFTER")
  //   socket.emit('set_tmp_student', student);
  // }

});