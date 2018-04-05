import React from "react";

/**
 *  This component is a template to display 
 *  widgets of information
 */
export default class FileListing extends React.Component {
  render() {
    const { file_name } = this.props;
    return (
      <div class="col-md-4">
        <h4>{file_name}</h4>
      </div>
    );
  }
}
