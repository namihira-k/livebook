import React, { Component } from 'react';
import ReactDOM from 'react-dom';

export default class Footer extends Component {
  render() {
    return (
      <footer className="mt-5 bg-light">
        <div className="container-fluid">
          {/* <p>Made by <a href="https://twitter.com/namihira_k">@namihira-k</a></p> */}
        </div>
      </footer>
    );
  }
}

if (document.getElementById('id-footer')) {
    ReactDOM.render(<Footer />, document.getElementById('id-footer'));
}
