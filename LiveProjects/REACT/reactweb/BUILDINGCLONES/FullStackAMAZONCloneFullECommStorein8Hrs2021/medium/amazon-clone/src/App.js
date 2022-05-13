import React from 'react';
// Once you’ve done importing the code, you can now use React Routes in your file
import { Routes, Route } from "react-router-dom"
import About from './Pages/About';
import './App.css';
import Header from './Components/Header';
import Home from './Pages/Home';

function App() {
  return (
    <div className="app">
      <Routes>
        <Route path="/" element={<><Header/> <Home/></> } />
        <Route path="about" element={ <About/> } />
      </Routes>
    </div>
  );
}

export default App;
