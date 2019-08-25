import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import axios from 'axios';
import InfiniteScroll from 'react-infinite-scroller';
import EventComment from './EventComment';

export default class EventCommentList extends Component {

  constructor(props) {
    super(props);
    this.state = {
      event_uuid: props.event_uuid,

      comments: [],
      is_processing: false,

      has_more_comments: true
    };
  }

  render() {
    return (
      <div>
        { this.state.is_processing && (
          <div className="spinner-grow text-secondary m-3" role="status">
            <span className="sr-only">Loading...</span>
          </div>
        )}

        { (!this.state.is_processing && (this.state.comments.length == 0)) && (
          <div class="alert alert-light" role="alert">コメントはまだありません</div>
        )}

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
      </div>
    );
  }

  componentDidMount() {
    this.fetch();
  }

  update() {
    this.fetch();
  }

  fetch() {
    this._showLoading();
    fetch(process.env.MIX_APP_BASE_PATH + '/api/comments' + '?order=desc' + '&page=0' + '&event_uuid=' + this.state.event_uuid)
    .then(response => {
      return response.json();
    })
    .then(result => {
      this.setState({
        comments: result.data,
      })
      this._closeLoading();
    });
  }

  fetchPaging(page) {
    fetch(process.env.MIX_APP_BASE_PATH + '/api/comments' + '?order=desc' + '&page=' + page + '&event_uuid=' + this.state.event_uuid)
    .then(response => {
      return response.json();
    })
    .then(result => {
      var comments = this.state.comments.concat(result.data);
      this.setState({
        comments: comments,
        has_more_comments: (result.next_page_url != null),
      })
      this._closeLoading()
    });
  }

  _showLoading() {
    this.setState({
      is_processing: true
    })
  }

  _closeLoading() {
    this.setState({
      is_processing: false
    })
  }  
}