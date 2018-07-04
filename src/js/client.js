import React from "react";
import ReactDOM from "react-dom";
import { Router, Route, IndexRoute, hashHistory } from "react-router";

import { Provider } from 'react-redux';
import { createStore, applyMiddleware } from 'redux';
import thunk from 'redux-thunk';
import promise from 'redux-promise-middleware';
import createLogger from 'redux-logger';
import allReducers from './reducers';

import Layout from "./layouts/Layout";
import Ide from "./pages/Ide";

const app = document.getElementById('app');
const logger = createLogger();
const store = createStore(
  allReducers,
  applyMiddleware(thunk, promise, logger)
);

ReactDOM.render(
  <Provider store={store}>
    <Router history={hashHistory}>
      <Route path="/" component={Layout}>
        <IndexRoute component={Ide}></IndexRoute>
      </Route>
    </Router>
  </Provider>,
  app);