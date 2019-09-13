import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import axios from 'axios';

export default class EventList extends Component {

  constructor() {
    super();
    this.state = {
      events: [],
    };
  }

  render() {
    return (
      <div>
        <h5>ライブ一覧</h5>

        {
          this.state.events.map(event => {
            return (
              <div className="card mb-3" key={event.name}>
                <div className="card-body">
                  <h5 className="card-title">{ event.name }</h5>

                  <div className="row">
                    <div className="col-4 col-md-2"><strong>出演者</strong></div>
                    <div className="col-8 col-md-10">{ event.performer }</div>
                  </div>

                  <div className="row">
                    <div className="col-4 col-md-2"><strong>日時</strong></div>
                    <div className="col-8 col-md-10">{ event.datetime }</div>
                  </div>

                  <div className="row">
                    <div className="col-4 col-md-2"><strong>開催場所</strong></div>
                    <div className="col-8 col-md-10">{ event.place }</div>
                  </div>

                  <div className="row">
                    <a class="btn btn-link" href={this._infoPath(event)}>コメントを見る</a>
                  </div>
                </div>
              </div>
            )
          })
        }
      </div>
    );
  }

  componentDidMount() {
    this._fetch()
  }

  _fetch() {
    fetch(process.env.MIX_APP_BASE_PATH + '/api/events')
    .then(response => {
      return response.json();
    })
    .then(result => {
      this.setState({
        events: result.data,
      })
    });
  }

  _infoPath(event) {
    return process.env.MIX_APP_BASE_PATH + '/web/eventinfo' + '?uuid=' + event.uuid;
  }
}

if (document.getElementById('id-event-list')) {
  ReactDOM.render(<EventList />, document.getElementById('id-event-list'));
}
