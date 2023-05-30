var url = 'http://localhost:8000/api'
loadData();

function loadData() {
    $.ajax({
        url: `${url}/queue`,
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        success: (data) => {
            console.log('Success', data);
        },
        error: (error) => {
            console.log('Error', error);
        }
    });
}