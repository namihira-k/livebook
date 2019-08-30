import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import axios from 'axios';

export default class EventCommentRating extends Component {

  constructor(props) {
    super(props);
    this.state = {
      comment: this.props.comment,
      rating: {},
    }
  }
  
  render() {
    return (
      <span>
        <button type="button" className="btn btn-light" onClick={this.post.bind(this, 'good')}><i className="fa fa-thumbs-o-up mr-1"></i><span>{ this.state.rating.good }</span></button>
        <button type="button" className="btn btn-light" onClick={this.post.bind(this, 'bad')}><i className="fa fa-thumbs-o-down mr-1"></i><span>{ this.state.rating.bad }</span></button>
      </span>
    );
  }

  componentDidMount() {
    this._fetch();
  }

  _fetch() {
    fetch(process.env.MIX_APP_BASE_PATH + '/api/ratings' + '?comment_uuid=' + this.state.comment.id)
    .then(response => {
        return response.json();
    })
    .then(result => {
        this.setState({
          rating : result,
        });
    });

  }

  post(label) {
    axios.post(process.env.MIX_APP_BASE_PATH + '/api/ratings', 
            {
              comment_uuid: this.state.comment.id,
              label: label
            }
          )
          .then(() => {
            this._fetch();
          })
  }

}
