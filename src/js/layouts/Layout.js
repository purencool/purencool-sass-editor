import React from "react";
import Toolbar from "../components/ide/ide_sections/Toolbar";
import Project from "../components/ide/ide_sections/Project";
import LiveStyleGuide from "../components/ide/ide_sections/LiveStyleGuide";
import Footer from "../components/ide/ide_sections/Footer";

/**
 * 
 */
export default class Layout extends React.Component {
  constructor(props) {
    super(props)

    this.layoutFileDataRequest = this.layoutFileDataRequest.bind(this);
    this.state = {
      newData: '',
      returnData: 'test',
      urlData: '',

    }
  }

  /**
   *  Received request from server add it to 
   *  react component so that it can be rendered
   */
  layoutFileDataRequest(data) {
    this.setState({ returnData: data })
  }

  /**
   * 
   */
  componentDidMount() {
    this.renderChildren();
  }


  /**
   * 
   */
  renderChildren() {
    console.log(this.state.returnData);
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
    const title = this.state.newData;
    return (
      <div id="app-container" class={title}>
        <main id="main">
          <h1>{title}</h1>
          <Toolbar />
          <section id="editor"  >
            {this.renderChildren()}
          </section>
          <Project layoutFileDataRequest={this.layoutFileDataRequest} />
        </main>
        <Footer />
        <LiveStyleGuide />
        
      </div>
    );
  }
}
