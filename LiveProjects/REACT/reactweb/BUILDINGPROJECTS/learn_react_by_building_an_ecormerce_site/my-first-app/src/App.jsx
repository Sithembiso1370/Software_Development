
import React from "react";
import { Component } from "react";
import NavBar from "./NavBar";
import MainContent from "./Main";



export default class App extends Component{

    render(){
        return (
            <React.Fragment className="" > 
            <NavBar/>
            <MainContent/>
            </React.Fragment>
        );
    }

    
}