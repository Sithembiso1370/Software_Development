import { StyleSheet, Text, View } from 'react-native';
import React from 'react';
import { SafeAreaView } from 'react-native';
import tw from 'tailwind-react-native-classnames';
import { Image } from 'react-native';
import NavOptions from '../components/NavOptions';


const HomeScreen = () => {
  return (
    <SafeAreaView style={tw`bg-white h-full`}>
      <View style={tw`p-5`}>
            {/* START LOGO IMAGE */}
          <Image 
            style= {{
                width: 100,
                height:100,
                resizeMode: 'contain',
            }}
            source={{    
                uri:"https://links.papareact.com/gzs",
                }}
             />  
              {/*END LOGO IMAGE  */}

              <NavOptions/>

      </View>
    </SafeAreaView>
  );
};

export default HomeScreen;

const styles = StyleSheet.create({
    text:{
        color: "blue",
    },
});