import React, { Component } from "react";

import { StyleSheet, Text, View, TextInput, Image } from "react-native";

import Forecast from "./Forecast";
import OpenWeatherMap from "./open_weather_map";

class WeatherProject extends Component {
  // Constructor of the weather Component
  constructor(props) {
    // Instantiate the props of the component
    super(props);
    // Set the innitial state for the zip code and forcast attributes of the state
    this.state = { zip: "", forecast: null };
  }

  // Function to handle the text change event which takes the event as a parameter
  _handleTextChange = (event) => {
    // Grab the text of the event propagater and store as my input zip
    let zip = event.nativeEvent.text;

    // TESTS
    console.log(event.nativeEvent.text);

    OpenWeatherMap.fetchForecast(zip).then(forecast => {
      this.setState({ forecast: forecast });
    });


  };

  render() {
    // Set the initial state of the weather forcast to null so that if no data is returned
    // No error is visible to the user only 
    let content = null;

    // If the state is not null set the content view to the Forecast component passed in forecast data
    if (this.state.forecast !== null) {
      content = (
        <Forecast
          main={this.state.forecast.main}
          description={this.state.forecast.description}
          temp={this.state.forecast.temp}
        />
      );
    }


    return (
      // Create a view container
      <View style={styles.container}>
        {/* Add image component to nest a sub view for forecast */}
        <Image
        // get the image source
          source={require("./flowers.png")}
          resizeMode="cover"
          style={styles.backdrop width: 100, height: 100}
        >
          <View style={styles.overlay}>
            <View style={styles.row}>
              <Text style={styles.mainText}>
                Current weather for
              </Text>
              <View style={styles.zipContainer}>
                <TextInput
                  style={[styles.zipCode, styles.mainText]}
                  onSubmitEditing={this._handleTextChange}
                  underlineColorAndroid="transparent"
                />

              </View>
            </View>

            {/* DISPLAy WEATHER FORECAST OR EMPTY SCREEN */}
            {content}
          </View>
        </Image>
      </View>
    );
  }
}

const baseFontSize = 16;

const styles = StyleSheet.create({
  container: { flex: 1, alignItems: "center", paddingTop: 30 },
  backdrop: { flex: 1, flexDirection: "column" },
  overlay: {
    paddingTop: 5,
    backgroundColor: "#000000",
    opacity: 0.5,
    flexDirection: "column",
    alignItems: "center"
  },
  row: {
    flexDirection: "row",
    flexWrap: "nowrap",
    alignItems: "flex-start",
    padding: 30
  },
  zipContainer: {
    height: baseFontSize + 10,
    borderBottomColor: "#DDDDDD",
    borderBottomWidth: 1,
    marginLeft: 5,
    marginTop: 3
  },
  zipCode: { flex: 1, flexBasis: 1, width: 50, height: baseFontSize },
  mainText: { fontSize: baseFontSize, color: "#FFFFFF" }
});

export default WeatherProject;
