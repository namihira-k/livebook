import * as React from 'react';
import * as ReactDOM from 'react-dom';

import Clock from './Clock';


interface Props {
}

interface State {
}


export default class Footer extends React.Component<Props, State> {
  
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
              <div>ライブ参加への準備や当日状況をみんなで共有する 情報共有サービス です</div>
              <div>Contact：<a className="text-white" href="https://twitter.com/livesharejp"><u>@livesharejp(twitter)</u><i className="fa fa-external-link ml-1"></i></a></div>
            </div>
            <div className="col-3">
              <p className="pt-1"><Clock /></p>
              <div>Made by @namihira-k</div>
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
