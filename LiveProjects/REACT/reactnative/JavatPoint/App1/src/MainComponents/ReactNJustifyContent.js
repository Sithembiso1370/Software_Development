import React, { Component } from 'react';  
import { StyleSheet,View } from 'react-native';  
  

// The justifyContent determines the distribution of children component along the primary axis. 
// The children component are distributed at the start, end, center, or space evenly.
export default class JustifyContentBasics extends Component {  
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
        flex: 1,  
        flexDirection: 'column', // set elements horizontally`.  
        justifyContent: 'center',  
  
    },  
    powderblue:{  
        width: 60,  
        height: 60,  
        backgroundColor: 'powderblue'  
    },  
    skyblue:{  
        width: 60,  
        height: 60,  
        backgroundColor: 'skyblue',  
    },  
    steelblue:{  
        width: 60,  
        height: 60,  
        backgroundColor: 'steelblue',  
    }  
})