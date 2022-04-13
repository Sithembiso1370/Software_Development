
import React from "react";
import { Component } from "react";
// import { useState } from "react";



export default class ButtonsEx extends Component{
    constructor(props) {
        super(props);
        this.state = {date: new Date()};
        // this.state = 'offline'
      }

    
    updateState = (props)=> {
         console.log(this.state.date);
    }


    render(){
        return (
            <div className="btn btn-danger" > 
                <button onKeyDown={this.updateState}>
                Hello World {this.state.date.toLocaleTimeString()}
                </button>
                <button onKeyUp={this.updateState}>
                Hello World {this.state.date.toLocaleTimeString()}
                </button>
            </div>
        );
    }

    
}