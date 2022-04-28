import React from 'react';
import { FlatList, StyleSheet, Text, View } from 'react-native';

// The FlatList component requires two props: data and renderItem. data is the source of information for the list. 
// renderItem takes one item from the source and returns a formatted component to render.
const FlatListBasics = () => {
    return (
      <View >
        <FlatList
          data={[
            {key: 'Devin'},
            {key: 'Dan'},
            {key: 'Dominic'},
            {key: 'Jackson'},
            {key: 'James'},
            {key: 'Joel'},
            {key: 'John'},
            {key: 'Jillian'},
            {key: 'Jimmy'},
            {key: 'Julie'},
          ]}
        //   Render each item of the list
          renderItem={({item}) => <Text style={styles.item}>{item.key}</Text>}
        />
      </View>
    );
  }
  
export default FlatListBasics;


const styles = StyleSheet.create({
    container: {
     flex: 1,
     paddingTop: 22
    },
    item: {
      padding: 10,
      fontSize: 18,
      height: 44,
      color: 'black',
      backgroundColor: 'red'
    },
  });