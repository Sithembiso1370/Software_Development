// The XMLHttpRequest API is built into React Native. This means that you can use third party libraries such as frisbee or axios that depend on it,
//  or you can use the XMLHttpRequest API directly if you prefer.

var request = new XMLHttpRequest();
request.onreadystatechange = (e) => {
  if (request.readyState !== 4) {
    return;
  }

  if (request.status === 200) {
    console.log('success', request.responseText);
  } else {
    console.warn('error');
  }
};

request.open('GET', 'https://mywebsite.com/endpoint/');
request.send();