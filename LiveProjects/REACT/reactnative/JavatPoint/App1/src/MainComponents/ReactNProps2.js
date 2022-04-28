import React, { Component } from 'react';  
import { StyleSheet, Text, View } from 'react-native';  
  
class ChildClass extends Component {  
    
  render() {  
    return (  
        <View style={{alignItems: 'center'}}>  
          <Text style={styles.welcome}>Hello {this.props.name}!</Text>  
        </View>  
    );  
  }  

}  
  

export default class ParentsClass extends Component {  
  render() {  
    return (  
        <View style={{alignItems: 'center'}}>  
          <ChildClass name='Ashu' />  
          <ChildClass name='Aman' />  
          <ChildClass name='Max' />  
        </View>  
    );  
  }  
}  


const styles = StyleSheet.create({  
   welcome: {  
    fontSize: 30,  
  }  
});  
  