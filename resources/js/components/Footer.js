import React, { Component } from 'react';
import ReactDOM from 'react-dom';

import Clock from './Clock';

export default class Footer extends Component {
  
  render() {
    const style = {
      backgroundColor: '#f05ea7'
    }  

    return (
      <footer className="mt-5 py-3 text-white" style={style}>
        <div className="container-fluid">
          <div className="row justify-content-around">
            <div className="col-5">
              <h5>Live Share とは？</h5>
              <p>
                <span>ライブ参加への準備や当日状況をみんなで共有する 情報共有サービス です</span><br />
                <span>要望や問い合わせ：<a className="text-white" href="https://twitter.com/livesharejp"><u>@livesharejp(twitter)</u><i className="fa fa-external-link ml-1"></i></a></span>
              </p>
            </div>
            <div className="col-3">
              <p className="pt-1"><Clock /></p>
              <p>Made by <a className="text-white" href="https://twitter.com/namihira_k"><u>@namihira-k</u><i className="fa fa-external-link ml-1"></i></a></p>
            </div>
          </div>
        </div>
      </footer>
    );
  }
}

if (document.getElementById('id-footer')) {
    ReactDOM.render(<Footer />, document.getElementById('id-footer'));
}
