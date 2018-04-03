import React from "react";
import ReactDOM from "react-dom";
import YoutubeEmbedVideo from "youtube-embed-video";

/**
 *  This component is a template to display 
 *  widgets in video format
 */
export default class ContentVideo extends React.Component {
  render() {
    const { video } = this.props;
    return (
      <div class="col-md-6">
        <YoutubeEmbedVideo videoId={video.split( '=' )[1]} suggestions={false} />
      </div>
    );
  }
}
