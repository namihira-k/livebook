import React, { Component } from 'react';
import ReactDOM from 'react-dom';

export default class EventRequest extends Component {
  
  render() {
    return (
      <div>
        <form>
          <div className="form-group row">
            <label for="staticEmail" className="col-sm-2 col-form-label">ライブ名</label>
            <div className="col-sm-10">
              <input type="text" className="form-control" placeholder="First name" />
            </div>
          </div>
          <div className="form-group row">
            <label for="url" className="col-sm-2 col-form-label">URL</label>
            <div className="col-sm-10">
              <input type="text" className="form-control" placeholder="http://xx.exmaple.com" />
            </div>
          </div>
        </form>
      </div>
    );
  }



}

if (document.getElementById('id-event-request')) {
    ReactDOM.render(<EventRequest />, document.getElementById('id-event-request'));
}
