import React from 'react';
import './Avatar.css';
import 'tachyons';

const Avatarlist = (props) => {
  return (
    <div className="avatarstyle ma4 pa3 bg-light-blue dib tc grow shadow-4">
            <img src={`https://joeschmoe.io/api/v1/${props.name}`} alt="Avatar" />
            <h1> {props.name}</h1>
            <p> {props.work}</p>
        </div>

      )

}

export default Avatarlist;
