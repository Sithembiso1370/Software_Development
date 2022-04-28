import React, { Component } from 'react'
import { Image } from 'react-native'

const ImagesExample = () => (

    // Local image source
//    <Image source = {require('../img/img2.jpg')} />
    //    NETWORK IMG SOURCE
    // It is recommended to define the width and the height for network images.
    <Image source = {{uri:'https://pbs.twimg.com/profile_images/486929358120964097/gNLINY67_400x400.png'}}
    style = {{ width: 200, height: 200 }}/>
    )
export default ImagesExample