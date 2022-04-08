/**
 * Sample React Native App
 * https://github.com/facebook/react-native
 *
 * Generated with the TypeScript template
 * https://github.com/react-native-community/react-native-template-typescript
 *
 * @format
 */

import React from 'react';
import {
  SafeAreaView,
  StatusBar,
  useColorScheme,Text,
} from 'react-native';

import {
  Colors,
} from 'react-native/Libraries/NewAppScreen';





const App = () => {
  const isDarkMode = useColorScheme() === 'dark';

  const backgroundStyle = {
    backgroundColor: isDarkMode ? Colors.darker : Colors.lighter,
  };

  return (
    <SafeAreaView style={backgroundStyle}>
      <StatusBar barStyle={isDarkMode ? 'light-content' : 'dark-content'} />
      <Text> Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate similique eveniet earum sit temporibus incidunt voluptatum eos velit, obcaecati soluta qui facere nemo placeat debitis explicabo minus! Mollitia, veniam quod. </Text>
    </SafeAreaView>
  );
};



export default App;
