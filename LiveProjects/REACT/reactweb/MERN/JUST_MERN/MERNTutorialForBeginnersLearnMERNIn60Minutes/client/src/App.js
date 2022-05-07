import {useState,useEffect} from "react";
import Axios from "axios";


function App() {
  // Use state hook Create a statefull variable holder to store the list of users
  const [listOfUsers, setListOfUsers] = useState([]);
  const [name, setName] = useState("");
  const [age, setAge] = useState(0);
  const [username, setUsername] = useState("");

  //useeffect hook to get users
  useEffect(() => {
    // /getUsers
    Axios.get("http://localhost:3001/getUsers").then((response)=>{
      setListOfUsers(response.data);
    });
  }, []);

  // Hook to create users
  const createUser = () =>{
    Axios.post("http://localhost:3001/createUser",{
      name,
      age,
      username,
    }).then((response) => {
      setListOfUsers([...listOfUsers,{name:name,age:age,username:username}]);
    });
  };

  return (
    <div className="App">
      {console.log(listOfUsers.length === 0)}
      <div className="userDisplay">

        {
          listOfUsers.length === 0 ?( 
        listOfUsers.map((user)=>{
          return (<div>
            <h1>Name: {user.name}</h1>
            <h1>Age: {user.age}</h1>
            <h1>Username: {user.username}</h1>
          </div>)
        }))
        : 
        (<h1>No Users added yet or network problems preventing something from working</h1>)
        }
      </div>

      <div>
        <input type="text"  placeholder={name === "" ? "Name.." : name} onChange={(event)=>{setName(event.target.value);}}/>
        <input type="number"  placeholder="Number.." onChange={(event)=>{setAge(event.target.value);}}/>
        <input type="text"  placeholder="Username.." onChange={(event)=>{setUsername(event.target.value);}}/>
        <button  onClick={createUser}>Create User</button>
      </div>
      <div>
        <h3>name : {name}</h3>
        <h3>name : {age}</h3>
        <h3>name : {username}</h3>
      </div>
    </div>
  );


}

export default App;
