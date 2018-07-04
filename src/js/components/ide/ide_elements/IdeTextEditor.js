import React from "react";

/**
 *  This component is a template to display
 *  widgets of information
 */
export default class IdeTextEditor extends React.Component {

  render() {
    return (
      <fieldset>
        <textarea id="ide-text-area" name="ide-text-area" /></fieldset>
    )
  }
}