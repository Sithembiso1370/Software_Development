const mongoose = require("mongoose");


// load endironment variables
const dotenv = require("dotenv");
dotenv.config();


// Connect to mongo db
module.exports.connect = () => {
    mongoose
    .connect().then().catch();
}