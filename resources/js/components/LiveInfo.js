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
      <div>
        <h3>ライブ情報</h3>
        <div className="card">
          <div className="card-body">
            <h5 className="card-title">乃木坂46 真夏の全国ツアー2019 ＜東京＞明治神宮野球場</h5>

            <div className="row">
              <div className="col-2"><strong>出演者</strong></div>
              <div className="col-10">乃木坂46</div>
            </div>

            <div className="row">
              <div className="col-2"><strong>都道府県</strong></div>
              <div className="col-10">東京</div>
            </div>

            <div className="row">
              <div className="col-2"><strong>開催場所</strong></div>
              <div className="col-10">明治神宮野球場</div>
            </div>

            <div className="row">
              <div className="col-2"><strong>日時</strong></div>
              <div className="col-10">2019-08-30、2019-08-31、2019-09-01</div>
            </div>

            <div className="row">
              <div className="col-2"><strong>情報元</strong></div>
              <div className="col-10"><a href="http://www.nogizaka46.com">http://www.nogizaka46.com</a></div>
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
