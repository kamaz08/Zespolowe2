import React, { Component } from 'react';
import TopUserInfo from './TopUserInfo'
import ChallangePhoto from './ChallangePhoto'
import ActivePanel from './ActivePanel'
import Descriptions from './Descriptions'

export default class ListElement extends Component {

	render(){
		return(
			<li>
				<TopUserInfo />
				<ChallangePhoto />
				<ActivePanel />
				<Descriptions />
			</li>
		)
	}
}
