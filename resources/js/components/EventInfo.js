import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import { BrowserRouter as Router, Route} from "react-router-dom";
import queryString from 'query-string';
import moment from 'moment';

import ShareForm from './ShareForm';

export default class EventInfo extends Component {

  constructor() {
    super();
    this.state = {
      events: [],
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
            <h5 className="card-title">{ event.name }</h5>

            <div className="row">
              <div className="col-4 col-md-2"><strong>出演者</strong></div>
              <div className="col-8 col-md-10">{ event.performer }</div>
            </div>

            <div className="row">
              <div className="col-4 col-md-2"><strong>都道府県</strong></div>
              <div className="col-8 col-md-10">{ event.prefecture }</div>
            </div>

            <div className="row">
              <div className="col-4 col-md-2"><strong>開催場所</strong></div>
              <div className="col-8 col-md-10">{ event.place }</div>
            </div>

            <div className="row">
              <div className="col-4 col-md-2"><strong>日時</strong></div>
              <div className="col-8 col-md-10">{ this.displayDateTime(event.from_date_time) }  -  { this.displayDateTime(event.to_date_time) }</div>
            </div>

            <div className="row">
              <div className="col-4 col-md-2"><strong>情報元</strong></div>
              <div className="col-8 col-md-10"><a href={ event.url }>{ event.url }<i className="fa fa-external-link ml-1"></i></a></div>
            </div>

            <div className="my-1">
              <ShareForm path={'/web/eventinfo?uuid=' +  event.uuid} msg={ event.name + "について共有しよう！" +　" " + event.hashtag }/>            
            </div>

          </div>
        </div>
      );
    });
  }

  componentDidMount() {
    fetch(process.env.MIX_APP_BASE_PATH + '/api/events' + '?uuid='　+ this.props.qs.uuid)
    .then(response => {
        return response.json();
    })
    .then(obj => {
        this.setState({
          events: obj.data,
        });
    });
  }

  displayDateTime(str) {
    var m = moment(str);
    m.locale('ja')
    return m.format('LL') + " (" + m.format('ddd') + ") "
  }

}

if (document.getElementById('id-event-info')) {
    ReactDOM.render(
      <Router>
        <Route render={ (props) => 
          <EventInfo qs={queryString.parse(props.location.search)} />
        }/>
      </Router>,
      document.getElementById('id-event-info'));
}
