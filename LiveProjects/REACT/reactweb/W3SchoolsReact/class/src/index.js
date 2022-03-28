import React from 'react';
import ReactDOM from 'react-dom';
// import './index.css';
import App from './App';
import CompConstr from './CompConstr';
import PropsConstr from './PropsConstr';
import Garage from './CompInComp';

// Component Class without properties/props 
ReactDOM.render(
  <React.StrictMode>
    <App />
  </React.StrictMode>,
  document.getElementById('root')
);

// Component Class without properties/props 
ReactDOM.render(<CompConstr/>,document.getElementById("root1"));

// Component Class with properties/props 
ReactDOM.render(<PropsConstr model="Mustang"/>,document.getElementById("root2"));

// Component within a component Class without properties/props 
ReactDOM.render(<Garage />,document.getElementById("root3"));


