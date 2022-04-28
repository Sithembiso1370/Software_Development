import { Platform, StyleSheet } from 'react-native';


// React Native provides a module that detects the platform in which the app is running
const styles1 = StyleSheet.create({
    height: Platform.OS === 'ios' ? 200 : 100
  });


// There is also a Platform.select method available, that given an object where keys can be one of 'ios' | 'android' | 'native' | 'default', 
// returns the most fitting value for the platform you are currently running on
const styles = StyleSheet.create({
  container: {
    flex: 1,
    ...Platform.select({
      ios: {
        backgroundColor: 'red'
      },
      android: {
        backgroundColor: 'green'
      },
      default: {
        // other platforms, web for example
        backgroundColor: 'blue'
      }
    })
  }
});

// Detecting the Android version
if (Platform.Version === 25) {
    console.log('Running on Nougat!');
  }