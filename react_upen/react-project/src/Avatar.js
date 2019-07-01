import React,{Component} from 'react';
import './Avatar.css';
import 'tachyons';
import Avatarlist from './Avatarlist';



class Avatar extends Component{




  render() {

    const avatarlistarray = [
    {
      id:1,
      name:"Upen Jaiswal",
      work:"Web Developer"
    },

    {
      id:2,
      name:"Rajan Singh",
      work:"Frontend Developer"
    },

    {
      id:3,
      name:"Rohit Bhati",
      work:"Database Developer"
    },

    {
      id:4,
      name:"Sunaina Gupta",
      work:"Backend Developer"
    }
  ]

  const arrayavatarcard = avatarlistarray.map( (avtarcard, i) => {
    return <Avatarlist id={avatarlistarray[i].id}
               name={avatarlistarray[i].name}
               work={avatarlistarray[i].work}/>
  })
          return (
    <div className="mainpage">
    <h1> Welcome to Avatar World</h1>
       {arrayavatarcard}
    <button>Subscribe </button>
      </div>
      )
  }

}



export default Avatar;
