import React, { Component } from 'react';  
import { AppRegistry, StyleSheet, Text, View } from 'react-native';  
  
export default class ImplementingStyle extends Component {  
    render() {  
        return (  
            <View>  
                <Text style={{ backgroundColor: '#a7a6a9', color: 'yellow', fontSize: 20 }}>this is inline style</Text>  
                <Text style={styles.green}>just green</Text>  
                <Text style={styles.biggray}>just biggray</Text>  
                <Text style={[styles.biggray, styles.green]}>biggray, then green</Text>  
                <Text style={[styles.green, styles.biggray]}>green, then biggray</Text>  
            </View>  
        );  
    }  
}  


const styles = StyleSheet.create({  
    biggray: {  
        color: 'gray',  
        fontWeight: 'bold',  
        fontSize: 30,  
    },  
    green: {  
        color: 'green',  
    },  
});  