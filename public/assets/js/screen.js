$(document).ready(function(){
  socket.on('refresh_screen', function(data){
    $('#name').text(data.name);
    $('#degree').text(data.degree);
    $('#majour').text(data.majour);
  });
  socket.emit('get_tmp_student');
});

