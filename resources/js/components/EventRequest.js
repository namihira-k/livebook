import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import axios from 'axios';

export default class EventRequest extends Component {
  
  constructor(props) {
    super(props);
    this.state = {
      request: {
        url: '',
      },

      is_done: false,
    }

    this.changeUrl = this.changeUrl.bind(this);
    this.post = this.post.bind(this);
  }

  render() {
    return (
      <div className="card mt-5">
        <div className="card-body">
          <h5 className="card-title">ライブ情報の掲載リクエスト</h5>

          <form onSubmit={this.post}>
            <div className="form-group row">
              <label htmlFor="url" className="col-sm-2 col-form-label">参考URL（必須）</label>
              <div className="col-sm-8">
                <input id="url" type="text" className="form-control" value={this.state.request.url} onChange={this.changeUrl} placeholder="http://xx.exmaple.com" required />
              </div>
            </div>
            <button type="submit" className="btn btn-primary" disabled={this.state.is_done}>依頼する</button>

            { this.state.is_done && (
              <p class="text-success mt-3">ありがとうございます！確認したのち掲載します！</p>
            )}
          </form>

        </div>
      </div>
    );
  }

  changeUrl(event) {
    var tmp = this.state.request;
    tmp.url = event.target.value;
    this.setState({request: tmp});
  }

  post(event) {
    event.preventDefault();

    this.setState({
      is_done: true,
    });

    axios.post(process.env.MIX_APP_BASE_PATH + '/api/eventrequests', this.state.request);
  }

}

if (document.getElementById('id-event-request')) {
    ReactDOM.render(<EventRequest />, document.getElementById('id-event-request'));
}
