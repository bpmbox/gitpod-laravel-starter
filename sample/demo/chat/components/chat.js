import React, { useState, useEffect } from 'react';
import { TransitionGroup, CSSTransition } from 'react-transition-group';
import FormInput from './FormInput';
import SheetButton from './SheetButton';
import "./styles.css"
import "../exsample.js"
//import View from '../exsample'
//import { StyleSheet, Text, View } from 'react-native-web';
////
// This is a wrapper for google.script.run that lets us use promises.
//import server from '../../utils/server';
//import * as test from '../util/chat'
//require("./chateng.js")
//const { serverFunctions } = server;
//test.alt()
const Chat = (prop) => {
  const [names, setNames] = useState([]);
  //alert(prop.a)
  //alert("tet")
  //alert(prop.a)
  //

  const config = {
	apiKey: "AIzaSyCsOjFyAAuFr1CITcnufG-GpZBKpLgUP90",
	authDomain: "rpa999-56929.firebaseapp.com",
	databaseURL: "https://rpa999-56929.firebaseio.com",
	projectId: "rpa999-56929",
	storageBucket: "rpa999-56929.appspot.com",
	messagingSenderId: "155298248089",
	appId: "1:155298248089:web:e25d64dc9f5370c4"
  };
  
  //firebase.initializeApp(config);
  

  useEffect(() => {
	//alert(prop.a)
    // Call a server global function here and handle the response with .then() and .catch()
    /*serverFunctions
      .getSheetsData()
      .then(setNames)
      .catch(alert);*/
  }, []);

  const deleteSheet = sheetIndex => {
    /*serverFunctions
      .deleteSheet(sheetIndex)
      .then(setNames)
      .catch(alert);*/
  };

  const setActiveSheet = sheetName => {
    /*serverFunctions
      .setActiveSheet(sheetName)
      .then(setNames)
      .catch(alert);*/
  };

  const click = event =>{
	  //alert(event.target.value)
	  /*
	  var messagesRef = firebase.database().ref().child('messages')
	  messagesRef.push({
		  name: event.target.value,
		  text: event.target.value
	  });*/
  }

  const wScroll = ()=> {
	//console.log(messageFeed.scrollTop);
	var mediaExpand = document.getElementById("media-expand-arrow");
	var mediaBar = document.getElementById("media-bar");
	var mediaCross = document.getElementById("media-bar-cross");
	var messageFeed = document.querySelector("#message-feed")//document.getElementById("message-feed");
	alert(JSON.stringify(messageFeed))
	//messageHeight = messageFeed.offsetHeight;

	var heightToScroll = (130);
	var header = document.getElementById('header');

	if (messageFeed.scrollTop > heightToScroll) {
	  header.className = "header header-scrolled"
	  messageFeed.className = "message-feed message-feed-scrolled"
	}
	else if (messageFeed.scrollTop < 1) {
		header.className = "header header-unscrolled"
		messageFeed.className = "message-feed"
	}
	
	// const list = document.getElementById('chatobj');
//リストアイテムを挿入
//list.insertAdjacentHTML('beforeend', '<li>ADD ITEM</li>');
//スクロールバーの位置をリストの最下部に設定
//list.scrollTo(0, list.scrollHeight);
	
};

//messageFeed.addEventListener("scroll", wScroll, false);



  const handleChange = event => {
	  //alert("click")
	  //alert(event.target.value)
	  
	  //var messagesRef = firebase.database().ref().child('messages')
	  /*messagesRef.push({
		  name: event.target.value,
		  text: event.target.value
	  });*/
	  //wScroll();
   // this.setState({value: event.target.value});
  }

  // You can also use async/await notation for server calls with our server wrapper.
  // (This does the same thing as .then().catch() in the above handlers.)
  const submitNewSheet = async newSheetName => {
    try {
      //const response = await serverFunctions.addSheet(newSheetName);
      //setNames(response);
    } catch (error) {
      // eslint-disable-next-line no-alert
      alert(error);
    }
  };

  return (
	<div class="chat-ui-canvas">
		<div id="header" class="header header-scrolled">
			<div class="top-icons">
				<div class="back-arrow">
					<div class="back-arrow-line back-arrow-line-1"></div>
					<div class="back-arrow-line back-arrow-line-2"></div>
					<div class="back-arrow-line back-arrow-line-3"></div>
				</div>
				<div class="phone-icon">
					<img src="https://i.imgur.com/4OTkocV.png" height="50%"/>
				</div>
			</div>
			<div class="user-header-image"></div>
			<div class="user-name-header">
				<h1>BPMS chat</h1>
			</div>
		</div>
		<div id="message-feed" class="message-feed message-feed-unscrolled">
			<div class="message message-from">
				<div class="message-name">
					<h1>文字おこし</h1>
				</div>
				<div class="message-body">
					<p>
						CHROME 対応　マイクを用意してください.
					</p>

					<iframe class="video" id="popup-YouTube-player" width="260" height="315" src="https://www.YouTube.com/embed/Afr77al2_JM?enablejsapi=1" frameborder="0" allowfullscreen></iframe>
  <button id="play">play</button>
  <button id="pause">pause</button>
  <button id="stop">stop</button>
  <button id="clear">clear</button>

  
				</div>
				<div class="message-timestamp">
					<p>Today 10:02</p>
				</div>
			</div>
			<div class="message message-to">
				<div class="message-name">
					<h1>You</h1>
				</div>
				<div class="message-body">
					<p>
						こんにちは　BPMCHAT　へ　業務フローと連動して作業をナビゲートします.
					</p>
				</div>
				<div class="message-timestamp">
					<p>Today 10:14</p>
				</div>
			</div>
			<div class="message message-from">
				<div class="message-name">
					<h1>BPMCHAT</h1>
				</div>
				<div class="message-body">
					<p>
						音声、または　テキストに業務項目を登録するとナビゲートが始まります　説明はこちら
					</p><a href="https://bpmchat.com" target="_blunk">BPMCHAT説明</a>
				</div>
				<div class="message-timestamp">
					<p>Today 10:20</p>
				</div>
			</div>
		</div>
		<div class="message-input-bar">
			<div id="media-expand-arrow" class="media-expand-arrow">
				<div class="media-expand-arrow-line media-expand-arrow-line-1"></div>
				<div class="media-expand-arrow-line media-expand-arrow-line-2"></div>
				<div class="media-expand-arrow-line media-expand-arrow-line-3"></div>
			</div>
			<div class="message-text-input">
				<form class="message-send">
					<textarea id="message-input" placeholder="Message..." value="" onClick={handleChange} ></textarea>
					<textarea id="status" placeholder="Message..." value=""></textarea>

				</form>
			</div>
		</div>
		<div id="media-bar" class="media-bar">
			<div class="media-bar-header">
				<div class="media-bar-title">
					<h1>Media</h1>
				</div>
				<div id="media-bar-cross" class="media-close">
					<div class="media-close-line media-close-line-1"></div>
					<div class="media-close-line media-close-line-2"></div>
				</div>
			</div>
			<div class="media-bar-body">
				<div class="media-buttons-canvas">
					<div class="media-button media-video">
						<img src="https://imgur.com/x9NDjYV.png"/>
					</div>
					<div class="media-button media-image">
						<img src="https://imgur.com/0Sw4F6i.png"/>
					</div>
					<div class="media-button media-audio">
						<img src="https://imgur.com/2KlzOiN.png"/>
					</div>
					<div class="media-button media-location">
						<img src="https://imgur.com/OvqVDk5.png"/>
					</div>
				</div>
			</div>
		</div>
	</div>
  );
};

export default Chat;
