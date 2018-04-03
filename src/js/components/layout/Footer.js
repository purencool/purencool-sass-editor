import React from "react";


/**
 *  Export component so it can be globally placed 
 *  across the website
 */
export default class Footer extends React.Component {
  render() {
    return (
      <footer>
        <div class="row">
          <div class="col-lg-12">
            <p>Copyright &copy; Purencool</p>
          </div>
        </div>
      </footer>
    );
  }
}
