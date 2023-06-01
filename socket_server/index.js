const app = require('express')();
const http = require('http').Server(app);
const io = require('socket.io')(http, {
    cors: {
        origin: "*",
        methods: ["GET, POST"]
    }
});

app.get('/', (req, res) => {
    res.sendFile(__dirname + '/index.html');
});

messages = [];

io.on("connection", socket => {
    console.log('Client was join this socket server');

    socket.on('show', msg => {
        socket.broadcast.emit('show', msg);
    });

    socket.on('pause-present', msg => {
        console.log(msg)
    });

    socket.on('swap-student', data => {
        
    })

    socket.on('push-to-check', (data) => {
        io.emit('push-to-check', data);
    });

    socket.on('push-to-mc', data => {
        io.emit('push-to-mc', data);
    });
});

http.listen(3000, () => {
    console.log('Listening on port *:3000');
});