import React from 'react'
import { View, Text,Button} from 'react-native'




const HandlingTouchesEx = () => {

    return (
        <View>
            <Text>Touch the buton below</Text>
            <Button
            onPress={() => {
                alert('You tapped the button!');
            }}
            title="Press Me"
            />
        </View>
    );
};



export default HandlingTouchesEx;