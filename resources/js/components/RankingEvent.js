import React, { Component } from 'react';
import ReactDOM from 'react-dom';

export default class RankingEvent extends Component {

  constructor() {
    super();
    this.state = {
      events: [],

      is_processing: false,
    }
  }

  render() {
    return (
      <div>
        { this.state.is_processing && (
          <div className="spinner-grow text-secondary m-3" role="status">
            <span className="sr-only">Loading...</span>
          </div>
        )}

        { !this.state.is_processing && (
          <div className="card">
            <div className="card-body">
              <div className="card-text">
                <ol>
                  {
                    this.state.events.map(event => {
                      return (
                        <li key={ event.uuid }><a className="btn btn-link" href={ this.infoPath(event) }><small>{ event.name }</small></a>({ event.count_comment })</li>
                      )
                    })
                  }
                </ol>
              </div>
            </div>
          </div>
        )}

      </div>
    );
  }

  componentDidMount() {
    this.getRanking();
  }

  getRanking() {
    this.setState({
      is_processing: true
    })

    fetch(process.env.MIX_APP_BASE_PATH + '/api/ranking')
    .then(res => {
        return res.json();
    })
    .then(result => {
        this.setState({
          events: result.data,
          is_processing: false
        });
    });
  }

  infoPath(event) {
    return process.env.MIX_APP_BASE_PATH + '/web/eventinfo' + '?uuid=' + event.uuid;
  }

}

if (document.getElementById('id-ranking-event')) {
    ReactDOM.render(<RankingEvent />, document.getElementById('id-ranking-event'));
}
