import React, { Component } from 'react'  
import {StyleSheet,View, Text} from 'react-native'  
  


export default class ViewExample extends Component {  
    render() {  
        return (  
            // START VIEW BODY
            <View style={styles.container}>  
                <View style={{backgroundColor: 'blue', flex: 0.3}} />  
                <View style={{backgroundColor: 'red', flex: 0.5}} />  
                <Text style={{fontSize: 18}}>View Example</Text>  
            </View>  
            // END VIEW BODY
        );  
    }  
}  


const styles = StyleSheet.create ({  
     container: {  
         flex: 1,  
         flexDirection: 'row',  
         height: 100,  
         width: "80%",  
         backgroundColor:"#5ead97"  
     }  
})  