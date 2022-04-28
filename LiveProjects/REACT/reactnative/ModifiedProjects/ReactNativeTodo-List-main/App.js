import { StatusBar } from "expo-status-bar";
import React, { useState } from "react";
import {
  StyleSheet,
  Text,
  View,
  FlatList,
  Alert,
  TouchableNativeFeedback,
  Keyboard,
} from "react-native";
import Header from "./Components/header";
import TodoItem from "./Components/todoitem";
import AddTodo from "./Components/addtodo";
import Sandbox from './Components/sandbox';

export default function App() {
  const [todo, setTodo] = useState([
    { text: "Buy Coffee", key: "1" },
    { text: "But Tea", key: "2" },
    { text: "Buy Biscuit", key: "3" },
  ]);
  const pressHandler = (key) => {
    setTodo((prevTodos) => {
      return prevTodos.filter((todo) => todo.key != key);
    });
  };
  const SubmitHandler = (text) => {
    if (text.length > 3) {
      setTodo((prevTodos) => {
        return [{ text: text, key: Math.random().toString() }, ...prevTodos];
      });
    } else {
      Alert.alert("OOPS", "Please Enter Long Text!", [
        { text: "Try Again", onPress: () => console.log("Alert Closed") },
      ]);
    }
  };

  return (
    // <Sandbox />
    <TouchableNativeFeedback onPress = {() => {
      Keyboard.dismiss();
      console.log('dismissed Keyboard')
    }}>
      <View style={styles.container}>
        <Header />
        <View style={styles.content}>
          <AddTodo SubmitHandler={SubmitHandler} />
          <View style={styles.list}>
            <FlatList
              data={todo}
              renderItem={({ item }) => (
                <TodoItem item={item} pressHandler={pressHandler} />
              )}
            />
          </View>
          <StatusBar  backgroundColor='#282828' />
        </View>
      </View>
    </TouchableNativeFeedback>
  );
}

const styles = StyleSheet.create({
  container: {
    flex: 1,
    backgroundColor: "#262626",
    
  },
  content: {
    padding: 40,
    flex:1,
  },
  list: {
    flex:1,
    marginTop: 20,
  },
});
