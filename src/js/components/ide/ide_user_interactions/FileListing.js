import React from "react";
import { connect } from "react-redux";
import { addPassFilePath } from "../../../state/actions/index";


const mapDispatchToProps = dispatch => {
  return {
    passFilePathIC: passFilePath => dispatch(addPassFilePath(passFilePath))
  };
};


/**
 *  Lists file names from get request
 */
class FileListingClass extends React.Component {
  constructor() {
    super();
    this.changeValue = this.changeValue.bind(this);
  }


  /**
   *  Onclick value gets passed to this method
   *  it will then add it to the redux store 
   *  array called `passFilePath`
   */
  changeValue = (data) => (e) => {
    this.props.passFilePathIC({ data });
  }


  /**
   * Rendering html
   */
  render() {
    const data = this.props.listOfObjects;
    const dataArrayList = data.map(dataObj => {
      return (
        <li key={dataObj.id}>
          <span onClick={this.changeValue(dataObj.default_path)}>{dataObj.file_name}</span>
        </li>
      );
    });

    return (
      <ul>
        {dataArrayList}
      </ul>
    )
  }

}

const FileListing = connect(null, mapDispatchToProps)(FileListingClass);
export default FileListing;