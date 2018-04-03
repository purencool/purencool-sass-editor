import React from "react";
import ReactDOM from "react-dom";
import { Router, Route, IndexRoute, hashHistory } from "react-router";

import Layout from "./layouts/Layout";
import Ide from "./pages/Ide";
import Articles from "./pages/Articles";
import Video from "./pages/Video";

const app = document.getElementById('app');

ReactDOM.render(
  <Router history={hashHistory}>
    <Route path="/" component={Layout}>
      <IndexRoute component={Ide}></IndexRoute>
      <Route path="articles(/:article)" name="articles" component={Articles}></Route>
      <Route path="video" name="video" component={Video}></Route>
    </Route>
  </Router>,
app);