const mongoose = require('mongoose');
 
mongoose.connect('mongodb://localhost:27017/UserDB', {useNewUrlParser: true}, (err) => {
if (!err) {
console.log('Connected to UserDB')
}
else {
console.log('Failed to Connect to UserDB with Error: '+ err)
}
});
 

require('./register.model');