import React from "react";



//import ContentTiles from "../components/widgets/FileListing";
import ApiCalls from "../../utils/ApiCalls";

/**
 *  Export component so it can be globally placed 
 *  across the website
 */
export default class Project extends React.Component {
  constructor() {
    super();
    this.state = {
      newData: null
   }
  }
  
  /**
   *  Received request from server add it to 
   *  react component so that it can be rendered
   */
  componentDidMount(){
    ApiCalls.readSassDirData()
      .then(function(data){
        console.log('this is a test');
      //  const newData = data.map(c => {
       //   return  c.attributes.title;
      //  })
         console.log(data);
       // const addElement = newData.map((title, i) => <ContentTiles key={i} title={title}/> );
      //  const newState = Object.assign({}, this.state, {
       //    newData: addElement
      //  });
      //  this.setState(newState);
      }.bind(this));
  }
  
  /**
   *  Render request
   */
  render() {
    return (
      <aside id="project">
    </aside>
    );
  }
}
