import React from 'react';
import ReactDOM from 'react-dom';
import './index.css';
import App from './App';
import reportWebVitals from './reportWebVitals';
import { renderIntoDocument } from 'react-dom/test-utils';

// 1. Render string
ReactDOM.render(
  "rendering a string",
  document.getElementById('root')
);
// --------------------------------------------------------------------------------------------
// 2. uses JSX and the second does not:
const myelement = <h1>i use jsx</h1>;
ReactDOM.render(
  myelement,
    document.getElementById('root2')
  );
// ---------------------------------------------------------------------------------------------
// 3. Without JSX
const myelementNOjsx = React.createElement('h1', {}, 'I do not use JSX!');

ReactDOM.render(myelementNOjsx, document.getElementById('root3'));
// ---------------------------------------------------------------------------------------------
//  4. Expressions
const my_expression = <h1>React is {5 + 5} times better with JSX and Expressions</h1>;
// render the expression
ReactDOM.render(my_expression,document.getElementById("root4"));
// ---------------------------------------------------------------------------------------------
// 5. Inserting a Large Block of HTML
// To write HTML on multiple lines, put the HTML inside parentheses:
const my_large_blockhtml = (
  <ul>
    <li>Apples</li>
    <li>Bananas</li>
    <li>Cherries</li>
  </ul>
);
ReactDOM.render(my_large_blockhtml,document.getElementById("root5"));
// ----------------------------------------------------------------------------------------------
// One Top Level Element
// The HTML code must be wrapped in ONE top level element.
// So if you like to write two paragraphs, you must put them inside a parent element, like a div element.
const myelement2 = (
  <div>
    <p>I am a paragraph.</p>
    <p>I am a paragraph too.</p>
  </div>
);
ReactDOM.render(myelement2,document.getElementById("root6"));
// ----------------------------------------------------------------------------------------------
// Alternatively, you can use a "fragment" to wrap multiple lines. 
// This will prevent unnecessarily adding extra nodes to the DOM.
// A fragment looks like an empty HTML tag: <></>.
const myelement3 = (
  <>
    <p>I am a paragraph.</p>
    <p>I am a paragraph too.</p>
  </>
);
ReactDOM.render(myelement3,document.getElementById("root7"));
// ------------------------------------------------------------------------------------------------
// Conditions - if statements
// React supports if statements, but not inside JSX.
// To be able to use conditional statements in JSX, you should put the if statements outside of the JSX, or you could use a ternary expression instead:

// Write if statements outside of the JSX code:
// Write "Hello" if x is less than 10, otherwise "Goodbye":
const x = 5;
let text = "Goodbye";
if (x < 10) {
  text = "Sithembiso";
}

const myelement9 = <h1>Hello {text}</h1>;
ReactDOM.render(myelement9,document.getElementById("root8"));
// ---------------------------------------------------------------------------------------------------
// Use ternary expressions instead:
// Write "Hello" if x is less than 10, otherwise "Goodbye":
const y = 5;

const myelement10 = <h1>{ y < 10 ? "Hello" : "Goodbye"}</h1>;
ReactDOM.render(myelement10,document.getElementById("root9"));


// If you want to start measuring performance in your app, pass a function
// to log results (for example: reportWebVitals(console.log))
// or send to an analytics endpoint. Learn more: https://bit.ly/CRA-vitals
reportWebVitals();
