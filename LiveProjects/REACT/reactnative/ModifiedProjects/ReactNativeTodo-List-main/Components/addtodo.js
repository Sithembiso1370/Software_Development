import React, {useState} from 'react';
import { StyleSheet, Text, View, TextInput,TouchableOpacity} from 'react-native';
import { Feather } from '@expo/vector-icons';  

export default function  AddTodo( {SubmitHandler} ) {
    const [text, setText] = useState('');

    const changeHandler = (val) => {
    setText(val);
    }
    
    return(
    <View style = {styles.main}>
    <TextInput
    multiline
    style = {styles.input}
    onChangeText = {changeHandler}
    value={text}
    />
    <TouchableOpacity>
    <View style = {styles.btn}>
    <Feather name="plus" size={40} color="#fff" onPress={() => SubmitHandler(text)}/>
    </View>
    </TouchableOpacity>
    </View>
    )
}

const styles = StyleSheet.create({
   main:{
   backgroundColor:"transparent",
   flexDirection:"row",
   justifyContent:"space-evenly",
   paddingBottom:20,
}, 
input: {
   color:"white",
   paddingHorizontal:10,
   elevation:3,
   paddingVertical:10,
   borderWidth: 0.3,
   borderRadius:30,
   borderColor:'#fff',
   width:"80%",
   backgroundColor:'#4e4e4e',
},
btn:{
   elevation:4,
   paddingVertical:10,
   paddingHorizontal:10,
   borderRadius:50,
   backgroundColor:'#4e4e4e', 
}
});