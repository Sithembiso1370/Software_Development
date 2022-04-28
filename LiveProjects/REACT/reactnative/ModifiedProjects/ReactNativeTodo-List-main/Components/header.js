import React from 'react';
import { StyleSheet, Text, View} from 'react-native';

export default function  Header() {
return(
    <View style = {styles.header}>
        <Text style = {styles.title}>My Todos</Text>
    </View>
)




}
const styles = StyleSheet.create({
    header: {
    height:85,
    paddingTop:45,
    backgroundColor: '#4e4e4e',
    elevation:3,
},
title: {
    textAlign: 'center',
    color: '#fff',
    fontSize:20,
    fontWeight: 'bold',
    }
  });