import React from 'react';
import CounterStateExample from './CounterStateEx';
import InputStateExample from './InputStateExample';





const StateTutorial = () => {

    return (
        <div>
            <h1>States Tutorial</h1>
            <span>----------------<h2>Counter State Example</h2>----------------</span>
            <CounterStateExample/>
            <span>---------------<h2>Input State Example</h2>-----------------</span> 
            <InputStateExample/>
        </div>
    );
};


export default StateTutorial;