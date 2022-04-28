import React,{useState} from 'react'
import {View, Text, TextInput, Image, Button} from 'react-native'

// Functional Custom component
// Pass in all the properties to the fuctional component
const Cat = (props) => {
    const [isHungry, setIsHungry] = useState(true);

    // My Custom component is a view that houses other components
    return (
      <View>
          {/* START IMAGE COMPONENENT */}
        <Image
        source={{uri: "https://reactnative.dev/docs/assets/p_cat1.png"}}
        style={{width: 200, height: 200}}
        />
        {/* START IMAGE COMPONENENT */}

        {/* START TEXT COMPONENT */}
        <Text>Hello{props.name}, and I am {isHungry ? "hungry" : "full"}!</Text>
        {/* END TEXT COMPONENT */}
        
        {/* START TEXT INPUT COMPONENT */}
        <TextInput
          style={{
            height: 40,
            borderColor: 'gray',
            borderWidth: 1
          }}
          defaultValue="Name me!"
        />
        {/* END TEXT INPUT COMPONENT */}

        {/* START BUTTON COMPONENT */}
        <Button
        onPress={() => {
          setIsHungry(false);
        }}
        disabled={!isHungry}
        title={isHungry ? "Pour me some milk, please!" : "Thank you!"}
        />
        {/* END BUTTON COMPONENT */}
        
      </View>
    );
  }
  
  export default Cat;