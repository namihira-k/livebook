import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import axios from 'axios';

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

      is_show_response: false
    };

    this.changeUsername = this.changeUsername.bind(this);
    this.changeComment = this.changeComment.bind(this);

    this.post = this.post.bind(this);
    this.showResponseForm = this.showResponseForm.bind(this);
  }

  render() {
    return (
      <div className="card bg-light border-secondary mt-1">
        <div className="card-body">
          <h6 className="card-title">by {this.state.comment.username}&emsp;<small>{this.state.comment.created_at}</small>&emsp;<small>{this.state.comment.seat}</small></h6>
          <p className="card-text">{this.state.comment.comment}</p>

          <div className="ml-5">
            {this.state.child_comments.map(comment => {
              return (
                <p key={comment.id}>
                  <span>by {comment.username}&emsp;<small>{comment.created_at}</small></span><br />
                  <span>{comment.comment}</span>
                </p>
              ) 
            })}

            {this.state.is_show_response ? (
              <form className="" onSubmit={this.post}>
                <div className="form-row">
                  <div className="form-group col-md-3">
                    <input type="text" className="form-control border-primary" id="username" value={this.state.new_comment.username} onChange={this.changeUsername} placeholder="お名前（入力自由）" />
                  </div>
                </div>
                <div className="form-group border-primary">
                  <textarea id="id-comment" className="form-control border-primary" value={this.state.new_comment.comment} onChange={this.changeComment} placeholder="公開コメント（入力必須）" required />
                </div>
                <button type="submit" className="btn btn-primary btn-sm">>返信する</button>
              </form>
            ) : (
              <button type="button" className="btn btn-primary btn-sm" onClick={this.showResponseForm}>>返信する</button>
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
    req.parent_comment_id = this.state.comment.id;
    req.event_uuid = this.state.comment.event_uuid;
    axios.post(process.env.MIX_APP_BASE_PATH + '/api/comments', req)
          .then(() => {
            this._fetch();
          })
  }

  _fetch() {
    fetch(process.env.MIX_APP_BASE_PATH + '/api/comments' + '?parent_comment_id=' + this.state.comment.id)
    .then(response => {
        return response.json();
    })
    .then(objects => {
        this.setState({
          child_comments : objects
        });
    });
  }

}

if (document.getElementById('id-event-comment')) {
    ReactDOM.render(<EventComment />, document.getElementById('id-event-comment'));
}
