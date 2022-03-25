import React from 'react';
import type {Node} from 'react';
import { Component } from "react/cjs/react.production.min";
import {
    SafeAreaView,
    StyleSheet,
    Text,
    useColorScheme,
    View,TextInput,ScrollView,Image,
  } from 'react-native';


export default class CoreComps extends Component {

    render(){
        return (
            // Combine React Native Core components
            <View>
                <Text>React Native Text Component</Text>
                <View>
                <Text>React Native Text Component</Text>
                <Image
                    source={{
                    uri: 'https://reactnative.dev/docs/assets/p_cat2.png',
                    }}
                    style={{ width: 200, height: 200 }}
                />
                </View>
                <TextInput
                style={{
                    height: 40,
                    borderColor: 'gray',
                    borderWidth: 1
                }}
                defaultValue="You can type in here : "
                />
          </View>
        )
    }


}