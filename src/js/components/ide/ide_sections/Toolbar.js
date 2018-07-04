import React from "react";
import Config from "../../../reducers/Config";

/**
 *  Export component so it can be globally placed
 *  across the website
 */
export default class Toolbar extends React.Component {
  constructor(props) {

    super(props);
    this.state = {
      url: Config.liveUrl,
      compile: Config.compile
    }
    this.loadDisplayPage = this
      .loadDisplayPage
      .bind(this);
    this.refreshDisplayPage = this
      .refreshDisplayPage
      .bind(this);
    this.compileSass = this
      .compileSass
      .bind(this);
  }

  /**
   *
   */
  loadDisplayPage() {
    const url = this.state.url;
    window.open(url, "_blank", 'live_window', 'scrollbars=1,menubar=0,resizable=1,width=mobile,height=900')
  }

  refreshDisplayPage() {
  }

  compileSass() {
    fetch(this.state.compile, {
      method: 'GET',
      headers: {
        Accept: 'application/text'
      }
    },).then(response => {
      if (response.ok) {
        response
          .text()
          .then(text => {
          });
      }
    });
    location.reload();

  }

  render() {
    return (
      <aside id="tool-bar">
        <ul>
          <li>
            <a onClick={this.loadDisplayPage}>Live</a>
          </li>
          <li>
            <a onClick={this.refreshDisplayPage}>Refresh</a>
          </li>
          <li>
            <a onClick={this.compileSass}>Compile</a>
          </li>
        </ul>
      </aside>
    );
  }
}
