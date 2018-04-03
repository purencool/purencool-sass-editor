import React from "react";

import ContentVideo from "../components/widgets/ContentVideo";
import ApiCalls from "../utils/ApiCalls";

export default class Video extends React.Component {
  constructor() {
    super();
    this.state = {
      newData: null
   }
  }
  
  /**
   *  Received request from server this is going to 
   *  display the content from the home page
   *  @todo build custom page request 
   */
  componentDidMount(){
    ApiCalls.videoData()
      .then(function(data){
        const newData = data.map(c => {
          return  c.attributes.field_video;
        
        })
        console.log(data);
        const addElement = newData.map((video, i) => <ContentVideo key={i} video={video}/> );
        const newState = Object.assign({}, this.state, {
           newData: addElement
        });

     
        this.setState(newState);
      }.bind(this));
  }
  

  /**
   *  Render request
   */
  render() {
    const contentVideo = this.state.newData
    return (
        <div class="row">{contentVideo}</div>
    );
  }
}