import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import moment from 'moment';

export default class EventList extends Component {

  constructor() {
    super();
    this.state = {
      events: [],

      is_processing: false,
    };
  }

  render() {
    return (
      <div>
        <h5>ライブ一覧</h5>
        { this.state.is_processing && (
          <div className="spinner-grow text-secondary m-3" role="status">
            <span className="sr-only">Loading...</span>
          </div>
        )}

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
                    <div className="col-8 col-md-10">{ this.displayDateTime(event.from_date_time) }  -  { this.displayDateTime(event.to_date_time) }</div>
                  </div>

                  <div className="row">
                    <div className="col-4 col-md-2"><strong>開催場所</strong></div>
                    <div className="col-8 col-md-10">{ event.place }</div>
                  </div>

                  <div className="row">
                    <a className="btn btn-link" href={this.infoPath(event)}>コメントを見る</a>
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
    this.showLoading();

    fetch(process.env.MIX_APP_BASE_PATH + '/api/events')
    .then(response => {
      return response.json();
    })
    .then(result => {
      this.setState({
        events: result.data,
      })
      this.closeLoading()
    });
  }

  infoPath(event) {
    return process.env.MIX_APP_BASE_PATH + '/web/eventinfo' + '?uuid=' + event.uuid;
  }

  displayDateTime(str) {
    var m = moment(str);
    m.locale('ja')
    return m.format('LL') + " (" + m.format('ddd') + ") "
  }

  showLoading() {
    this.setState({
      is_processing: true
    })
  }

  closeLoading() {
    this.setState({
      is_processing: false
    })
  }
}

if (document.getElementById('id-event-list')) {
  ReactDOM.render(<EventList />, document.getElementById('id-event-list'));
}
