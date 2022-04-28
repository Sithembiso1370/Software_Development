/**
 * Sample React Native App
 * https://github.com/facebook/react-native
 *
 * @format
 * @flow strict-local
 */

 import React from 'react';
 import { View, Text, StyleSheet } from 'react-native';
 import styles from '../ReUseTextStyles';

 
 
 const ReUsableComponent1 = () => {
   return(
   <View>
      <Text>
        The quick <Text style={{fontStyle: "italic"}}>brown</Text> fox
        jumped over the lazy <Text style={{fontWeight: "bold"}}>dog</Text>.
      </Text>
      <Text style={styles.bold}>Hello App</Text>
      
   </View>
   );
 };
 
 
 
 export default ReUsableComponent1;