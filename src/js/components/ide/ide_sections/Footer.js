import React from "react";
import List from "../ide_elements/GeneralList";
import Form from "../ide_user_interactions/Form";


/**
 *  Export component so it can be globally placed 
 *  across the website
 */
export default class Footer extends React.Component {
  render() {
    return (
      <footer>
        <div>
          <div class="col-lg-12">
            <p>Copyright &copy; Purencool</p>
          </div>
        </div>
        <div>
          <List />
          <Form />
        </div>
      </footer>
    );
  }
}
