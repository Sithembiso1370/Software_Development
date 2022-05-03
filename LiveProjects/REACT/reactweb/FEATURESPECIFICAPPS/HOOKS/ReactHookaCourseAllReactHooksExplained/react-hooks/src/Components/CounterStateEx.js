
import React,{useState} from 'react';


const CounterStateExample = () => {
    // Using states
    // setting the initial value of the counter
    const [counter, setCounter] = useState(0);

    // Create increment function to be called when a button is clicked will increase the counter
    const increment = () =>{
        setCounter(counter + 1);
    }

    return (
        <div>
            <h1>hello {counter}</h1>
            <button onClick={increment}>increment</button>
        </div>
    );
};


export default CounterStateExample;