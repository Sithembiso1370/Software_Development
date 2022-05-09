import React from 'react'
import { useDispatch, useSelector } from 'react-redux'
import { increment,decrement } from './counterSlice'


function Counter() {
    // We can read data from the store with useSelector
    const count = useSelector((state) => state.counter.value)
    // dispatch actions using useDispatch
    const dispatch = useDispatch()
  return (
    <div>
     <div>
         {/* -------------------Increment button-------------- */}
        <button
          aria-label="Increment value"
          onClick={() => dispatch(increment())}
        >
          Increment
        </button>
        {/* COUNT */}
        <span>{count}</span>
        {/* ----------------DECREEMENT BUTTON------------- */}
        <button
          aria-label="Decrement value"
          onClick={() => dispatch(decrement())}
        >
          Decrement
        </button>
        {/* ------------------------------------ */}
      </div>
    </div>
  )
}

export default Counter