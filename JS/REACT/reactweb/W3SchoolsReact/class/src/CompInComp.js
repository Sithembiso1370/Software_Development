
import React from 'react';

class CompInComp extends React.Component {
    render() {
      return <h2>I am a Car!</h2>;
    }
}
  
class Garage extends React.Component {
    render() {
      return (
        <div>
        <h1>Who lives in my Garage?</h1>
        <CompInComp />
        </div>
      );
    }
}

export default Garage;