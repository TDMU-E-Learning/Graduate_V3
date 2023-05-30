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

socket.on('push-to-check', function(data){
    var table = document.getElementById('data-table');
    var newRow = table.insertRow();
    var studentIdCell = newRow.insertCell();
    // var nameCell = newRow.insertCell();
    // var degreeCell = newRow.insertCell();
    // var majourCell = newRow.insertCell();
  
    studentIdCell.innerHTML = data;
    // nameCell.innerHTML = data['name'];
    // degreeCell.innerHTML = data['degree'];
    // majourCell.innerHTML = data['majour'];
  });