import React from "react";

/**
 *  This component is a template to display 
 *  widgets of information
 */
export default class ContentTiles extends React.Component {
  render() {
    const { title } = this.props;
    return (
      <div class="col-md-4">
        <h4>{title}</h4>
      </div>
    );
  }
}
