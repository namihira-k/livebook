import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import axios from 'axios';

export default class EventComment extends Component {

  constructor() {
    super();
    this.state = {
      new_comment: {
        event_uuid: '1234',
        username: '',
        seat: '',
        comment: '',  
      },
      comments: []
    };

    this.changeUsername = this.changeUsername.bind(this);
    this.changeSeat = this.changeSeat.bind(this);
    this.changeComment = this.changeComment.bind(this);

    this.post = this.post.bind(this);    
  }

  render() {
    return (
      <div>
        <h6>コメント</h6>
        <form onSubmit={this.post}>
          <div className="form-row">
            <div className="form-group col-md-3">
              <input type="text" className="form-control" id="username" value={this.state.new_comment.username} onChange={this.changeUsername} placeholder="お名前（入力自由）" />
            </div>
            <span>:</span>
            <div className="form-group col-md-4">
              <input type="text" className="form-control" id="seat" value={this.state.new_comment.seat} onChange={this.changeSeat} placeholder="座席（入力自由） 例：1塁側 Hブロック 20番" />
            </div>
          </div>
          <div className="form-group">
            <textarea id="id-comment" className="form-control" value={this.state.new_comment.comment} onChange={this.changeComment} placeholder="公開コメントを入力..." />
          </div>
          <button type="submit" className="btn btn-primary">投稿する</button>
        </form>

        <hr/>

        <div className="mt-3">
          {this.renderComments()}
        </div>
      </div>
    );
  }

  renderComments() {
    return this.state.comments.map(comment => {
      return (
        <div className="card bg-light border-primary mt-1" key={comment.id}>
          <div className="card-body">
            <h6 className="card-title">by {comment.username}  <small>{comment.created_at}</small></h6>
            <p className="card-text">{comment.comment}</p>
          </div>
        </div>
      );
    })
  } 

  componentDidMount() {
    fetch(process.env.MIX_APP_BASE_PATH + '/api/comments')
    .then(response => {
        return response.json();
    })
    .then(objects => {
        this.setState({
          comments : objects
        });
    });
  }

  changeUsername(event) {
    var tmp = this.state.new_comment;
    tmp.username = event.target.value;
    this.setState({new_comment : tmp});
  }

  changeSeat(event) {
    var tmp = this.state.new_comment;
    tmp.seat = event.target.value;
    this.setState({new_comment : tmp});
  }

  changeComment(event) {
    var tmp = this.state.new_comment;
    tmp.comment = event.target.value;
    this.setState({new_comment : tmp});
  }

  post(event){
    event.preventDefault();
    axios.post(process.env.MIX_APP_BASE_PATH + '/api/comments', this.state.new_comment);
  }

}

if (document.getElementById('id-event-comment')) {
    ReactDOM.render(<EventComment />, document.getElementById('id-event-comment'));
}
