const mongoose = require("mongoose");


// load endironment variables
const dotenv = require("dotenv");
dotenv.config();


// Connect to mongo db
module.exports.connect = () => {
    mongoose
    .connect(process.env.MONGO_URI,{
        useNewUriParser: true,
        useUnifiedTopology: true,
    }).then(()=>{
        console.log("mongodb started..");
    }).catch((error)=> console.log("Error connecting to mongo db",error));
};