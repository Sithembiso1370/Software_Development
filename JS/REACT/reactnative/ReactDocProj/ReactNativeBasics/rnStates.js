import React, { Component } from "react";
import { Button, Text, View } from "react-native";
import Cat from "./Cat";



export default class Cafe extends Component {
    render() {
        return (
            // See the <> and </> above? These bits of JSX are fragments. 
            // Adjacent JSX elements must be wrapped in an enclosing tag. 
            // Fragments let you do that without nesting an extra, unnecessary wrapping element like View.
            <>
                <Cat name="Munkustrap" />
                <Cat name="Sithembis0" />
            </>
        );
    }
}




  