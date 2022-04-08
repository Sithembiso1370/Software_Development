import react from 'react'
// To access the Compoent in a Class context
import {component} from 'react-dom'
// To get access to the virtual dom modules
import ReactDOM   from 'react-dom';


// Create a variable that will hold a jsx variable
var my_element = <div>Hello World</div>;


// Render the jsx variable
ReactDOM.render(my_element,document.getElementById("root"))