import React from "react";
import {  Text, FlatList} from "react-native";
import { Touchable, TouchableOpacity, View, Image } from "react-native";
import tw from "tailwind-react-native-classnames";
import { Icon } from "@react-native-elements";



const data = [
    {
        id: "123",
        title: "Get a Ride",
        image: "https://links.papareact.com/3pn",
        screen: "MapScreen",
    },
    {
        id: "456",
        title: "Order Food",
        image: "https://links.papareact.com/28w",
        screen: "EatsScreen",
    },
];

// Navbar Component
const NavOptions = () =>{
    return (
        <FlatList
        data={data}
        horizontal
        keyExtractor={(item) => item.id}
        renderItem={ ({ item }) => (
            <TouchableOpacity
                style={tw`p-2 pl-6 pb-8 pt-4 bg-gray-200 m-2 w-40`} 
                >
                <View>
                    {/* DISPLAY EACH IMAGE  */}
                    <Image
                    style={{ width: 120, height:120, resizeMode: "contain" }}
                    source={{ uri: item.image }}
                    />
                    {/* DISPLAY TITLE */}
                    <Text style={tw`mt-2 text-lg font-semibold`}>{item.title}</Text>
                    <Icon
                    style={tw`p-2 bg-black`}
                     type='antdesign' name="arrowright" color="white" type="antdesign"
                    />
                </View>
            </TouchableOpacity>
        )}
        />
    );
};

export default NavOptions;


