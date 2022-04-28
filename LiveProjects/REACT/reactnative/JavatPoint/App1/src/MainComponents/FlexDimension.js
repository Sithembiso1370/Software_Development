import React, { Component } from 'react';  
import { StyleSheet, View } from 'react-native';  
  

// The flex property styles the component to expand and shrink it dynamically according to available space. Setting flex: 1 will fill all the available space to the component, and shared evenly among the other components of same as the parent. 
// Higher the flex value, occupy component higher ratio of space compared to its siblings
export default class HeightWidthFlexDims extends Component {  
    render() {  
        return (  
            <View style={styles.container}>  
                <View style={styles.powderblue} />  
                <View style={styles.skyblue} />  
                <View style={styles.steelblue} />  
            </View>  
        );  
    }  
}  
const styles = StyleSheet.create({  
    container:{  
      flex:1  
    },  
    powderblue:{  
        flex:1,  
        backgroundColor: 'powderblue',  
    },  
    skyblue:{  
        flex:2,  
        backgroundColor: 'skyblue',  
    },  
    steelblue:{  
        flex:3,  
        backgroundColor: 'steelblue',  
    },  
})  