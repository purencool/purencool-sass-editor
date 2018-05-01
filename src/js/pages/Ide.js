import React from "react";

import IdeFormElements from '../components/ide/IdeFormElements';
import ApiCalls from "../utils/ApiCalls";

export default class Home extends React.Component {
  constructor(props) {
    super(props)
    this.homeFileDataRequest = this.homeFileDataRequest.bind(this);
    this.state = {
      newData: '',
      returnData: []
    }

    
  }


    /**
   *  Received request from server add it to 
   *  react component so that it can be rendered
   */
  homeFileDataRequest(data) {
    
  }



  /**
   *  Render request
   */
  render() {
    return (
        <div >
          <form id="ide-form" name="ide-form" className="ide-form">
             <input type="hidden" value="" id="ide-form-path" name="ide-form-path" />
             <IdeFormElements />
             <input type="submit" name="ide-form-save" value="Save"/>
           </form>
        </div>
    );
  }
}
