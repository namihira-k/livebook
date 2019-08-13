import React, { Component } from 'react';
import ReactDOM from 'react-dom';

export default class Header extends Component {
  render() {
    return (
      <nav className="navbar navbar-dark bg-dark">
        <a className="navbar-brand" href="#">Live Share</a>
      </nav>
    );
  }
}

if (document.getElementById('id-header')) {
    ReactDOM.render(<Header />, document.getElementById('id-header'));
}
