

//1 Create an express sserver
const express = require('express');

// Create an instance of the express application
const app = express();


// START AN EXPRESS SERVER nd test by running node index.js on the directory
app.listen(3001,(req,res)=>{
    console.log("server running...");
});

