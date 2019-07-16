require('./models/mongodb');
 
var express = require('express');
var app = express();
var port = 3000;
var path = require('path');
var exphb = require('express-handlebars');
var bodyparser = require('body-parser');
 
var registerController = require('./controllers/registerController');
 
app.use(bodyparser.urlencoded({
extended: true
}));
 

app.get("/", (req, res) => {
    res.sendFile(__dirname + "/index.html");
});
app.use(bodyparser.json());
 

app.set('views', path.join(__dirname, '/views/'));
app.engine('hbs', exphb({ extname: 'hbs', defaultLayout: 'mainLayout', layoutDir: __dirname + 'views/layouts/' }));
app.set('view engine', 'hbs');
 


app.listen(port, () => console.log(`Listening on port ${port}..`));
 

app.use('/register', registerController);
