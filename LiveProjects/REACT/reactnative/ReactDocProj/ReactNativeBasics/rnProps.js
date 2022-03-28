
import React from "react";
import {Text,View,Image} from 'react-native';


function MyComp(props) {
    return (
        <View>
          <Image
            source={{uri: "https://reactnative.dev/docs/assets/p_cat1.png"}}
            style={{width: 200, height: 200}}
          />
          <Text>Hello, I am {props.name}</Text>
        </View>
    );
}

export default function RnProps(){
    return (
        <View>
            <MyComp name="Sithembiso"/>
            <MyComp name="Nkululeko"/>
            <MyComp name="Nosipho"/>
        </View>
    )
}


