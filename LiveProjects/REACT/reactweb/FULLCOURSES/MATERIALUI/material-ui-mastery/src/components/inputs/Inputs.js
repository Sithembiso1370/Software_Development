import React from 'react'
import { Button } from '@mui/material';
import ComboBox from './ComboBox';
import ControllableStates from './ControlledStates';
import FreeSolo from './SearchInput';
import Playground from './Autocomplete';

export default function Inputs() {

    const renderAlert = () =>{
        alert("button clicked");
    }


  return (
    <div>
        <h1>Inputs</h1>
      <Button variant="contained" onClick={renderAlert}>Hello World</Button>
      <hr/>
      <ComboBox/>
      <hr/>
      <ControllableStates/>
      <hr/>
      <FreeSolo/>
      <hr/>
      <Playground/>
    </div>
  )
}
