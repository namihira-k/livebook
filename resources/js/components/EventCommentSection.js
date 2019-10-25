import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import { BrowserRouter as Router, Route} from "react-router-dom";
import queryString from 'query-string';

import EventCommentForm from './EventCommentForm';
import EventCommentList from './EventCommentList';

export default class EventCommentSection extends Component {

  constructor() {
    super();
    this.state = {
      list: null,
    };

    this.updateList = this.updateList.bind(this);
  }

  render() {
    let event_uuid = this.props.qs.uuid;
    return (
      <div>
        <div>
          <EventCommentForm event_uuid={event_uuid} callAfterPost={this.updateList}/>
        </div>
        <div className="mt-5">
          <EventCommentList event_uuid={event_uuid} ref={instance => { this.state.list = instance; }}/>
        </div>
      </div>
    )
  }

  updateList() {
    this.state.list.update();
  }

}

if (document.getElementById('id-event-comment-section')) {
    ReactDOM.render(
      <Router>
        <Route render={ (props) => 
          <EventCommentSection qs={queryString.parse(props.location.search)} />
        }/>
      </Router>,
      document.getElementById('id-event-comment-section')
    );
}


