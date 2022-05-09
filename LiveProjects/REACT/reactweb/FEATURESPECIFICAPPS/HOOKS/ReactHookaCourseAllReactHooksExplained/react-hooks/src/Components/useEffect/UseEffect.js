import React from 'react'
// Import axios for making api calls
import axios from 'axios'
import { useEffect, useState } from 'react';


// THE UseEffect hook
//  - Is used when I need to do something Imediatly as the page has renders
//  used mostly for api calls
function UseEffectEx() {

  const [data, setData] = useState("");
  const [count, setCount] = useState(0);

  // Logs to the console everytime i refresh the page
  // useEffect(() => {console.log("hellow World")});

  useEffect(() => { 
    axios
    .get("https://jsonplaceholder.typicode.com/comments")
    .then((response)=>{
      setData(response.data[Math.floor(Math.random() * 10)].email);
      
      console.log(response.data.length);
    })
  },[count]);


  return (
    <div>
      UseEffect Data = {data}
      
      <button onClick={()=> {setCount(count +1)}}>COUNTER ({count})</button>
    </div>
  )
}

export default UseEffectEx
