require('dotenv').config();
const app = require('express')();
const http = require('http').Server(app);
const { data } = require('autoprefixer');
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


const api = `${process.env.APP_URL}/api/`;
const reset_tmp_student = {
    name : '0',
    degree: '0',
    majour: '0',
}
let current_student = {
    name : '0',
    degree: '0',
    majour: '0',
};

let mc_join = {
    index: -1,
    page: "",
    socket_id:"",
}
messages = [];

io.on('connection', socket => {
    console.log('Client was join this socket server');

    // socket.on('push-to-check', (data) => {
    //     axios.post(api, { student_id: data })
    //         .then(response => {
    //             const student = {
    //                 student_id: response.data.student[0].student_id,
    //                 name: response.data.student[0].name,
    //                 degree: response.data.student[0].degree,
    //                 majour: response.data.student[0].majour
    //             };
    //             io.emit('push-to-check', student);
    //         })
    //         .catch(error => {
    //             io.emit('push-to-check-error', error);
    //             console.error(error);
    //         });
    // });

    // socket.on('push-to-mc', data => {
    //     socket.broadcast.emit('push-to-mc', data);
    // });

    socket.on("join", name => {
        if(name === "mc") mc_join.socket_id = socket.id;
        socket.emit('continue_row', (mc_join.index));
    });


    socket.on('get_tmp_student', () => {
        io.emit('refresh_screen', current_student);
    })

    socket.on('send_student_id', (data) => {
     
        axios.post(api + 'create_student_in_queue', { student_id: data })
            .then(response => {
                io.emit('refresh_list_queue', {index_current: mc_join.index, messages: response.data.message});
            })
            .catch(error => {
                console.log(error.data);
            });
    });

    socket.on('send_next_student', (data) => {
        current_student = data.student;
        mc_join.index = data.index_row;
        io.emit('refresh_screen', data.student);
        io.emit('current_index_row', mc_join.index);
        console.log("SERVER SAY => ADDED STUDENT :", current_student)
    });

    socket.on("disconnect", () => {
        if(socket.id === mc_join.socket_id) {
            current_student = reset_tmp_student;
            mc_join.socket_id = "";

            io.emit("refresh_screen", current_student);
        }
    });

});

http.listen(3000, () => {
    console.log('Listening on port *:3000');
});