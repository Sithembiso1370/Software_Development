import React from 'react';
import type {Node} from 'react';
import {
  SafeAreaView,
  StyleSheet,
  Text,
  useColorScheme,
  View,
} from 'react-native';
import { Component } from 'react/cjs/react.production.min';



// Functional Component
export default function ReactComps() {
    return (
        <View style={{
            flex: 1,
            justifyContent: 'center',
            alignItems: 'center'
          }}>
          <Text>Hello, world!</Text>
        </View>
      );
}




// Class Component
// export default class ReactComps extends Component{
    

//     // Overide the abstract render function of the  Component Object
//     render(){
//         // return some View Object in JSX and XML
//         return (
//             <View 
//             // Inline view styles
//             style={{
//                 flex: 1,
//                 justifyContent: "center",
//                 alignItems: "center"
//               }}>
                  
//                 {/* Text view holder */}
//               <Text>Hello, world!</Text>
//             </View>
//         )
//     }
// }