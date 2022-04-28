import React, {useState} from "react";
import { Component } from "react/cjs/react.production.min";
import {
  StyleSheet,
  Text,
  View,Button,Linking
} from 'react-native';
import {
  Colors,
  DebugInstructions,
  Header,
  LearnMoreLinks,
  ReloadInstructions,
} from 'react-native/Libraries/NewAppScreen';



const  OnClickH = () => {
    const [name, setName] = useState('Sthe');
    const [session, setSession] = useState({ number: 0, title: 'States'})
    const [current,setCurrent] = useState(true)
  
    // External function created to deal with click events can be called by any element with  access to the onPress Method
    const onClickHandlerState = () => {
         setName('Nkululeko');
    }
  
    
    // External function created to deal with click events can be called by any element with  access to the onPress Method
   const onClickHandlerSession = () => {
      if (session.number < 5) {
        // Mdify the session hook
        setSession({ number: ++session.number, title: 'STATES'});
        setCurrent(true);

      }
      else if(session.number == 5){
        setSession({ number: 0, title: 'NOT STATES'});
        setCurrent(false);
      }
    }
  
    return(
        <View style={styles.body}>
            {/* START OF THE YOUTUBE LINK */}
            <Text >Sawubona Mhlaba</Text> 
            <Button title='youtube Channel' onPress={()=>{Linking.openURL('https://youtube.com');}}></Button>
            {/* END OF THE YOUTUBE LINK */}
    
            {/* START OF THE ONCLICK BUTTON   */}
            <Text style={styles.textColor}>{name}</Text>
            <Button title='Update State' onPress={onClickHandlerState}></Button>
            {/* END OF THE ONCLICK BUTTON */}
    
            {/* START OF ANOTHER BUTTON SECTION */}
            <Text 
            style={styles.textColor}>{current}My Session Vars : Session.title => {session.title} , Session.number =>{session.number} 
            </Text>
            <Text style={styles.textColor}>{current ? 'current session : '+session.number : 'New Session'} </Text>
            <Button title='Update Session' onPress={onClickHandlerSession}></Button>
            {/* END OF ANOTHER BUTTON SECTION */}
  
      </View>

    );
    
};


// Create a Stylesheet jsx object
const styles = StyleSheet.create({

  body:{
    width: '100%',
    height: '50%',
    backgroundColor: '#ffffff',
    alignItems: 'center',
    justifyContent:'center',
    borderWidth: 10,
    borderColor: '#ff00ff',
    borderRadius: 10,
  },

  textColor:{
    backgroundColor:'#00ffff',
    color: '#f00',
    fontSize: 25,
    fontStyle: 'italic',
    margin: 10,
    textTransform: 'uppercase',
  }
});


export default OnClickH;