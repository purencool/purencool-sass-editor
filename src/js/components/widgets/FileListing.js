import React from "react";

/**
 *  This component is a template to display
 *  widgets of information
 */
export default class FileListing extends React.Component {

  render() {
    const  data = this.props.listOfObjects;
    const dataArrayList = data.map(dataObj => {
      return (
        <li key={dataObj.id} >
          <a href={'#'+dataObj.default_path}>{dataObj.file_name}</a>
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
