import React, { Component } from 'react';
import ReactDOM from 'react-dom';

export default class Footer extends Component {
  
  render() {
    const style = {
      backgroundColor: '#f05ea7'
    }  

    return (
      <footer className="mt-5 py-3 text-white" style={style}>
        <div className="container-fluid">
          <h5>Live Share とは？</h5>
          <p>
            <span>ライブ参加への準備や当日状況をみんなで共有する 情報共有サービス です</span><br />
            <span>要望や問い合わせ：<a className="text-white" href="https://twitter.com/livesharejp"><u>@livesharejp(twitter)</u></a><i className="fa fa-external-link ml-1"></i></span>
          </p>
          {/* <p>Made by <a href="https://twitter.com/namihira_k">@namihira-k</a></p> */}
        </div>
      </footer>
    );
  }
}

if (document.getElementById('id-footer')) {
    ReactDOM.render(<Footer />, document.getElementById('id-footer'));
}
