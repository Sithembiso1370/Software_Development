import react, {useState} from "react";
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
      if (session.number < 10) {
        setSession({ number: ++session.number, title: 'STATES'});
      }
      else if(session.number == 10){
        setSession({ number: 0, title: 'NOT STATES'});
      }
    }
  
    return(
        <View style={styles.body}>

            <Text style={styles.textColor}>Sawubona Mhlaba</Text> 
            <Button title='youtube Channel' onPress={()=>{Linking.openURL('https://youtube.com');}}></Button>
    
            <Text style={styles.textColor}>{name}</Text>
            <Button title='Update State' onPress={onClickHandlerState}></Button>
    
            <Text 
            style={styles.textColor}>My Session Vars : Session.title => {session.title} , Session.number =>{session.number} 
            </Text>
            <Button title='Update Session' onPress={onClickHandlerSession}></Button>
  
      </View>
    );
    
};


// Create a Stylesheet jsx object
const styles = StyleSheet.create({

  body:{
    flex: 1,
    backgroundColor: '#0000FF',
    alignItems: 'center',
    justifyContent:'center',
  },

  textColor:{
    backgroundColor:'#00ffff',
    color: '#f00',
    fontSize: 20,
    fontStyle: 'italic',
    margin: 10,
  }
});


export default OnClickH;