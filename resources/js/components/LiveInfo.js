import React, { Component } from 'react';
import ReactDOM from 'react-dom';

export default class LiveInfo extends Component {

  constructor() {
    super();
    this.state = {
      lives: []
    };
  }

  render() {
    return (
      <div className="container">
        <div className="row">
          <div className="col-md-8 col-md-offset-2">
            <div className="panel panel-default">
              <div className="panel-heading">Example Component</div>
              <div className="panel-body">
                {this.renderLives()}
              </div>
            </div>
          </div>
        </div>
      </div>
    );
  }

  renderLives() {
    return this.state.lives.map(live => {
      return (
        <ul>
          <li>名前 : {live.name}</li>
          <li>場所 : {live.place}</li>
        </ul>
      );
    });
  }

  componentDidMount() {
    let self = this;
    setInterval(function(){
      var d = new Date;
      self.setState({foo:d.getSeconds().toString()});
    }, 500);

    fetch(process.env.MIX_APP_BASE_PATH + '/api/lives')
    .then(response => {
        return response.json();
    })
    .then(objects => {
        this.setState({lives:objects});
    });

  }

}

if (document.getElementById('id-live-info')) {
    ReactDOM.render(<LiveInfo />, document.getElementById('id-live-info'));
}
