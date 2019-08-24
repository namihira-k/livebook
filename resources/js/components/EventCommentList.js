import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import axios from 'axios';
import InfiniteScroll from 'react-infinite-scroller';
import EventComment from './EventComment';

export default class EventCommentList extends Component {

  constructor() {
    super();
    this.state = {
      comments: [],
      is_processing: false,

      has_more_comments: true
    };
  }

  render() {
    return (
      <InfiniteScroll
        pageStart={1}
        initialLoad={false}
        loadMore={this.fetchPaging.bind(this)}
        hasMore={this.state.has_more_comments}
        loader={
          <div className="spinner-grow text-secondary m-3" role="status" key={0}>
            <span className="sr-only">Loading...</span>
          </div>
        }
      >
        <div>
          {
            this.state.comments.map(comment => {
              return <EventComment comment={comment} key={comment.id}/>
            })
          }
        </div>
      </InfiniteScroll>
    );
  }

  componentDidMount() {
    this.fetch();
  }

  update() {
    this._showLoading();
    this.fetch();
  }

  fetch() {
    fetch(process.env.MIX_APP_BASE_PATH + '/api/comments' + '?order=desc' + '&page=0')
    .then(response => {
      return response.json();
    })
    .then(result => {
      this.setState({
        comments: result.data,
        is_processing: false,
      })
    });
  }

  fetchPaging(page) {
    fetch(process.env.MIX_APP_BASE_PATH + '/api/comments' + '?order=desc' + '&page=' + page)
    .then(response => {
      return response.json();
    })
    .then(result => {
      var comments = this.state.comments.concat(result.data);
      this.setState({
        comments: comments,
        has_more_comments: (result.next_page_url != null),
        is_processing: false,
      })
    });
  }

  _showLoading() {
    this.setState({
      is_processing: true
    })
  }

}

if (document.getElementById('id-event-comment-list')) {
    ReactDOM.render(<EventCommentList />, document.getElementById('id-event-comment-list'));
}
