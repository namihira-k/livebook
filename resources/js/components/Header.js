import React, { Component } from 'react';
import ReactDOM from 'react-dom';

export default class Header extends Component {

  constructor() {
    super();
    this.state = {
      show_menu: false
    };

    this.showMenu = this.showMenu.bind(this);
  }

  render() {
    const show = (this.state.show_menu) ? "show" : "" ;

    return (
      <nav className="navbar navbar-expand-md navbar-dark bg-dark">
        <a className="navbar-brand" href="/">Live Share</a>

        <button className="navbar-toggler" type="button" onClick={ this.showMenu }>
          <span className="navbar-toggler-icon"></span>
        </button>
        <div className={"collapse navbar-collapse " + show}>
          <ul className="navbar-nav">
            <li className="nav-item">
              <a className="nav-link" href="/">Home</a>
            </li>
          </ul>
        </div>

      </nav>
    );
  }

  showMenu() {
    this.setState({
        show_menu: !this.state.show_menu
    })
  }

}

if (document.getElementById('id-header')) {
    ReactDOM.render(<Header />, document.getElementById('id-header'));
}
