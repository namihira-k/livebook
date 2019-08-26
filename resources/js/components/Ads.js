import React, { Component } from 'react';
import ReactDOM from 'react-dom';

export default class Ads extends Component {
  
  render() {
    return (
      <div>
        <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
        <script>(adsbygoogle = window.adsbygoogle || []).push({});</script>
      </div>
    );
  }
}

if (document.getElementById('id-ads')) {
    ReactDOM.render(<Ads />, document.getElementById('id-ads'));
}
