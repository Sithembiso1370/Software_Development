import React from 'react';

import './index.css';
import App from './App';
import reportWebVitals from './reportWebVitals';
// wrap your react app with the ChakraProvider component.
import { ChakraProvider } from "@chakra-ui/react";
// React 18 : // After
import { createRoot } from 'react-dom/client'


// fix 
const container = document.getElementById('root');

const root = createRoot(container);
root.render(
  <React.StrictMode>
    <ChakraProvider>
      <App />
    </ChakraProvider>
  </React.StrictMode>
);


var butter = require('buttercms')("26dfe9bf8c0ca856b50f65f532fd145ccf73debb");
var params = {
     "preview": 1,
     "fields.genre": "Rock",
     "page": 1, 
     "page_size": 10,
     "locale": "en",
     "levels": 2
};

butter.content.retrieve(['cookies'], params)
  .then(function(resp) {
    console.log(resp.data)
  }).catch(function(resp) {
    console.log(resp)
  });
// If you want to start measuring performance in your app, pass a function
// to log results (for example: reportWebVitals(console.log))
// or send to an analytics endpoint. Learn more: https://bit.ly/CRA-vitals
reportWebVitals();
