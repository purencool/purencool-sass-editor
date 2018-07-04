import React from "react";
import { IndexLink, Link } from "react-router";

/**
 *  Export component so it can be globally placed 
 *  across the website
 */
export default class Nav extends React.Component {
  
  /**
   *  Class constuctor the super method 
   *  calls the parent constuctor and
   *  state is a variable used in the 
   *  class
   */
  constructor() {
    super()
    this.state = {
      collapsed: true,
    };
  }

  /**
   *  Toggles menu on mobile version
   *  removes the need for jQuery to 
   *  be use on the page
   */
  toggleCollapse() {
    const collapsed = !this.state.collapsed;
    this.setState({collapsed});
  }

  render() {


    const { location } = this.props;
    const { collapsed } = this.state;
    const homeClass = location.pathname === "/" ? "active" : "";
    const articlesClass = location.pathname.match(/^\/articles/) ? "active" : "";
    const videoClass = location.pathname.match(/^\/video/) ? "active" : "";
    const navClass = collapsed ? "collapse" : "";

    return (
      <nav class="navbar-inverse navbar-fixed-top" role="navigation">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" onClick={this.toggleCollapse.bind(this)} >
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
          </div>
          <div class={"navbar-collapse " + navClass} id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
              <li class={homeClass}>
                <IndexLink to="/" onClick={this.toggleCollapse.bind(this)}>Ide</IndexLink>
              </li>
              <li class={articlesClass}>
                <Link to="articles" onClick={this.toggleCollapse.bind(this)}>Articles</Link>
              </li>
              <li class={videoClass}>
                <Link to="video" onClick={this.toggleCollapse.bind(this)}>Videos</Link>
              </li>
            </ul>
          </div>
      </nav>
    );
  }
}
