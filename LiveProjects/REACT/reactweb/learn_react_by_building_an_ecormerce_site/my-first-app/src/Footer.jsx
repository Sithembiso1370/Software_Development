
import React from "react";
import { Component } from "react";
// import { useState } from "react";



export default class FooterEx extends Component{
    constructor(props) {
        super(props);
        this.state = {date: new Date()};
        // this.state = 'offline'
      }

    
    // updateState = (props)=> {
    //      console.log(this.state.date);
    // }


    render(){
        return (
            <div>
                <h1>Footer Content</h1>
            </div>
        );
    }

    
}