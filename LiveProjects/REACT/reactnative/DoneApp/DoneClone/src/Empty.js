import React from 'react';
import {StyleSheet, Text, View, Image, Dimensions} from 'react-native';
import empty from '../assets/Image/empty.png';
const Empty = () => {
  return (
    <View style={{flex: 1}}>
      <Image source={empty} style={styles.image} />
      <Text style={{fontSize: 18, textAlign: 'center', marginBottom: 5}}>
        No Tasks
      </Text>
      <Text style={{fontSize: 14, textAlign: 'center'}}>
        Create Shopping link and todo Items
      </Text>
    </View>
  );
};

export default Empty;

const styles = StyleSheet.create({
  image: {
    width: Dimensions.get('screen').width / 1,
    height: Dimensions.get('screen').height / 1.5,
    resizeMode: 'contain',
    alignSelf: 'center',
  },
});
