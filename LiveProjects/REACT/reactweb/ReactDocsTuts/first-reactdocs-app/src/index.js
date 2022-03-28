import React from 'react';
import ReactDOM from 'react-dom';
import './index.css';
import App from './App';
import formatName from './formatUserName';
import reportWebVitals from './reportWebVitals';

// ReactDOM.render(
//   <React.StrictMode>
//     <App />
//   </React.StrictMode>,
//   document.getElementById('root')
// );
const nickName = 'Sthera';
const user = {
  firstName: 'Sithembiso',
  lastName: 'Maphanga'
};



// const element = (
//   <h1>
//     Hello, {formatName(user)}! or {nickName}
//     <h2>Good to see you here.</h2>
//   </h1>
  
// );

function tick() {
  const element = (
    <div>
      <h1>
         Hello, {formatName(user)}! or {nickName}
      </h1>
      <h2>The time is {new Date().toLocaleTimeString()}.</h2>
    </div>
  );
  ReactDOM.render(element, document.getElementById('root'));
}

setInterval(tick, 1000);

// If you want to start measuring performance in your app, pass a function
// to log results (for example: reportWebVitals(console.log))
// or send to an analytics endpoint. Learn more: https://bit.ly/CRA-vitals
reportWebVitals();
