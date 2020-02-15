import React, { Component } from 'react';
import ReactDOM from 'react-dom';

export default class CommentList extends Component {

  constructor() {
    super();
    this.state = {
      comments: [],

      is_processing: false,
    }
  }

  render() {
    return (
      <div>
        { this.state.is_processing && (
          <div className="spinner-grow text-secondary m-3" role="status">
            <span className="sr-only">Loading...</span>
          </div>
        )}

        { this.state.comments.map(comment => {
            return (
              <div className="card mb-3" key={ comment.uuid }>
                <div className="card-body">
                  <h6 className="card-subtitle mb-2 text-muted"><small>{ comment.username } > </small><a className="btn btn-link" href={ this.infoPath(comment.event) }><small>{ comment.event.name }</small></a></h6>
                  <p className="card-text">{ comment.comment }</p>
                </div>
              </div>
            )
          }
        )}
      </div>
    );
  }

  componentDidMount() {
    this.getComments();
  }

  getComments() {
    this.setState({
      is_processing: true
    })

    fetch(process.env.MIX_APP_BASE_PATH + '/api/comments' + '?count=5' + "&order=desc")
    .then(response => {
        return response.json();
    })
    .then(result => {
        this.setState({
          comments : result.data,
          is_processing: false
        });
    });
  }

  infoPath(event) {
    return process.env.MIX_APP_BASE_PATH + '/web/eventinfo' + '?uuid=' + event.uuid;
  }

}

if (document.getElementById('id-comment-list')) {
    ReactDOM.render(<CommentList />, document.getElementById('id-comment-list'));
}
