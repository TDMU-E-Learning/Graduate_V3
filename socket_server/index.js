require('dotenv').config();
const app = require('express')();
const http = require('http').Server(app);
const axios = require('axios');
const io = require('socket.io')(http, {
    cors: {
        origin: "*",
        methods: ["GET, POST"]
    }
});

app.get('/', (req, res) => {
    res.sendFile(__dirname + '/index.html');
});

const api = `${process.env.APP_URL}:${process.env.APP_PORT}/api/find`;
messages = [];

io.on('connection', socket => {
    console.log('Client was join this socket server');

    socket.on('show', msg => {
        socket.broadcast.emit('show', msg);
    });

    socket.on('pause-present', msg => {
        console.log(msg)
    });

    socket.on('swap-student', data => {

    });

    socket.on('push-to-check', (data) => {
        axios.post(api, { student_id: data })
            .then(response => {
                const student = {
                    student_id: response.data.student[0].student_id,
                    name: response.data.student[0].name,
                    degree: response.data.student[0].degree,
                    majour: response.data.student[0].majour
                };
                io.emit('push-to-check', student);
            })
            .catch(error => {
                io.emit('push-to-check-error', error);
                console.error(error);
            });
    });

    socket.on('push-to-mc', data => {
        socket.broadcast.emit('push-to-mc', data);
    });
});

http.listen(3000, () => {
    console.log('Listening on port *:3000');
});