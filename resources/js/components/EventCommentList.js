import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import axios from 'axios';
import EventComment from './EventComment';

export default class EventCommentList extends Component {

  constructor() {
    super();
    this.state = {
      comments: [],
    };
  }

  render() {
    return (
      <div>
        {this.state.comments.map(comment => {
          return <EventComment comment={comment} key={comment.id}/>
        })}
      </div>
    );
  }

  componentDidMount() {
    this._fetch();
  }

  update() {
    this._fetch();
  }

  _fetch() {
    fetch(process.env.MIX_APP_BASE_PATH + '/api/comments' + '?order=desc')
    .then(response => {
        return response.json();
    })
    .then(objects => {
        this.setState({
          comments : objects
        });
    });
  }

}

if (document.getElementById('id-event-comment-list')) {
    ReactDOM.render(<EventCommentList />, document.getElementById('id-event-comment-list'));
}
