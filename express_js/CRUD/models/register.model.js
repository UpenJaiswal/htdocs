const mongoose = require('mongoose');
 

var registerSchema = new mongoose.Schema({
name: {
type: String,
required: 'This field is required'
},
age: {
type: String
},
email: {
type: String
},

});
 
mongoose.model('Register', registerSchema);