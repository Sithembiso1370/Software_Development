import React,{ Component }  from 'react';
 import { StyleSheet, Text, View, ScrollView } from 'react-native';



 export default class StateUpdater extends React.Component {

    state = {
        myState : 'off',
        statesCount: 0
    }


    // Funtion to update the Apps State
    updateState = () => 
        this.setState(
            {myState : 'running' ,
            statesCount : this.state.statesCount+1
            }
        )

    // Funtion to refresh the Apps State
    refreshState = () => 
    this.setState(
        {myState : 'refreshed' ,
        statesCount : 0
        }
    )
    

    render(){
        return(
            <View style={styles.item}>
                <Text onPress= {this.updateState} >{this.state.myState}</Text>
                <Text onPress= {this.refreshState} >{this.state.statesCount}</Text>
            </View>
        );
    }
 }

 const styles = StyleSheet.create ({
    item: {
       flexDirection: 'row',
       justifyContent: 'space-between',
       alignItems: 'center',
       padding: 30,
       margin: 2,
       borderColor: '#2a4944',
       borderWidth: 1,
       backgroundColor: '#d2f7f1'
    }
 })