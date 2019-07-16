require('./models/mongodb');
 
const express = require('express');
var app = express();
const path = require('path');
const exphb = require('express-handlebars');
const bodyparser = require('body-parser');
 
const registerController = require('./controllers/registerController');
 
app.use(bodyparser.urlencoded({
extended: true
}));
 

app.get('/', (req, res) => {
res.send('<h2 style="font-family: Malgun Gothic; color: black; text-align: center">Welcome to Registration Page!!</h2> <h3 style="text-align: center"> <a href="/register">Registration Page</a> </h3>');
});
app.use(bodyparser.json());
 

app.set('views', path.join(__dirname, '/views/'));
app.engine('hbs', exphb({ extname: 'hbs', defaultLayout: 'mainLayout', layoutDir: __dirname + 'views/layouts/' }));
app.set('view engine', 'hbs');
 

const port = process.env.PORT || 3000;
app.listen(port, () => console.log(`Listening on port ${port}..`));
 

app.use('/register', registerController);
