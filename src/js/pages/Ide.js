import React from "react";

import IdeFormElements from '../components/ide/IdeFormElements';

export default class Home extends React.Component {

  /**
   *  Render request
   */
  render() {
    return (
        <div >
          <form id="ide-form" name="ide-form" className="ide-form">
             <IdeFormElements />
           </form>
        </div>
    );
  }
}
