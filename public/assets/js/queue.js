// var url = 'http://localhost:8000/api'
// loadData();

// function loadData() {
//     $.ajax({
//         url: `${url}/queue`,
//         headers: {
//             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
//         },
//         success: (data) => {
//             console.log('Success', data);
//         },
//         error: (error) => {
//             console.log('Error', error);
//         }
//     });
// }

function pushToMC(data){
  socket.emit('push-to-mc', data);
}

socket.on('push-to-check', function(data){
  var table = document.getElementById('data-table');
  var newRow = table.insertRow();
  var studentIdCell = newRow.insertCell();
  var nameCell = newRow.insertCell();
  var degreeCell = newRow.insertCell();
  var majourCell = newRow.insertCell();
  var functionCell = newRow.insertCell();
  var btn = document.createElement('BUTTON');
  btn.innerHTML = "Thêm";
  btn.onclick = pushToMC(data);

  studentIdCell.innerHTML = data;
  nameCell.innerHTML = ""
  degreeCell.innerHTML = "";
  majourCell.innerHTML = "";
  functionCell.appendChild(btn);
});

