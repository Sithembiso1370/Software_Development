import logo from '../assets/logo.svg';
import '../styles/navbar.css';


function Navbar() {
  return (
    <div className="Nav">
      <img src={logo} className="App-logo" alt="logo" width="10%" height="50px"/>
      <h1 className="NavHeader">Navbar</h1>
    </div>
  );
}

export default Navbar;