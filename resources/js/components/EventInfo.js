import React, { Component } from 'react';
import ReactDOM from 'react-dom';

export default class EventInfo extends Component {

  constructor() {
    super();
    this.state = {
      events: []
    };
  }

  render() {
    return (
      <div>
        <h5>ライブ情報</h5>
        {this.renderEvents()}
      </div>
    );
  }

  renderEvents() {
    return this.state.events.map(event => {
      return (
        <div className="card" key={event.name}>
          <div className="card-body">
            <h5 className="card-title">{event.name}</h5>

            <div className="row">
              <div className="col-1"><strong>出演者</strong></div>
              <div className="col-11">{event.performer}</div>
            </div>

            <div className="row">
              <div className="col-1"><strong>都道府県</strong></div>
              <div className="col-11">東京</div>
            </div>

            <div className="row">
              <div className="col-1"><strong>開催場所</strong></div>
              <div className="col-11">{event.place}</div>
            </div>

            <div className="row">
              <div className="col-1"><strong>日時</strong></div>
              <div className="col-11">2019-08-30、2019-08-31、2019-09-01</div>
            </div>

            <div className="row">
              <div className="col-1"><strong>情報元</strong></div>
              <div className="col-11"><a href="http://www.nogizaka46.com">http://www.nogizaka46.com</a></div>
            </div>

          </div>
        </div>
      );
    });
  }

  componentDidMount() {
    fetch(process.env.MIX_APP_BASE_PATH + '/api/events')
    .then(response => {
        return response.json();
    })
    .then(objects => {
        this.setState({events:objects});
    });
  }

}

if (document.getElementById('id-event-info')) {
    ReactDOM.render(<EventInfo />, document.getElementById('id-event-info'));
}
