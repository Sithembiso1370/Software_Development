

var contentNode = document.getElementById('contents');
var component = React.createElement(
  'h1',
  null,
  'Hello World !'
); // A simple JSX component

// render the jsx componentto my element

ReactDOM.render(component, contentNode); // render the component inside the content Node