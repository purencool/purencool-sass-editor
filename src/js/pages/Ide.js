import React from "react";

import IdeTextEditor from '../components/ide/ide_elements/IdeTextEditor';


export default class Home extends React.Component {
  constructor(props) {
    super(props)
}

  /**
   *  Render request
   */
  render() {
    return (
      <div >
        <form id="ide-form" name="ide-form" className="ide-form">
          <IdeTextEditor />
          <input type="submit" name="ide-form-save" value="Save" />
        </form>
      </div>
    );
  }
}
