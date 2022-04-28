// Create Variable to hold openweathermap API KEY
const WEATHER_API_KEY = "bbeb34ebf60ad50f7893e7440a1e2b0b";
// Create Variable to hold openweathermap API source page
const API_STEM = "http://api.openweathermap.org/data/2.5/weather?";



// Function to zip the url that will be passed in through fetchforecast function
function zipUrl(zip) {
  return `${API_STEM}q=${zip}&units=imperial&APPID=${WEATHER_API_KEY}`;
}



// Model Function : to make a call to the openweathermap api and return weather data
function fetchForecast(zip) {
  // Pass in the ziped url to the fetch promise
  return fetch(zipUrl(zip))
  // set the response equal to the json recieved
    .then(response => response.json())
    // From the res
    .then(responseJSON => {
      return {
        main: responseJSON.weather[0].main,
        description: responseJSON.weather[0].description,
        temp: responseJSON.main.temp
      };
    })
    // Incase of an error catch the error and log the error to the console
    .catch(error => {
      console.error(error);
    });
}


export default { fetchForecast: fetchForecast };
