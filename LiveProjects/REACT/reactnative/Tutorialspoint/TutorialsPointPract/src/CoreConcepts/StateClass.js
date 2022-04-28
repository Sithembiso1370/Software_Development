
import React from 'react';
import { StyleSheet, Text, View } from 'react-native';

export default class StateClass extends React.Component {
    // Creating an mutable state component
    state = {
       myState: 'MY STATE CLASS'
    }

    // 
    updateState = () => this.setState({ 
        myState: 'The state is updated'
    })
  
    // Since state is mutable, we can update it by creating the updateState function and call it
    render() {
       return (
       <View >
            <Text 
            // onPress ={this.updateState}
            > 
                {/* Display the current value of the state at any point */}
              {this.state.myState} 
            </Text>
       </View>
       );
    }
  
  
  }