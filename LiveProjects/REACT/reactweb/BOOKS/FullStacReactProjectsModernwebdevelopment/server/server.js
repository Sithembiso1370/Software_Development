import express from 'express'
import devBundle from './devBundle'
import path from 'path'
import template from './../template'
import { MongoClient } from 'mongodb'



const app = express()
devBundle.compile(app)

// This will configure the Express app to return static files from the dist folder when
// the requested route starts with /dist.
const CURRENT_WORKING_DIR = process.cwd()

app.use('/dist', express.static(path.join(CURRENT_WORKING_DIR,
'dist')))

// add the following route-handling code to the Express
// app to receive GET requests at /:
app.get('/', (req, res) => {
 res.status(200).send(template())
})


// configure the Express app to start a server that listens on the specified port
// for incoming requests:
let port = process.env.PORT || 3000
app.listen(port, function onStart(err) {
 if (err) {
 console.log(err)
 }
 console.info('Server started on port %s.', port)
})

// Mongo db
// MongoClient is the driver that connects to the running
// MongoDB instance using its URL
const url = process.env.MONGODB_URI || 'mongodb://localhost:27017/mernSimpleSetup'
MongoClient.connect(url, (err, db)=>{
    console.log("Connected successfully to mongodb server")
    db.close()
    }
)

