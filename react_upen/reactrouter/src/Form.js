import React, { Component } from 'react';
import './Form.css';


class Form extends Component{
constructor(props){
  super(props);

  this.state = {name: "Enter Your Name",
                email : "abc@xyz.com",
                number : "Enter your Mobile",
                message : "Enter your Message" }
}

// handlename = (event) => {
//  this.setState({ name: event.target.value })
//
// }
//
// handleemail = (event) => {
//  this.setState({ email: event.target.value })
//
//
// }
//
// handlenumber = (event) => {
//  this.setState({ number: event.target.value })
//
//
// }
//
// handlemessage = (event) => {
//  this.setState({ message: event.target.value })
//
//
// }

handlechange =(event) =>{
  this.setState( { [event.target.name] :event.target.value  } )
}

handlesubmit = (event) => {
  //alert (`my name is ${this.state.name}
      //    my Email is ${this.state.email}
      //    my Mobile No is ${this.state.number}
        //  my text is ${this.state.message}`);
alert( JSON.stringify(this.state));

console.log( JSON.stringify(this.state));

  event.preventDefault();

}

  render(){
    return(
      <div className="Form.css">
        <form onSubmit = {this.handlesubmit}>
          <label> FullName </label> <br />
          <input type="text" name="name" value={this.state.name} onChange={this.handlechange} /> <br />

          <label> Email </label> <br />
          <input type="email" name="email" value={this.state.email} onChange={this.handlechange} /> <br />

          <label> Mobile </label> <br />
          <input type="text" name="number" value={this.state.number} onChange={this.handlechange} /> <br />

          <label> Message </label> <br />
          <textarea name="message" value={this.state.message} onChange={this.handlechange} /> <br />

          <input type="submit" value="Send" />
        </form>
      </div>
    )
  }
}

export default Form;
