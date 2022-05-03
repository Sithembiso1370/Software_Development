import React,{useState} from 'react';


const InputStateExample = () =>{
    const [inputValue, setInputValue] =  useState('Sithembiso');

    const displayInp = (event) => {
        setInputValue(event.target.value);
    }

    return (
        <div>
            <input placeholder='Enter Something' onChange={displayInp}/> 
                {inputValue}
        </div>
    );
}

export default InputStateExample;