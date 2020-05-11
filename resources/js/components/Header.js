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
        <a className="navbar-brand" href={ process.env.MIX_APP_BASE_PATH +"/" }>Live Share</a>

        <ul className="navbar-nav mr-auto">
          <li className="nav-item">
            <span className="navbar-text text-white"><small>- ユーザー登録なしで投稿できます</small></span>
          </li>
        </ul>

        <button className="navbar-toggler" type="button" onClick={ this.showMenu }>
          <span className="navbar-toggler-icon"></span>
        </button>
        <div className={"collapse navbar-collapse " + show}>
          <ul className="navbar-nav ml-auto">
            <li className="nav-item">
              <a className="nav-link" href={ process.env.MIX_APP_BASE_PATH +"/" }>Home</a>
            </li>
            <li className="nav-item">
              <a className="nav-link" href={ process.env.MIX_APP_BASE_PATH +"/web/eventsearch" }>場所で調べる</a>
            </li>
            <li className="nav-item">
              <a className="nav-link" href={ process.env.MIX_APP_BASE_PATH +"/web/eventrequest" }>掲載を依頼する</a>
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
