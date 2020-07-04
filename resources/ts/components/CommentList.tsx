import * as React from 'react';
import * as ReactDOM from 'react-dom';


interface Props {
}

interface State {
  comments: Array<any>,
  is_processing: Boolean
}

export default class CommentList extends React.Component<Props, State> {

  constructor(rops: any) {
    super(rops);
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
                  <h6 className="card-title  text-center"><a className="btn btn-link" href={ this.infoPath(comment.event) }><small>{ comment.event.name }</small></a></h6>
                  <h6 className="card-subtitle text-muted mb-2"><small>{ comment.username } : </small></h6>
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

  infoPath(event: any) {
    return process.env.MIX_APP_BASE_PATH + '/web/eventinfo' + '?uuid=' + event.uuid;
  }

}

if (document.getElementById('id-comment-list')) {
    ReactDOM.render(<CommentList />, document.getElementById('id-comment-list'));
}
