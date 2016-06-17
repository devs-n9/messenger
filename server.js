var http = require('http').Server();
var io = require('socket.io')(http);

io.on('connection', function (socket) {
    console.log('a user connected: ', socket.id);
    
    socket.on('message', function(msg){
        console.log('message: ' + msg.msg);
        io.emit('chat', msg);
    });
    
    socket.on('disconnect', function () {
        console.log('user disconnected', socket.id);
    });
});

http.listen(3000, function () {
    console.log('listening on *:3000');
});