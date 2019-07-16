const mongoose = require('mongoose');
 

var registerSchema = new mongoose.Schema({
name: {
type: String,
required: 'This field is required'
},
age: {
type: String,
required: 'This field is required'
},
email: {
type: String,
required: 'This field is required'
},

});
 
mongoose.model('Register', registerSchema);