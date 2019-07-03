import React from 'react';
import logo from './logo.svg';
import './App.css';
import Menu from './Menu';
import About from './About';
import Contact from './Contact';
import {BrowserRouter, Route, Switch} from 'react-router-dom';


function App() {
  return (
    <BrowserRouter>
      <div className="Menustyle" >
        <Menu />
        <Switch>
        <Route path="/" exact component={Home}/>
        <Route path="/about" component={About}/>
        <Route path="/contact" component={Contact}/>
        </Switch>
       </div>
    </BrowserRouter>
  );
}


const Home = () => {
  return(
    <div className="Homestyle">
        <h2>Welcome to Home page</h2>
    </div>
  )
}

export default App;
