/**
 * Sample React Native App
 * https://github.com/facebook/react-native
 *
 * @format
 * @flow strict-local
 */

 import React from 'react';
 import { View, Text, StyleSheet } from 'react-native';
 import ImgSource from './imgsource';
 import Button from './Touch';
 import MyPanResponder from './PanResponder';

 
 
 
 const Ch04 = () => {
   return(
       <View>
         <MyPanResponder/>
       </View>
   
   );
 };
 
 
 
 export default Ch04;