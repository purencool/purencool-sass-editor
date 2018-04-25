import React from "react";
import {Link} from "react-router";

import Nav from "../components/layout/Nav";
import Toolbar from "../components/layout/Toolbar";
import Project from "../components/layout/Project";
import LiveStyleGuide  from "../components/layout/LiveStyleGuide";
import Footer from "../components/layout/Footer";

export default class Layout extends React.Component {
  constructor(props){
    super(props)
    this.state = {
      newData: ''
    }
  }

  /**
   *  Received request from server add it to 
   *  react component so that it can be rendered
   */
  //fileDataRequest(data){
   // console.log('I am here in the layout '+data);
   // ApiCalls.readSassFile(data)
   // .then(function(serverData){
   //   this.setState({returnData: serverData[0].data })
   // }.bind(this));
  //}


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
          <Project />
        </main>
        <LiveStyleGuide/>
        <Footer/>
      </div>
    );
  }
}
