import React, { Component } from 'react';  
import logo from './logo.svg';
import './App.css';

// function App() {
//   return (
//     <div>  
//             <First/>  
//             <Second/>  
//     </div>  
//   );
// }


class App extends React.Component {  
  render() {  
    return (  
      <div>This is main component.</div>  
    );  
  }  
}

class First extends React.Component {  
  render() {  
     return (  
        <div>  
           <h1>JavaTpoint</h1>  
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
export default App;
