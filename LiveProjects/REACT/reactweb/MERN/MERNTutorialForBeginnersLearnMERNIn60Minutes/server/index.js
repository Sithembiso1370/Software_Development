// Entry Point for starting our API

// Import express
 const express = require("express");

// Create a variable to hold an instance of the expres functions
 const app = express();

//  set a callback to be called when a request is set on the specified port
app.listen(3001,()=>{
    console.log("server is running2..");
})

// Test by running node {filename}/ node index.js