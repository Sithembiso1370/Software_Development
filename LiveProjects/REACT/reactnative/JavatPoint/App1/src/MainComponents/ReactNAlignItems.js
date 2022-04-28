import React, { Component } from 'react';  
import { StyleSheet,View } from 'react-native';  
  
// The alignItems determine the alignment of children component along the secondary axis. 
// If the primary axis is a column, then the secondary is a row, and when a primary axis is a row, then the secondary is a column. 
// Using the alignItems, the children are aligned at start, end, center, or stretched.
export default class AlignItemsBasics extends Component {  
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
        alignItems: 'stretch',  
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
        /*width: 60,*/  
        height: 60,  
        backgroundColor: 'steelblue',  
    }  
})