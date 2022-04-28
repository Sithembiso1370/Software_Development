import React, { Component } from 'react'
import { StyleSheet, Text, View } from 'react-native'


// Using a functional Component to Create Presentaional/Stateless Components
// Our component will receive props, return view elements, 
// present text using {props.myText} and call the {props.deleteText} function when a user clicks on the text.
const PresentationalComponent = (props) => {
   return (
      <View>
          {/* GET THE PROPS PASSED IN ON KEY PRESS */}
         <Text 
            onPress = {props.updateState} 
            style={styles.myState}
            >
            {props.myState}
         </Text>
      </View>
   )
}

const styles = StyleSheet.create ({
   myState: {
      marginTop: 20,
      textAlign: 'center',
      color: 'blue',
      fontWeight: 'bold',
      fontSize: 20
   }
})
export default PresentationalComponent