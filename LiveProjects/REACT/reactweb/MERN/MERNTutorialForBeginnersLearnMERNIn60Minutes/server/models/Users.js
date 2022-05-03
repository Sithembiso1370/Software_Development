
// Import the Mongoose Library for all its wonderful database features
const mongoose = require("mongoose");

// Define  a Schema
const UserSchema = new mongoose.Schema({
    name: {
        type: String,
        required: true,
    },
    age: {
        type: Number,
        required: true,
    },
    username: {
        type: String,
        required: true,
    },
});


// Create a Model out of this Schema
const UserModel  = mongoose.model("users", UserSchema);

// Export the module for Outside Access by Other Clients
module.exports = UserModel;