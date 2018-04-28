import React from "react";

import IdeFormElements from '../components/ide/IdeFormElements';
import ApiCalls from "../utils/ApiCalls";

export default class Home extends React.Component {
  constructor(props) {
    super(props)
    console.log(props);
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
    ApiCalls.readSassFile(data)
      .then(function (serverData) {
        console.log(serverData[0].data);
        this.setState({ returnData: serverData[0].data })
      }.bind(this));
  }



  /**
   *  Render request
   */
  render() {
    return (
        <div >
          <form id="ide-form" name="ide-form" className="ide-form">
             <IdeFormElements />
             <input type="submit" name="ide-form-save" value="Save"/>
           </form>
        </div>
    );
  }
}
