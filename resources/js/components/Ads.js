import React, { Component } from 'react';
import ReactDOM from 'react-dom';

export default class Ads extends Component {
  
  render() {
    const style = {
      display: 'block'
    }  

    return (
      <div>
        <ins className="adsbygoogle"
              style={style}
              data-ad-client="ca-pub-1908478661707708"
              data-ad-slot="5869471877"
              data-ad-format="auto"
              data-full-width-responsive="true">
        </ins>
      </div>
    );
  }
}

if (document.getElementById('id-ads')) {
    ReactDOM.render(<Ads />, document.getElementById('id-ads'));
}
