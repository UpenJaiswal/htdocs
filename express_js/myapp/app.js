const express = require('express')
const app = express()
const port = 3000



//Respond with Hello World! on the homepage:
app.get('/', (req, res) => res.send('Hello Wod!'))
//or
app.get('/', function (req, res) {
res.send('Hello Woooold!')
})


//Respond to POST request on the root route (/), the application’s home page:
app.post('/', function (req, res) {
res.send('Got a POST request')
})

//Respond to a PUT request to the /user route:
app.put('/user', function (req, res) {
    res.send('Got a PUT request at /user')
})







app.listen(port, () => console.log(`Express app listening on port ${port}!`))
