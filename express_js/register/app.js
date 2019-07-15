var express = require("express");
var app = express();
var port = 3000;

//connect to database
var mongoose = require("mongoose");
mongoose.Promise = global.Promise;mongoose.connect("mongodb://localhost:27017/register");
//creating database schema
var nameSchema = new mongoose.Schema({
    firstName: String,
    lastName: String
   });
//creating model
var User = mongoose.model("User", nameSchema);

 //importing html file
app.use("/", (req, res) => {
    res.sendFile(__dirname + "/index.html");
   });


app.listen(port, () => {
 console.log("Server listening on port " + port);
});