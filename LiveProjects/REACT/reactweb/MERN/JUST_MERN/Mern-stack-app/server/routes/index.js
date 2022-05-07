// create an index.js file in the 'routes' folder and import all our routes:

const express = require("express");
const router = express.Router();


const  QuestionRoutes = require("./QuestionRoutes");
const AnswerRoutes = require("./AnswerRoutes");


// test route
router.get("/",(req,res) =>{
    res.send("Welcome to kysmys");
});


router.use("/questions", QuestionRoutes);
router.use("/answers", AnswerRoutes);


module.exports = router;