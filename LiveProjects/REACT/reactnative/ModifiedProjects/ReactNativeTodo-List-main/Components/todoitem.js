import { StyleSheet, Text, TouchableOpacity, View } from "react-native";
import React from "react";
// import { MaterialIcons } from '@expo/vector-icons';
import { Entypo } from "@expo/vector-icons";

export default function TodoItem({ item, pressHandler }) {
  return (
    <View style={styles.item}>
      <Text style={styles.text}> {item.text} </Text>
      <TouchableOpacity onPress={() => pressHandler(item.key)}>
        <Entypo name="cross" size={30} color="#fff"/>
      </TouchableOpacity>
    </View>
  );
}
const styles = StyleSheet.create({
  item: {
    padding: 10,
    margin:10,
    paddingVertical:20,
    borderWidth: 0.4,
    borderColor: "#fff",
    backgroundColor:"#4e4e4e",
    borderRadius: 10,
    flexDirection: "row",
    justifyContent:'space-between'
  },
  text: {
    width:160,
    color:'#fff'
  },
});
