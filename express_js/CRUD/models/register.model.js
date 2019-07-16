const mongoose = require('mongoose');
 

var registerSchema = new mongoose.Schema({
name: {
type: String,

},
age: {
type: String
},
email: {
type: String
},

});
 
mongoose.model('Register', registerSchema);