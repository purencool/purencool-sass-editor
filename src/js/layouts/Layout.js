import React from "react";
import { Link } from "react-router";


import Nav from "../components/layout/Nav";
import Toolbar from "../components/layout/Toolbar";
import Project from "../components/layout/Project";
import LiveStyleGuide from "../components/layout/LiveStyleGuide";
import Footer from "../components/layout/Footer";



export default class Layout extends React.Component {
  constructor(props) {
    super(props)

    this.layoutFileDataRequest = this.layoutFileDataRequest.bind(this);
    this.state = {
      newData: '',
      returnData: []
    }
  }

  /**
   *  Received request from server add it to 
   *  react component so that it can be rendered
   */
  layoutFileDataRequest(data) {
    this.setState({ returnData:data })
  }


  /**
   *  Render request
   */
  render() {
    const { location } = this.props;
    const title = this.state.newData;

    console.log(this.state.returnData);
    return (
      <div id="app-container" class={title}>
        <Nav location={location} />
        <main id="main">
          <h1>{title}</h1>
          <Toolbar />
          <section id="editor">
            {this.props.children}
          </section>
          <Project layoutFileDataRequest={this.layoutFileDataRequest} />
        </main>
        <LiveStyleGuide />
        <Footer />
      </div>
    );
  }
}
