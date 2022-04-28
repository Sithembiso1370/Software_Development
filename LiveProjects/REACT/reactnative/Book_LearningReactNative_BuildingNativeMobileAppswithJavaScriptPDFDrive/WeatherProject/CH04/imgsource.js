import React from 'react';
import { View, Text, StyleSheet,Image, ImageBackground } from 'react-native';



const ImgSource = () => {
  return(
      <View>
        <ImageBackground source={require('../src/imgsrc.jpg')} 
        style={{width: "100%", height: "100%"}} >  
            <View>
                <Text style={{ color:"white"}}>Hello umage text</Text>
            </View>
        </ImageBackground>
      </View>
  );
};



export default ImgSource;















// <Image source={{uri: 'https://facebook.github.io/react/img/logo_og.png'}} style={{width: 400, height: 400}} />
