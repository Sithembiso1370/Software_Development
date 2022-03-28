// As always with class components, you must import the Component class from React:
import React, { Component } from "react";
import { Button, Text, View } from "react-native";


export default class Cat extends Component {
    // In class components, state is stored in a state object:
    state = { isHungry: false };

    // Pass the props to the constructor to use it
    constructor(props){
        // Create an instance of the view component with these props
        super(props);
        
        // Create a decision to manipulate the components state
        if (this.props.name == "Sithembiso") {
            // Get reference to the state and modify it on condition
            this.state = { isHungry: true };
        }
        
    }
  

  render() {
    return (
      <View>
        <Text>
          I am {this.props.name}, and I am
          {this.state.isHungry ? " hungry" : " full"}!
        </Text>
        <Button
          onPress={() => {
            this.setState({ isHungry: false });
          }}
          disabled={!this.state.isHungry}
          title={
            this.state.isHungry ? "Pour me some milk, please!" : "Thank you!"
          }
        />
      </View>
    );
  }
}