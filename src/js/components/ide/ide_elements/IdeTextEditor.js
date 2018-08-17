import React from "react";
import { connect } from "react-redux";
import ApiCalls from "../../../utils/ApiCalls";

const mapStateToProps = state => {
  return { passFilePath: state.passFilePath };
};





/**
 *  This component is a template to display
 *  widgets of information
 */
class IdeTextEditorClass extends React.Component {
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
  componentDidMount() {

    let test = "/home/purencool/Html/purencool/purencool_editor/src/sass/_default.scss";
    ApiCalls.readSassFile(test)
      .then(function (serverData) {
        this.setState({ newData: serverData[0].data })
      }.bind(this));
  }



  


  render() {

    let lastItemOfArr = this.props.passFilePath[this.props.passFilePath.length - 1]
    let lastItemOfArrResult;

    const scssFileContents = this.state.newData;
    try {
      lastItemOfArrResult = lastItemOfArr.data
    } catch (err) {
      lastItemOfArrResult = "";
    }

    console.log('props', lastItemOfArr);
    console.log(scssFileContents );
    return (
      <fieldset>
        <input type="text" value={lastItemOfArrResult} />
        <textarea id="ide-text-area" name="ide-text-area"  value={scssFileContents} /></fieldset>
    )
  }
}

const IdeTextEditor = connect(mapStateToProps)(IdeTextEditorClass);
export default IdeTextEditor;