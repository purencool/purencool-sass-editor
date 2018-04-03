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
   *  Received request from server add it to
   *  react component so that it can be rendered
   *  @todo need to add title from server
   */
  componentDidMount() {
    /*
    ApiCalls.articleData()
      .then(function(data){
        const newData = data.map(c => {
          return  c.attributes.title;
        })
        const addElement = newData.map((title, i) => <ContentTiles key={i} title={title}/> );
        const newState = Object.assign({}, this.state, {
           newData: addElement
        });
        this.setState(newState);
      }.bind(this));
      */
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
