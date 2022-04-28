import React, { useState } from "react";
import {StyleSheet,Text,View,} from "react-native";

export default function  TodoItem({item, pressHandler}) {
    return(
      <View style = {styles.container}>
        <Text style ={styles.boxOne}>One </Text>
        <Text style={styles.boxTwo}>Two </Text>
        <Text style = {styles.boxThree}>Three  </Text>
        <Text style={styles.boxfour}>Four  </Text>
      </View>
    )
    }
    const styles = StyleSheet.create({
       container: {
          //  flex:1,
           flexDirection: 'row',
           justifyContent:'space-around',
           alignItems:'flex-end',
           paddingTop:80,
           backgroundColor:'#ddd',
       },
       boxOne:{
         flex:1,
         backgroundColor:'#ad5389',
         paddingTop:10,
       },
        boxTwo:{
          flex:1,
         backgroundColor:'#6dd5ed',
         paddingTop:20,
       },
        boxThree:{
          flex:1,
         backgroundColor:'#f64f59',
         paddingTop:30,
       }, 
       boxfour:{
         flex:1,
         backgroundColor:'#b92b27',
         paddingTop:40,
       }
        
      });