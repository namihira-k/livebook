import * as React from 'react';
import * as ReactDOM from 'react-dom';

import axios from 'axios';


interface Props {
}

interface State {
  request: any,
  events: any[],
  is_done: boolean,
}


export default class EventRequest extends React.Component<Props, State> {
  
  constructor(props: any) {
    super(props);
    this.state = {
      request: {
        url: '',
      },
      events: [],
      is_done: false,
    }

    this.changeUrl = this.changeUrl.bind(this);
    this.post = this.post.bind(this);
  }

  render() {
    return (
      <div>
        <div className="card mt-5">
          <div className="card-body">
            <h5 className="card-title">掲載リクエスト</h5>
            <p className="lead"><small>頂いたライブ情報を本サービスに掲載します！お気軽にリクエストください！</small></p>
            <form onSubmit={this.post}>
              <div className="form-group row">
                <label htmlFor="url" className="col-sm-3 col-form-label">ライブに関するURL（必須）：</label>
                <div className="col-sm-9">
                  <input id="url" type="text" className="form-control" value={this.state.request.url} onChange={this.changeUrl} placeholder="http://xx.exmaple.com" required />
                </div>
              </div>
              <button type="submit" className="btn btn-primary" disabled={this.state.is_done}>依頼する</button>

              { this.state.is_done && (
                <p className="text-success mt-3">ありがとうございます！確認したのち掲載します！</p>
              )}
            </form>
          </div>
        </div>

        { (this.state.events.length != 0) && (
          <div className="mt-5 ml-5">
            <h5>リクエストにより追加したライブ情報（直近のみ）</h5>
            <ul>
              {
                this.state.events.map(event => {
                  return (
                    <li key={event.uuid}>{ event.performer } --- { event.name }</li>
                  )
                })
              } 
            </ul>
          </div>
        )}
      </div>
    );
  }

  componentDidMount() {
    this.getEvents()
  }

  getEvents() {
    fetch(process.env.MIX_APP_BASE_PATH + '/api/events?' + 'orderBy=id' + '&order=desc' + '&count=3')
    .then(response => {
      return response.json();
    })
    .then(result => {
      this.setState({
        events: result.data,
      })
    });
  }

  changeUrl(event: any) {
    var tmp = this.state.request;
    tmp.url = event.target.value;
    this.setState({request: tmp});
  }

  post(event: any) {
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
