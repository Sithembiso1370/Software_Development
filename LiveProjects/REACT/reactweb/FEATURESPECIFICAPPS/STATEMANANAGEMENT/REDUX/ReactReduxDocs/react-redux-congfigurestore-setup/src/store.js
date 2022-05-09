// Import the configureStore API from Redux Toolkit.
import { configureStore } from "@reduxjs/toolkit";
// Add Slice Reducers to the Store
// Next, we need to import the reducer function from the counter slice and add it to our store
import counterReducer from "./features/counter/counterSlice";

// This creates a Redux store
// and also automatically configure the Redux DevTools extension so that you can inspect the store while developing.
export const store = configureStore({
    reducer: {
        // By defining a field inside the reducer parameter, 
        // we tell the store to use this slice reducer function to handle all updates to that state.
        counter: counterReducer,
    },
})