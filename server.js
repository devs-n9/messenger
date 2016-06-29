var http = require('http').Server();
var io = require('socket.io')(http);
var mongoose = require('mongoose');

var configDB = require('./database.js');
mongoose.connect(configDB.url);
var Messages = require('./models/messages');

io.on('connection', function (socket) {
    console.log('a user connected: ', socket.id);
    
    socket.on('message', function(msg){
        console.log('message: ' + msg.msg, msg.user);
        
        var message = new Messages({
            name: msg.user,
            msg: msg.msg
        });
        
        message.save(function(err, message) {
            if (err) return console.error(err);
            console.dir(message);
        });
        
        io.emit('chat', msg);
    });
    
    socket.on('disconnect', function () {
        console.log('user disconnected', socket.id);
    });
});

http.listen(3000, function () {
    console.log('listening on *:3000');
});