// Create a Redux State Slice
// import the createSlice API from Redux Toolkit.
import { createSlice } from "@reduxjs/toolkit";



// Creating a slice requires a string name to identify the slice, 
// an initial state value, and one or more reducer functions to define 
// how the state can be updated. Once a slice is created, 
// we can export the generated Redux action creators and the reducer 
// function for the whole slice.


const initialState = {
    value: 0,
}

export const counterSlice = createSlice({
    // Creating a slice requires a string name to identify the slice
    name: 'counter',
    // an initial state value
    initialState,
    // and one or more reducer functions to define how the state can be updated
    reducers: {
        increment: (state) =>{
            state.value += 1
        },
        decrement: (state) =>{
            state.value -= 1
        },
        incrementByAmount: (state, action)=>{
            state.value += action.payload
        },
    },
})

// Once a slice is created, 
// we can export the generated Redux action creators and the reducer 
// function for the whole slice.

// Action creators are generated for eact reducer function
export const {increment,decrement,incrementByAmount} = counterSlice.actions


export default counterSlice.reducer