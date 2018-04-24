import React from "react";



//import ContentTiles from "../components/widgets/FileListing";
import ApiCalls from "../../utils/ApiCalls";
import FileListing from '../ide/FileListing';

/**
 *  Export component so it can be globally placed 
 *  across the website
 */
export default class Project extends React.Component {
  constructor() {
    super();
    this.state = {
      newData: []
   }
  }
  
  /**
   *  Received request from server add it to 
   *  react component so that it can be rendered
   */
  componentDidMount(){
    ApiCalls.readSassDirData()
      .then(function(serverData){
        this.setState({newData: serverData[0].data })
      }.bind(this));
  }
  
  
  /**
   *  Render request
   */
  render() {
    const listOfObjects = this.state.newData;
    return (
      <aside id="project">
         <h2>Files</h2>
         <FileListing listOfObjects={listOfObjects} />,
       </aside>
    );
  }
}
