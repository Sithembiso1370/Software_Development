const express = require("express");
const mongoose = require("mongoose");
// Morgan logs the request details
const morgan = require("morgan");
// bodyParser unzips the whole body part of an incoming request and makes it available on req.body object
const bodyParser = require("bodyParser");
// cookieParser deconstructs cookie header and populates all the cookie in  req object under property named cookies.
const cookieParser = require("cookie-parser");
const cors = require("cors");
const expressValidator = require("express-validator");
// dotenv let developers use environment variable by accessing .env file
require("dotenv").config();

// App
const app = express();
