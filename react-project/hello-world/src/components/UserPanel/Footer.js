import React, { Component } from 'react';
import {Link} from 'react-router'
import UserPanelLayout from '../UserPanel/UserPanelLayout'


export default class Footer extends Component {

	constructor() {
		super();
		this.state = {active: 'Home'}
	}

	

	render(){
		return(

			<div id='footer'>
				<button className='footerButton' name = "user" id = "user"></button>
	            <Link to='UserPanelLayout'><button className='footerButton' name = "home" id = "home"></button></Link>
	       		<button className='footerButton' name = "addPhoto" id = "addPhoto"></button>
	       		<button className='footerButton' name = "likes" id = "likes"></button>
	       		<button className='footerButton' name = "search" id = "search"></button>
	       	</div>

		)
	}
}
