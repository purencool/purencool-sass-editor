import React from "react";

import ApiCalls from "../../../utils/ApiCalls";


/**
 *  Export component so it can be globally placed 
 *  across the website
 */
export default class LiveStyleGuide extends React.Component {
  constructor() {
    super();
    this.state = {
      newData: []
    }
  }


  /**
   *  Received request from server add it to 
   *  react component so that it can be rendered
   */
  componentDidMount() {
    ApiCalls.liveStyleGuide()
      .then(function (serverData) {
        this.setState({ newData: serverData[0].data })
      }.bind(this));
  }


  /**
   *  Render request
   */
  render() {
    const listOfObjects = this.state.newData;
    return (
      <aside id="live-style-guide">
        <div dangerouslySetInnerHTML={{ __html: listOfObjects }} />
      </aside>
    );
  }
}
