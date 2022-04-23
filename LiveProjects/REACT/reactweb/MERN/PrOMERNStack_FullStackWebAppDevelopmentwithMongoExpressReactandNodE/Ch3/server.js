

// get reference to the express server module
const express = require('express');

// Creates an Express application. The express() function is a top-level function exported by the express module.
const app = express();

// Mount the application and connect middleware
app.use(express.static('static'));

// 
app.listen(3000, function(){
    console.log('App started on port 3000');
});