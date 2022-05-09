import logo from './logo.svg';
import './App.css';
import { useSelector } from 'react-redux';

function App() {
  const counter = useSelector((state)=> state.counter);


  return (
    <div >
      <h1>Counter App</h1>
      <h2>{counter}</h2>
      <hr/>
      

    </div>
  );
}

export default App;
