import React, { Component } from "react";
import Footer from "../Components/Footer";
import Main from "../Components/Main";
import Navbar from "../Components/Navbar";
import '../styles/pageContent.css'
import { useState } from "react";

class PageContent extends Component{


    render(){
        // Take Out the Number Variable from the state
        // cost {number} = this.mystate;
        return(
            <div className="pageContent">
                <Navbar/>
                <Main/>
                <Footer/>
            </div>
        );
    }
}

export default  PageContent;