import React, { Component } from 'react'
import {Link} from 'react-router'
import $ from 'jquery';


export default class LoginButton extends Component {


  render() {
    return (
       <div className = 'divButton'>
       		 <Link to='UserPanelLayout'><button className = 'Button ' id='loginButton'> Zaloguj</button></Link>
       	</div>
    );
  }
}
