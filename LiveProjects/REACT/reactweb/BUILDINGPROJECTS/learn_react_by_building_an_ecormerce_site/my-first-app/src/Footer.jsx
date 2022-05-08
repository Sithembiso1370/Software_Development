
import React from "react";
import { Component } from "react";
// import { useState } from "react";



export default class FooterEx extends Component{
    constructor(props) {
        super(props);
        this.state = {date: new Date()};
        // this.state = 'offline'
      }

    render(){
        return (
            <div>
                <h1>Footer Content</h1>
            </div>
        );
    }

    
}