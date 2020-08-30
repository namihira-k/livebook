import * as React from 'react';
import * as ReactDOM from 'react-dom';

interface Props {
}

interface State {
}

export default class Ads extends React.Component<Props, State> {
  
  render() {
    return (
      <div className="mt-1">
        <ins className="adsbygoogle"
              style={{ "display": "block" }}
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
