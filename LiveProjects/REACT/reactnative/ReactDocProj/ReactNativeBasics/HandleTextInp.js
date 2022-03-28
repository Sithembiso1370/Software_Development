import React,{useState} from "react";
import {Text, TextInput, View} from 'react-native';


// Hook functional component
const PizzaTranslator = () => {
    const [text, setText] = useState('');


    return (
        // Main View holder
      <View style={{padding: 10}}>
          {/* TEXT INPUT HOLDER */}
        <TextInput
          style={{height: 40}}
          placeholder="Type here to translate!"
        //   On change method of text input
          onChangeText={newText => setText(newText)}
        //   Default value for text is " "
          defaultValue={text}
        />
        {/* for each word in the string typed map each word to a pie image to be displayed */}
        <Text style={{padding: 10, fontSize: 42}}>
          {text.split(' ').map((word) => word && '🍕').join(' ')}
        </Text>
      </View>
    );

  }
  
  export default PizzaTranslator;