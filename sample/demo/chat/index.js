import './styles.css';
import './components/chateng.js'
import './exsample.js'
import React from 'react';
import ReactDOM from 'react-dom';
import Chat from './components/chat';
import Video from './components/video';


const Link = ReactRouterDOM.Link;
const Route = ReactRouterDOM.Route;
const Provider = ReactRedux.Provider
const initialState = {
  result: 1, 
  lastValues: []
}


const reducer = (state = initialState, action) => {
  switch (action.type){
    case "ADD": 
        state = {
          ...state,
          result : state.result + action.payload,
          lastValues: [...state.lastValues, action.payload]
        }          
      break;
  }
  return state;
};  
const store = Redux.createStore(reducer);

store.subscribe( () => {
  console.log('Store updated!', store.getState());
})

store.dispatch({ type: "ADD", payload: 10 })

const App = () => (
  <ReactRouterDOM.HashRouter>
    <ul>
      <li><Link to="/chat">Chat</Link></li>
      <li><Link to="/video">Video</Link></li>
    </ul>
    <Route path="/chat" component={Chat} />
    <Route path="/video" component={Video} />
  </ReactRouterDOM.HashRouter>
)


//ReactDOM.render(<App />, document.querySelector('#index'));

ReactDOM.render(<Provider store={store}><App a="1111"/></Provider>, document.getElementById('index'));
