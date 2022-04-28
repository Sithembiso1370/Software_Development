import React from 'react';
import { StyleSheet, Text, View } from 'react-native';

class HomeScreen extends React.Component {
  render() {
    return (
      <View style={styles.container}>
        <Text>You have (undefined) friends.</Text>
      </View>
    );
  }
}

// ...

export default HomeScreen;