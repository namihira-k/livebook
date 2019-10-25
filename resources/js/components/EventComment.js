import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import axios from 'axios';
import reactStringReplace from "react-string-replace";

import EventCommentRating from './EventCommentRating';

export default class EventComment extends Component {

  constructor(props) {
    super(props);
    this.state = {
      comment: props.comment,

      new_comment: {
        username: '',
        comment: '',
      },

      child_comments: [],

      is_show_response: false,
      is_processing: false,
    };

    this.changeUsername = this.changeUsername.bind(this);
    this.changeComment = this.changeComment.bind(this);

    this.post = this.post.bind(this);
    this.showResponseForm = this.showResponseForm.bind(this);
    this._clear = this._clear.bind(this);
  }

  render() {
    const regExp = /(https?:\/\/\S+)/g;

    const style = {
      text: {
        whiteSpace: 'pre-line'
      }
    }

    return (
      <div className="card bg-light border-secondary mt-1">
        <div className="card-body">
          <h6 className="card-title"><i className="fa fa-user"></i> {this.state.comment.username}&emsp;<small className="text-muted">{this.state.comment.seat}</small>&emsp;<small className="text-muted">{this.state.comment.created_at}</small></h6>
          <p className="card-text mb-0" style={style.text}>{ reactStringReplace(this.state.comment.comment, regExp, (m, i) => (<a key={this.state.comment.id} href={m}>{m}<i className="fa fa-external-link ml-1"></i></a>)) }</p>
          <EventCommentRating comment={this.state.comment} key={this.state.comment.id}/>

          <div className="ml-5">
            { 
              this.state.child_comments.map(comment => {
                return (
                  <div key={comment.id}>
                    <p className="mb-1"><i className="fa fa-user"></i> {comment.username}&emsp;<small className="text-muted">{comment.created_at}</small></p>
                    <p className="mb-0" style={style.text}>{reactStringReplace(comment.comment, regExp, (m, i) => (<a key={comment.id} href={m}>{m}<i className="fa fa-external-link ml-1"></i></a>))}</p>
                    <EventCommentRating comment={comment} key={comment.id}/>
                  </div>
                ) 
              })
            }

            { this.state.is_processing && (
              <div className="spinner-grow spinner-grow-sm text-secondary" role="status">
                <span className="sr-only">Loading...</span>
              </div>
            )}

            { this.state.is_show_response && (
              <form className="" onSubmit={this.post}>
                <div className="form-row">
                  <div className="form-group col-md-3">
                    <input type="text" className="form-control border-primary" id="username" value={this.state.new_comment.username} onChange={this.changeUsername} placeholder="お名前（入力自由）" />
                  </div>
                </div>
                <div className="form-group border-primary">
                  <textarea id="id-comment" className="form-control border-primary" value={this.state.new_comment.comment} onChange={this.changeComment} placeholder="公開コメント（入力必須）" required />
                </div>
                <button type="submit" className="btn btn-primary btn-sm">投稿する</button>
              </form>
            )}

            { !this.state.is_processing && !this.state.is_show_response && (
                <button type="button" className="btn btn-primary btn-sm" onClick={this.showResponseForm}>>返信する...</button>
            )}
          </div>

        </div>
      </div>
      );
  }

  componentDidMount() {
    this._fetch();
  }

  changeUsername(event) {
    var tmp = this.state.new_comment;
    tmp.username = event.target.value;
    this.setState({
      new_comment : tmp
    });
  }

  changeComment(event) {
    var tmp = this.state.new_comment;
    tmp.comment = event.target.value;
    this.setState({
      new_comment : tmp
    });
  }

  showResponseForm() {
    this.setState({
      is_show_response : true
    });
  }

  post(event) {
    event.preventDefault();

    let req = this.state.new_comment;
    req.parent_comment_uuid = this.state.comment.uuid;
    req.event_uuid = this.state.comment.event_uuid;
    
    axios.post(process.env.MIX_APP_BASE_PATH + '/api/comments', req)
          .then(() => {
            this._fetch();
            this._clear();
          })
  }

  _clear() {
    this.setState({
      new_comment: {
        username: '',
        comment: '',
      },
      is_show_response: false
    });
  }

  _fetch() {
    this.setState({
      is_processing: true,
    });

    fetch(process.env.MIX_APP_BASE_PATH + '/api/comments' + '?parent_comment_uuid=' + this.state.comment.uuid + '&count=20')
    .then(response => {
        return response.json();
    })
    .then(result => {
        this.setState({
          child_comments : result.data,
          is_processing: false,
        });
    });
  }

}

if (document.getElementById('id-event-comment')) {
    ReactDOM.render(<EventComment />, document.getElementById('id-event-comment'));
}
