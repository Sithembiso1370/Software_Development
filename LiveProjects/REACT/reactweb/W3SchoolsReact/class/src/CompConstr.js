import React from 'react';

class CompConstr extends React.Component{
    constructor(){
        // Create an instance of the child class React.component
        super();
        // Declaire the state of the component in the constructor
        this.state = { color: "red"};
    }

    // Use the color property in the render() function:
    render(){
        return <h2>I am a {this.state.color} Car!</h2>;
    }
}

export default CompConstr;