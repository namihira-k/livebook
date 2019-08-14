import React, { Component } from 'react';
import ReactDOM from 'react-dom';

export default class LiveInfo extends Component {

  constructor() {
    super();
  }

  render() {
    return (
      <div className="container">
        <h3>コメント</h3>
        <form>
          <div class="form-group">
            <textarea id="id-comment" class="form-control"  placeholder="公開コメントを入力..."></textarea>
          </div>
        </form>

        <div class="card bg-light mb-3">
          <div class="card-header">Header</div>
          <div class="card-body">
            <h5 class="card-title">Light card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          </div>
        </div>
      </div>
    );
  }
}

if (document.getElementById('id-live-comment')) {
    ReactDOM.render(<LiveInfo />, document.getElementById('id-live-comment'));
}
