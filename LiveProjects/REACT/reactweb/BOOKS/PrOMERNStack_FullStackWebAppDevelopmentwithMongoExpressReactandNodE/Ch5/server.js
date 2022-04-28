

// get reference to the express server module
const express = require('express');

// Creates an Express application. The express() function is a top-level function exported by the express module.
const app = express();

const bodyParser = require('body-parser');

// Mount the application and connect middleware
app.use(express.static('static'));
app.use(bodyParser.json());



// New List API
const issues = [
    {
    id: 1, status: 'Open', owner: 'Ravan',
    created: new Date('2016-08-15'), effort: 5, completionDate: undefined,
    title: 'Error in console when clicking Add',
    },
    {
    id: 2, status: 'Assigned', owner: 'Eddie',
    created: new Date('2016-08-16'), effort: 14, 
   completionDate: new Date('2016-08-30'),
    title: 'Missing bottom border on panel',
    },
];


// The entry point for the API is the 
// Express route for the resource URI: 
// LIST API
app.get('/api/issues',(req,res)=>{
    const metadata = { total_count: issues.length};
    // The part of this function that 
    // returns a response is in the following line:
    res.json({_metadata: metadata, records: issues });
});

app.post('/api/issues',(req,res)=>{
    const newIssue = req.body;
    newIssue.id = issues.length + 1;
    newIssue.created = new Date();

    if (!newIssue.status)
        newIssue.status = 'New';

    issues.push(newIssue);
    res.json(newIssue);
});



// 
app.listen(3000, function(){
    console.log('App started on port 3000');

});