import React from 'react'
// To access the Compoent in a Class context
// import {component} from 'react-dom'
// To get access to the virtual dom modules
import ReactDOM   from 'react-dom';
import 'jquery';
import  'bootstrap/dist/js/bootstrap'
import 'popper.js/dist/umd/popper'
import 'bootstrap/dist/css/bootstrap.css'
import App from './App';





// Render the jsx variable
ReactDOM.render(<App/>,document.getElementById("root"))