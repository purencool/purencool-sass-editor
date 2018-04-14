import React from "react";



/**
 *  This component is a template to display 
 *  widgets of information
 */
export default class FileListing extends React.Component {

 

  render() {
   // const objectsItem = props.listOfObjects;
const numbers = [{name:'Jhon', age:28, city:'HO'},
{name:'Onhj', age:82, city:'HN'},
{name:'Nohj', age:41, city:'IT'}
];
    const listItems = objectsItem.map((objectsItem,i ) =>
      
      <li>{objectsItem['name']}</li>
    );


    //const files_list  = this.props;
  //  console.log(files_list);
    return (
      <div class="col-md-4">
        <ul>{listItems}</ul>
      
      </div>
    );
  }
}
