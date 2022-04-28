import React, {Component} from 'react';  
import { Text, View } from 'react-native';  
  
export default class AppState1 extends Component {  
    // Default state which could be set in a constructor function
    state = {  
        myState: 'This is a text component, created using state data. It will change or updated on clicking it.'  
    }  

    updateState = () => this.setState({myState: 'The state is updated'})  

    
    render() {  
        return (  
            <View>  
                <Text onPress={this.updateState}> {this.state.myState} </Text>  
            </View>  
        );  
    }  
}  