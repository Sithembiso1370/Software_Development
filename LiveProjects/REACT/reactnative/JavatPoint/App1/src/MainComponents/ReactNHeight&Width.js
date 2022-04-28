import React, { Component } from 'react';  
import { StyleSheet, View } from 'react-native';  
  
// Using fixed height and fixed width in style is the simplest way to set the dimension of the component. 
// The dimensions of React Native component are unit-less, and they represent density-independent pixels.

// Setting the dimension of component with fixed size is common and exactly the same size, regardless of screen dimensions.
export default class HeightWidth extends Component {  
    render() {  
        return (  
            <View>  
                <View style={styles.powderblue} />  
                <View style={styles.skyblue} />  
                <View style={styles.steelblue} />  
            </View>  
        );  
    }  
}  
const styles = StyleSheet.create({  
    powderblue:{  
        width: 100, height: 100, backgroundColor: 'powderblue'  
    },  
    skyblue:{  
        width: 200, height: 200, backgroundColor: 'skyblue'  
    },  
    steelblue:{  
        height: 300, backgroundColor: 'steelblue'  
    },  
})  