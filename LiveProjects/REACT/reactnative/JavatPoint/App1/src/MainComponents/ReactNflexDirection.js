import React, { Component } from 'react';  
import { StyleSheet,View } from 'react-native';  
  

// The flexDirection adds the style to the component in a primary axis of its layout. 
// It has a property row and column to organize children horizontally and vertically respectively. 
// The default flexDirection is a column.
export default class FlexDirectionBasics extends Component {  
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
        flexDirection: 'row',// set elements horizontally, try column.  
    },  
    powderblue:{  
        width: 60,  
        height: 60,  
        backgroundColor: 'powderblue',  
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


