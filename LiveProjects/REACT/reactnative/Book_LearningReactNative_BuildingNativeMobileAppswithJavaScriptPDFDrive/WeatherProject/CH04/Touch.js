import React, { Component } from "react";
import { StyleSheet, Text, View, TouchableHighlight } from "react-native";


// Try editing this button to respond to other events, by using hooks like onPress and
// onLongPress. The best way to get a sense for how these events map onto user interac‐
// tions is to experiment using a real device.
class Button extends Component {
  constructor(props) {
    super(props);
    this.state = { pressing: false };
  }

  _onPressIn = () => {
    this.setState({ pressing: true });
  };

  _onPressOut = () => {
    this.setState({ pressing: false });
  };

  render() {
    return (
      // Create a Container Component
      <View style={styles.container}>
        {/* Create a touchable highlight to enable touchable features */}
        <TouchableHighlight
        // Call the _onPressin method created when touchable is pressed in
          onPressIn={this._onPressIn}
          // Call the _onPressOut method created when touchable is released
          onPressOut={this._onPressOut}
          // implement styles from the styles object
          style={styles.touchable}
        >

          <View style={styles.button}>
            <Text style={styles.welcome}>
              {this.state.pressing ? "EEK!" : "PUSH ME"}
            </Text>
          </View>

        </TouchableHighlight>
      </View>
    );
  }
}

const styles = StyleSheet.create({
  container: {
    flex: 1,
    justifyContent: "center",
    alignItems: "center",
    backgroundColor: "#F5FCFF"
  },
  welcome: { fontSize: 20, textAlign: "center", margin: 10, color: "#FFFFFF" },
  touchable: { borderRadius: 100 },
  button: {
    backgroundColor: "#FF0000",
    borderRadius: 100,
    height: 200,
    width: 200,
    justifyContent: "center"
  }
});

export default Button;