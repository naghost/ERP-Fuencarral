var app = require('express')();
var http = require('http').Server(app);
var io = require('socket.io')(http);
var port = process.env.PORT || 3000;


app.get('/', function(req, res){

  res.sendFile(__dirname + '/index.html');
});

io.on('connection', function(socket){
  console.log('A user conected');

  socket.on('chat message', function(msg){
  	console.log(msg);
    io.emit('chat message', msg);
  });

 //listen on typing
  socket.on('typing', (data) => {
    	socket.broadcast.emit('typing', {username : data.username})
  })
  socket.on('clean', (data) => {
    	socket.broadcast.emit('clean')
  })


});


http.listen(port, function(){
  console.log('listening on *:' + port);
});
