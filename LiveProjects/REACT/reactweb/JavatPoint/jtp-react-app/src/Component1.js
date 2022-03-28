import React, { Component } from 'react';  
// import logo from './logo.svg';
// import './App.css';


 


class Component1 extends React.Component {  
  render() {  
    return (  
        <Second/> 
    );  
  }  
}

class First extends React.Component {  
  render() {  
     return (  
        <div>  
           <h1>JavaTpoint</h1>,
           <Second/>  
        </div>  
     );  
  }  
}  
class Second extends React.Component {  
  render() {  
     return (  
        <div> 
           <h2>www.javatpoint.com</h2>  
           <p>This websites contains the great CS tutorial.</p>  
        </div>  
     );  
  }  
}  
export default Component1;