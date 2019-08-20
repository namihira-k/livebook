import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import axios from 'axios';

export default class EventInfo extends Component {

  constructor() {
    super();
    this.state = {
      eventUuid: '',
      username: '',
      seat: '',
      comment: ''
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
              <input type="text" className="form-control" id="username" value={this.state.username} onChange={this.changeUsername} placeholder="お名前（入力自由）" />
            </div>
            <span>:</span>
            <div className="form-group col-md-4">
              <input type="text" className="form-control" id="seat" value={this.state.seat} onChange={this.changeSeat} placeholder="座席（入力自由）、例：1塁側 Hブロック 20段 10番" />
            </div>
          </div>
          <div className="form-group">
            <textarea id="id-comment" className="form-control" value={this.state.comment} onChange={this.changeComment} placeholder="公開コメントを入力..." />
          </div>
          <button type="submit" className="btn btn-primary">投稿する</button>
        </form>

        <hr/>

        <div className="mt-3">
          <div className="card bg-light">
            <div className="card-body">
              <h6 className="card-title">@名無しさん 2019-08-19 22:38</h6>
              <p className="card-text">乃木坂神宮一般売り切れだよー</p>
            </div>
          </div>
        </div>
      </div>
    );
  }

  changeUsername(event) {
    this.setState({username: event.target.value});
  }

  changeSeat(event) {
    this.setState({seat: event.target.value});
  }

  changeComment(event) {
    this.setState({comment: event.target.value});
  }

  post(event){
    event.preventDefault();
    axios.post(process.env.MIX_APP_BASE_PATH + '/api/comments', this.state);
  }

}

if (document.getElementById('id-event-comment')) {
    ReactDOM.render(<EventInfo />, document.getElementById('id-event-comment'));
}
