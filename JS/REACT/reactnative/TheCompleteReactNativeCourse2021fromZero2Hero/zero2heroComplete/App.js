/**
 * Sample React Native App
 * https://github.com/facebook/react-native
 *
 * @format
 * @flow strict-local
 */

import React from 'react';
import {
  StyleSheet,
  Text,
  View,Button,Linking
} from 'react-native';

import {
  Colors,
  DebugInstructions,
  Header,
  LearnMoreLinks,
  ReloadInstructions,
} from 'react-native/Libraries/NewAppScreen';

const Section = ({children, title}): Node => {
  const isDarkMode = useColorScheme() === 'dark';
  return (
    <View style={styles.sectionContainer}>
      <Text
        style={[
          styles.sectionTitle,
          {
            color: isDarkMode ? Colors.white : Colors.black,
          },
        ]}>
        {title}
      </Text>
      <Text
        style={[
          styles.sectionDescription,
          {
            color: isDarkMode ? Colors.light : Colors.dark,
          },
        ]}>
        {children}
      </Text>
    </View>
  );
};

const App: () => Node = () => {

  return (
    <View style={styles.body}>
      <Text style={styles.textColor}>Sawubona Mhlaba</Text> 
      <Button title='youtube Channel' onPress={()=>{Linking.openURL('https://youtube.com');}}></Button>
    </View>
  );
};

// Create a Stylesheet jsx object
const styles = StyleSheet.create({

  body:{
    flex: 1,
    backgroundColor: '#0000FF',
    alignItems: 'center',
    justifyContent:'center',
  },

  textColor:{
    backgroundColor:'#00ffff',
    color: '#f00',
    fontSize: 20,
    fontStyle: 'italic',
    margin: 10,
  }
});

export default App;
