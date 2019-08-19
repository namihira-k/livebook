import React, { Component } from 'react';
import ReactDOM from 'react-dom';

export default class LiveInfo extends Component {

  constructor() {
    super();
  }

  render() {
    return (
      <div>
        <h6>コメント</h6>
        <form>
          <div class="form-row">
            <div className="form-group col-md-4">
              <input type="text" class="form-control" id="username" placeholder="お名前（入力自由）" />
            </div>
          </div>
          <div className="form-group">
            <textarea id="id-comment" className="form-control"  placeholder="公開コメントを入力..."></textarea>
          </div>
          <button type="submit" className="btn btn-primary">投稿する</button>
        </form>

        <div class="mt-3">
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
}

if (document.getElementById('id-live-comment')) {
    ReactDOM.render(<LiveInfo />, document.getElementById('id-live-comment'));
}
