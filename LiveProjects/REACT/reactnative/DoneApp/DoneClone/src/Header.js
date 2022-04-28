import React from 'react';
import {StyleSheet, Text, View} from 'react-native';
import colors from '../assets/colors';

const Header = () => {
  return (
    <View style={styles.header}>
      <Text style={styles.Text}>Done</Text>
    </View>
  );
};

export default Header;

const styles = StyleSheet.create({
  header: {
    padding: 15,
    paddingHorizontal: 15,
    backgroundColor: 'white',
    elevation: 4,
  },
  Text: {
    fontWeight: 'bold',
    fontSize: 20,
    color: colors.gray,
  },
});
