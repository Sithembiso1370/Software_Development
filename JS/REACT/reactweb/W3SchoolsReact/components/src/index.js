import React from 'react';
import ReactDOM from 'react-dom';
import './index.css';
import Carprops from './Carprops';
import CarClass from './CarClass';
import CarFunct from './CarFunct';


// Rendering a Component
// Render a function component
ReactDOM.render(
  <React.StrictMode>
    <CarFunct />
  </React.StrictMode>,
  document.getElementById('root')
)

// Render a class component
ReactDOM.render(<CarClass/>,document.getElementById("root1"));
// Both functions and classes can be renedered the same way

// Props
ReactDOM.render(<Carprops color="red"/>, document.getElementById('root2'));


