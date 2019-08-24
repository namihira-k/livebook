import React, { Component } from 'react';
import ReactDOM from 'react-dom';
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
    return (
      <div>
        <EventCommentForm callAfterPost={this.updateList}/>
        <EventCommentList ref={instance => { this.state.list = instance; }}/>
      </div>
    )
  }

  updateList() {
    this.state.list.update();
    console.log("updateList");
  }

}

if (document.getElementById('id-event-comment-section')) {
    ReactDOM.render(<EventCommentSection />, document.getElementById('id-event-comment-section'));
}
