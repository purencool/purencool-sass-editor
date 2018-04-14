import React from "react";
import {Link} from "react-router";

import Nav from "../components/layout/Nav";
import Toolbar from "../components/layout/Toolbar";
import Project from "../components/layout/Project";
import Footer from "../components/layout/Footer";

export default class Layout extends React.Component {
  constructor() {
    super();
    this.state = {
      newData: ''
    }
  }



  /**
   *  Render request
   */
  render() {
    const {location} = this.props;
    const title = this.state.newData;
    return (
      <div id="app-container" class={title}>
        <Nav location={location}/>
        <main id="main">
          <h1>{title}</h1>
          <Toolbar/>
          <section id="editor">
            {this.props.children}
          </section>
          <Project/>
        </main>
        <Footer/>
      </div>
    );
  }
}
