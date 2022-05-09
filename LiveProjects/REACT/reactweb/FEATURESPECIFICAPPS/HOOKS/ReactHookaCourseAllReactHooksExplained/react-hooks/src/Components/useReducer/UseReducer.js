// Reducer Hook - 09/05/2022
// Use when I want to manipulate different state values at the same time
import React, {useReducer} from "react";

const reducerFn = (state, action) =>{
    // Create a switch to decide which action results in what call back
    switch (action.type) {
        case "INCREMENT":
            return  { count: state.count+1,showText: state.showText}
        case "DECREMENT":
            return  { count: state.count-1,showText: state.showText}
        case "toggleShowText":
            return  { count: state.count, showText: !state.showText}
        default:
            return  state;
    }
    
};


const ReducerTutorial = () =>{
    // Using the use state

    // Using the useReducer
    const [state, dispatch] = useReducer(reducerFn, {count: 0, showText: true});


    return (
        <div >
            <h1>Reducer Tutorial</h1>
            <h1>{state.count}</h1>
            <button 
                onClick={ () =>{
                    dispatch({ type: "INCREMENT"});
                    dispatch({ type: "toggleShowText"});
                }}
            >
                INCREMENT
            </button>
            <button 
                onClick={ () =>{
                    dispatch({ type: "DECREMENT"});
                    dispatch({ type: "toggleShowText"});
                }}
            >
                DECREMENT
            </button>
            {state.showText && <p>This is a text</p>}
        </div>
    );
}

export default ReducerTutorial