import React from "react";

/**
 *  This component is a template to display
 *  widgets of information
 */
export default class IdeFormElements extends React.Component {

  //changeValue = (data) => (e) => {
   // alert(data); //10
  //}

  render() {


    return (
      <fieldset>
        <textarea id="ide-text-area" name="ide-text-area" />
       
      </fieldset>
    )
  }

}