import React from 'react';
import {Text, View} from 'react-native'


const getFullName = (firstName, secondName, thirdName) => {
    return firstName + " " + secondName + " " + thirdName;
}


const FunctionalComp = () => {
    return (
        <View>
            <Text>My name is {getFullName("Sithembiso","Sthera","Mpahanga")}</Text>
        </View>
    );
}

export default FunctionalComp;