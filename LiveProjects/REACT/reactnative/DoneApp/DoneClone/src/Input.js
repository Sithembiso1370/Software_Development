import React, {useState} from 'react';
import {StyleSheet, Text, View, TextInput} from 'react-native';

const Input = ({value, ...props}) => {
  const [textInput, setTextInput] = useState(value);
  return (
    <View>
      <TextInput
        value={textInput}
        onChangeText={text => setTextInput(text)}
        {...props}
      />
    </View>
  );
};

export default Input;

const styles = StyleSheet.create({});
