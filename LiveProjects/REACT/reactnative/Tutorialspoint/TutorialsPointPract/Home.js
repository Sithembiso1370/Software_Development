import React from 'react'
import { TouchableOpacity, Text, StyleSheet, View, TouchableHighlight  } from 'react-native';
import { ScrollView } from 'react-native-gesture-handler';
import { FlipInEasyX } from 'react-native-reanimated';
import { Actions } from 'react-native-router-flux';
import ActivityIndicatorExample from './src/CoreConcepts/ActivityIndicatorExample';
import Animations from './src/CoreConcepts/Animations';
import ButtonExample from './src/CoreConcepts/ButtonExample';
import HttpExample from './src/CoreConcepts/Htttp';
import ModalExample from './src/CoreConcepts/ModalEx';
import PickerExample from './src/CoreConcepts/Picker';
import TouchableOpacityEx from './TouchableOpacity';
import WebViewExample from './WebViewExample';
import { StatusBar } from 'react-native'
import SwitchContainer from './src/CoreConcepts/SwitchContainer';
import AlertExample from './src/CoreConcepts/AlertEx';
import AsyncStorGeolocExample from './src/CoreConcepts/AsyncStorGeoloc';



const Home = () => {

   const goToAbout = () => {
      Actions.about()
   }

   return (

      <View>
         <StatusBar barStyle = "dark-content" hidden = {false} backgroundColor = "#00BCD4" translucent = {true}/>
         <AsyncStorGeolocExample/>
      </View>

   )
   
}
export default Home

const styles = StyleSheet.create({
   container: {
      display: 'flex',
      height: "100%",
      width:"100%",
      justifyContent:'center',
      alignItems:'center',
      marginTop: 20,
      textAlign: 'center',
      color: 'blue',
      fontWeight: 'bold',
      fontSize: 20
   },
   webView: {
      height:100
   }
})