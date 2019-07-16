
const express = require('express');
const mongoose = require('mongoose');

var router = express.Router();

const Register = mongoose.model('Register');
 

router.get('/',(req, res) => {
res.render("register/registerAddEdit", {
viewTitle: "Add User"
});
});
 

router.post('/', (req,res) => {
if (req.body._id == '')
insertIntoMongoDB(req, res);
else
updateIntoMongoDB(req, res);
});
 

function insertIntoMongoDB(req,res) {
var register = new Register();
register.name = req.body.name;
register.age = req.body.age;
register.email = req.body.email;

register.save((err, doc) => {
if (!err)
res.redirect('register/list');
else
console.log('Error : ' + err);
});
}
 

function updateIntoMongoDB(req, res) {
Register.findOneAndUpdate({ _id: req.body._id }, req.body, { new: true }, (err, doc) => {
if (!err) { res.redirect('register/list'); }
else {
if (err.name == 'ValidationError') {
handleValidationError(err, req.body);
res.render("register/registerAddEdit", {

viewTitle: 'Update register Details',
employee: req.body
});
}
else
console.log('Error during updating the record: ' + err);
}
});
}
 

router.get('/list', (req,res) => {
Register.find((err, docs) => {
if(!err){
res.render("register/list", {
list: docs
});
}
else {
console.log('Failed to retrieve the register List: '+ err);
}
});
});
 

function handleValidationError(err, body) {
for (field in err.errors) {
switch (err.errors[field].path) {
case 'registerName':
body['registerNameError'] = err.errors[field].message;
break;
default:
break;
}
}
}
 

router.get('/:id', (req, res) => {
Register.findById(req.params.id, (err, doc) => {
if (!err) {
res.render("register/registerAddEdit", {
viewTitle: "Update register Details",
register: doc
});
}
});
});
 

router.get('/delete/:id', (req, res) => {
Register.findByIdAndRemove(req.params.id, (err, doc) => {
if (!err) {
res.redirect('/register/list');
}
else { console.log('Failed to Delete register Details: ' + err); }
});
});
 
module.exports = router;