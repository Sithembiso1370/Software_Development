// QuestionRoutes will contain Add Question & Get All Questions

const express = require("express");
const router = express.Router();

// Import our model
const questionDB = require("../models/QuestionModel");



// Add a question
// POST /api/questions - ADD QUESTION - route

router.post("/", async (req,res) => {
    try {
        // Save question to db
        await questionDB
        .create(
            {
                description: req.body.description,
                imageUrl: req.body.imageUrl,
                user: req.body.user,
            }
        ).then(() =>{
            res.status(201).send(
                status:true,
                message: "Question added Successfully",
            );
        }
        ).catch((err)=>{
            res.status(400).send({
                status: "false",
                message: "Question could not be added",
            });
        }
        );
    } catch (err) {
        res.status(500).send({
            status: false,
            message: "Sever error while adding question",
        });
    }
});

// GET ALL QUESTIONS WITH THEIR ANSWERS
// GET /api/questions - Get all questions - route

router.get("/",async (req,res)=> {
    try {
        // Perform a MongoDB 'join' query to fetch all answers for questions based  on the questionId field
        await questionDB
        .aggregate([{
            $lookup:{
                from: "answers",
                localField: "_id",
                foreignField: "questionId",
                as: "AllAnswers",
            }
        }]).exec().then((doc)=>{
            res.status(200).send(doc);
        }).catch((error)=>{
            res.status(500).send({
                status: false,
                message: "Unable to get questions",
            });
        });
    } catch (err) {
        res.status(500).send({
            status: false,
            message: "Server error while getting issues",
        });
    }
});


module.exports = router;