import React from "react";



/**
 *  This component is a template to display
 *  widgets of information
 */
export default class FileListing extends React.Component {
 
  changeValue = (data) => (e) => {
    this.props.projectFileDataRequest(data);
  }


  render() {
    const data = this.props.listOfObjects;
    const dataArrayList = data.map(dataObj => {
      return (
        <li key={dataObj.id}>
          <span onClick={this.changeValue(dataObj.default_path)}>{dataObj.file_name}</span>
        </li>
      );

    })

    return (
      <ul>
        {dataArrayList}
      </ul>
    )
  }

}