import React from 'react';
// Once you’ve done importing the code, you can now use React Router in your file
import { Routes ,Route } from 'react-router-dom';
import About from './About';
import './App.css';
import Header from './Header';
import Home from './Home';

function App() {
  return (
    <div className="app">
      <Routes>
        <Route path="/" element={<div><Header /><Home /></div>} />
        <Route path="about" element={<About />} />
      </Routes>
      {/* <a href="/">Home</a>
      // <a href="about">About</a> */}
  </div>
  );
}

export default App;
