/**
 * @format
 */

 import React, { Component } from 'react';
 import { AppRegistry, View } from 'react-native';
 import Routes from './Routes';
 import { createAppContainer, createSwitchNavigator } from 'react-navigation'
import { createStackNavigator } from 'react-navigation-stack'
import { createBottomTabNavigator } from 'react-navigation-tabs'
import { ScrollView } from 'react-native-gesture-handler';



 
 class tutorialspointpract extends Component {
    render() {
       return (
               <Routes />
       )
    }
 }
 export default tutorialspointpract
 AppRegistry.registerComponent('tutorialspointpract', () => tutorialspointpract)
