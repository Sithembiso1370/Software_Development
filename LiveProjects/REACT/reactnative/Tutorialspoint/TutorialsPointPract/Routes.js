import React from 'react'
import { Router, Scene } from 'react-native-router-flux'


import Home from './Home.js'
import About from './About.js'
import WebViewExample from './WebViewExample.js'

const Routes = () => (
   <Router>
      <Scene key = "root">
         <Scene key = "about" component = {About} title = "About"  />
         <Scene key = "home" component = {Home} title = "Home"  initial = {true} />
         <Scene key = "WebViewExample" component = {WebViewExample} title = "WebViewExample" />
      </Scene>
   </Router>
)
export default Routes