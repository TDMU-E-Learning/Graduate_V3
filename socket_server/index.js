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
});

http.listen(3000, () => {
    console.log('Listening on port *:3000');
});