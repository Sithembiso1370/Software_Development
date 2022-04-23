import { useState } from 'react'
import { Navbar, Welcome, Footer, Services, Transactions } from './components'




const App = () => {
  const [count, setCount] = useState(0)

  return (
    <div className="min-h-screen">
      <div className="gradient-bg-welcome">
        <Navbar/>
        <Welcome/>
      </div>
      <Services/>
      <Transactions/>
      <Footer/>
    </div>
  )
}

export default App
