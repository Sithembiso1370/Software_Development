// Entry Point for starting our API

// Import express
 const express = require("express");
 // Create a variable to hold an instance of the expres functions
 const app = express();
//  Import the mongoose mongo db library
 const mongoose = require("mongoose");

//  get access to model
const UserModel = require('./models/Users');


const cors = require("cors");


app.use(express.json());
app.use(cors());

//  Use mongoose to make connection to the database Cluster
 mongoose.connect("mongodb+srv://SithembisoMaphanga:13701370Sm@cluster0.4bl9e.mongodb.net/merntut60min?retryWrites=true&w=majority");

//  TO MAKE POST REQUESTS app.get()/app.post()


// API ENDPOINTS
app.get("/getUsers",(req,res)=>{
    UserModel.find({}, (err,result)=>{
        if(err){
            res.json(err);
        }
        else{
            res.json(result)
            // console.log(res)
        }
    });
});


app.post("/createUser", async (req,res)=>{
    const user = req.body;
    const newUser = new UserModel(user);
    await newUser.save();

    res.json(user)
});


//  set a callback to be called when a request is set on the specified port
app.listen(3001,()=>{
    console.log("server is running2..");
})

// Test by running node {filename}/ node index.js
// add script to package.json for changes refresh.