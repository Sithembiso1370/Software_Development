import React, { Component } from 'react'
import { Text, View } from 'react-native'
import PresentationalComponent from './PresentationalComps'

// Container component is only used for handling state. 
// All functionality related to view(styling etc.) will be handled in the presentational component.
export default class ContainerComponent extends React.Component {
    //  Declaire the apps State
      state = {
         myState: 'Props State'
      }
  
      // Funtion to update the Apps State
      updateState = () => {
         this.setState({ myState: 'The state is updated' })
      }
  
      // Function to render the components Viewr
      render() {
         return (
          //  View Container For my Content
            <View>
              <PresentationalComponent myState = {this.state.myState} updateState = {this.updateState}/>
            </View>
         );
      }
  
  
   }
  