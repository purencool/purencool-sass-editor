import React from "react";
import { connect } from "react-redux";

const mapStateToProps = state => {
  return { passFilePath: state.passFilePath };
};


/**
 *  This component is a template to display
 *  widgets of information
 */
class IdeTextEditorClass extends React.Component {

  render() {

    let lastItemOfArr = this.props.passFilePath[this.props.passFilePath.length - 1]
    let lastItemOfArrResult;
    try {
      lastItemOfArrResult = lastItemOfArr.data
    } catch (err) {
      lastItemOfArrResult = "";
    }

    console.log('props', lastItemOfArr);
    return (
      <fieldset>
        <input type="text" value={lastItemOfArrResult} />
        <textarea id="ide-text-area" name="ide-text-area" /></fieldset>
    )
  }
}

const IdeTextEditor = connect(mapStateToProps)(IdeTextEditorClass);
export default IdeTextEditor;