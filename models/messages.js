var mongoose = require('mongoose');
var messagesScheme = mongoose.Schema({
    _id: Number,
    name: String,
    msg: String,
    updated_at: Date,
    created_at: Date
});

module.exports = mongoose.model('Messages', messagesScheme);