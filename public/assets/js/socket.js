var socket;
var url = window.location.href;

// initial for client
initSocket();

function showTest() {
    socket.emit('show', {name: 'Bui Van Xia'});
}

function initSocket() {
    socket = io('http://localhost:3000');

    if (url.includes('presentation')) {
        onListeningShowChannel();
    }
}

/// message: Object
/// This function receive student data from manager
function onListeningShowChannel() {
    var studentName = document.getElementById('student-name');

    socket.on('show', (msg) => {
        console.log('[SOCKET - Show]', msg);
        studentName.innerHTML = 'Hello';
    });
}