import React, { Component } from "react";  
import { StyleSheet, TextInput, View , Button } from "react-native";  
  
export default class PositioningEx extends Component {  
    state = {  
        placeName: "",  
        places: []  
    };  
  
    placeNameChangedHandler = val => {  
        this.setState({  
            placeName: val  
        });  
    };  
  
    placeSubmitHandler = () => {  
        alert("button clicked")  
    };  
  
    render() {  
        return (  
            <View style={styles.container}>  
                <TextInput  
                        placeholder="An awesome place"  
                        onChangeText={this.placeNameChangedHandler}  
                        style={styles.placeInput}  
                />  
                <Button  
                        title="Button"  
                        onPress={this.placeSubmitHandler}  
                />  
            </View>  
        );  
    }  
}  
  
const styles = StyleSheet.create({  
    container: {  
        flex: 1,  
        padding: 26,  
        backgroundColor: "#fff",  
        justifyContent: "flex-start"  
    }  
});  