import logo from './logo.svg';
import './App.css';
import { useState } from 'react';
import { Button, TextField } from '@mui/material';

function App() {
  const [todos, setTodos] =  useState(["initialState","added todo"]); 
  const [inputValue, setInputValue] = useState('');

    const   myTodoz = todos.map((todo)=>
      <li>{todo}</li>
    );

    const addTodo = (event)=>{
      // Prevent default event page refreshing to avoid state cleansng
      event.preventDefault();
      setTodos([...todos,inputValue]);
      // Clear the input value upon submit
      setInputValue("");
      alert(inputValue+" Input added!!");
    }

  return (
    <div className="App">
      <h1>Hello Clever Programmers  </h1>
      <form>
        <span >({ inputValue ? inputValue : "Type Someting.."})</span> 
        <hr/>
        <br/>
        {/* <TextField
            hiddenLabel
            id="filled-hidden-label-small"
            defaultValue="Small"
            variant="filled"
            size="small"
          /> */}
        <input onChange={(event)=>{setInputValue(event.target.value)}}/>
        {/* <button onClick={addTodo} type="submit">Add TODO  ({todos.length})</button> */}
        <Button disabled={!inputValue} variant="contained" color='primary' onClick={addTodo} type="submit">Add TODO  ({todos.length})</Button>
      </form>
      <ul>{myTodoz}</ul>
    </div>
  );
}



export default App;
