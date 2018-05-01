import React from "react";
import { Link } from "react-router";


import Nav from "../components/layout/Nav";
import Toolbar from "../components/layout/Toolbar";
import Project from "../components/layout/Project";
import LiveStyleGuide from "../components/layout/LiveStyleGuide";
import Footer from "../components/layout/Footer";



import ApiCalls from "../utils/ApiCalls";

export default class Layout extends React.Component {
  constructor(props) {
    super(props)

    this.layoutFileDataRequest = this.layoutFileDataRequest.bind(this);
    this.state = {
      newData: '',
      returnData: 'test',
      
    }
  }

  /**
   *  Received request from server add it to 
   *  react component so that it can be rendered
   */
  layoutFileDataRequest(data) {

    console.log(data);
    document.getElementById("ide-form-path").value = data;

    this.setState({ returnData:data })
    ApiCalls.readSassFile(data)
    .then(function (serverData) {
     
      this.setState({ returnData: serverData[0].data })
    }.bind(this));

     
  }

  componentDidMount() {
    this.renderChildren();  
  }
    

  renderChildren() {
    return React.Children.map(this.props.children, child => {
        return React.cloneElement(child, {
          data: this.state.returnData
        })
    });
  } 

  /**
   *  Render request
   * 
   * 
   */
  render() {
    const { location } = this.props;
    const title = this.state.newData;
    const returnData = this.state.returnData;
    return (
      <div id="app-container" class={title}>
        <Nav location={location} />
        <main id="main">
          <h1>{title}</h1>
          <Toolbar />
          <section id="editor"  >
              {this.renderChildren()}
          </section>
          <Project layoutFileDataRequest={this.layoutFileDataRequest} />
        </main>
        <LiveStyleGuide />
        <Footer />
      </div>
    );
  }
}
