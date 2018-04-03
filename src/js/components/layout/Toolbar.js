import React from "react";
import Config from "../../config/Config";

/**
 *  Export component so it can be globally placed 
 *  across the website
 */
export default class Toolbar extends React.Component {
  constructor(props) {

    super(props);
    
    console.log(Config);
    this.state = {
      url: Config.liveUrl 
    }
    this.loadLiveClick = this.loadLiveClick.bind(this);
    this.refreshLiveClick = this.refreshLiveClick.bind(this);
  }

  
  /** 
   * 
   */
  loadLiveClick() {
    const url = this.state.url;
    window.open(url,"_blank",'live_window','scrollbars=1,menubar=0,resizable=1,width=mobile,height=900')
  }

  refreshLiveClick() {
    console.log(this.state.url);
    
  }


  render() {
    return (
      <aside id="tool-bar">
          <a onClick={this.loadLiveClick}>Live</a> 
          <a onClick={this.refreshLiveClick}>Refresh</a> 
      </aside>
    );
  }
}
