import React, { Component } from 'react';
const $ = require("jquery")

export default class ActivePanel extends Component {

	render(){
		return(
			<div id='activePanel'>
				<button name = "takePart" id = "takePart"></button>
				<button name = "comment" id = "comment" ></button>
	            <button name = "like" id = "like"></button>
			</div>
		)
	}
}
