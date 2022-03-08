import React, { useState, useEffect } from 'react';
import { TransitionGroup, CSSTransition } from 'react-transition-group';
import FormInput from './FormInput';
import SheetButton from './SheetButton';

// This is a wrapper for google.script.run that lets us use promises.
import server from '../../utils/server';
//import * as test from '../util/chat'
//require("./chateng.js")
const { serverFunctions } = server;
//test.alt()
const Viedo = () => {
  const [names, setNames] = useState([]);

  useEffect(() => {
    // Call a server global function here and handle the response with .then() and .catch()
    serverFunctions
      .getSheetsData()
      .then(setNames)
      .catch(alert);
  }, []);

  const deleteSheet = sheetIndex => {
    serverFunctions
      .deleteSheet(sheetIndex)
      .then(setNames)
      .catch(alert);
  };

  const setActiveSheet = sheetName => {
    serverFunctions
      .setActiveSheet(sheetName)
      .then(setNames)
      .catch(alert);
  };

  // You can also use async/await notation for server calls with our server wrapper.
  // (This does the same thing as .then().catch() in the above handlers.)
  const submitNewSheet = async newSheetName => {
    try {
      const response = await serverFunctions.addSheet(newSheetName);
      setNames(response);
    } catch (error) {
      // eslint-disable-next-line no-alert
      alert(error);
    }
  };

  return (
    <div>
    <iframe class="video" id="popup-YouTube-player" width="560" height="315" src="https://www.YouTube.com/embed/Afr77al2_JM?enablejsapi=1" frameborder="0" allowfullscreen></iframe>
    <button id="play">play</button>
    <button id="pause">pause</button>
    <button id="stop">stop</button>
    <button id="clear">clear</button>
    </div>
  );
};

export default Viedo;
