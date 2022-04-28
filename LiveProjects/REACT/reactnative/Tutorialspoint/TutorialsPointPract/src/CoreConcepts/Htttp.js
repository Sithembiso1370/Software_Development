
import React, { Component } from 'react'
import { View, Text , StyleSheet } from 'react-native'

// We will use the componentDidMount lifecycle method to load the data from server as soon as the component is mounted. 
// This function will send GET request to the server, return JSON data, log output to console and update our state.
class HttpExample extends Component {


    state = {
       data: ''
    }

    // We will use the componentDidMount lifecycle method to load the data from server as soon as the component is mounted. 
    componentDidMount = () => {
       fetch('https://jsonplaceholder.typicode.com/posts/1', {
          method: 'GET'
       })
       .then((response) => response.json())
       .then((responseJson) => {
          console.log(responseJson);
          this.setState({
             data: responseJson
          })
       })
       .catch((error) => {
          console.error(error);
       });
    }

    render() {
       return (
          <View style={styles.container}>
              <Text style={styles.httpViewTitle}>Web View Below</Text>
             <Text style={styles.httpView}>
                {this.state.data.body}
             </Text>
          </View>
       )
    }

 }

 const styles = StyleSheet.create({
    container: {
        width: "100%",
        height: "100%",
        backgroundColor: "#00ff",
        color: "#fff"
    },
    httpView: {
        color : "#ffffff",
    }
    ,   
     httpViewTitle: {
        color : "#ffffff",

     }
 })

 export default HttpExample
 