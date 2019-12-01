import React, { Component } from 'react';
import axios from 'axios';

export default class EventCommentForm extends Component {

  constructor(props) {
    super(props);
    this.state = {
      new_comment: {
        event_uuid: props.event_uuid,
        username: '',
        seat: '',
        comment: '',
      },

      is_processing: false,

      style: {
        progress: {
          width: '0%'
        }
      }
    };

    this.refInputFile = React.createRef();

    this.changeUsername = this.changeUsername.bind(this);
    this.changeSeat = this.changeSeat.bind(this);
    this.changeComment = this.changeComment.bind(this);
    this.changeImage = this.changeImage.bind(this)

    this.post = this.post.bind(this);
  }

  render() {
    const style = {
      progress: {
        height: '2px'
      }
    }

    return (
      <div>
        <h6>コメント：質問や感想、要望など</h6>
        <form className="ml-3" onSubmit={this.post}>
          <div className="form-row">
            <div className="form-group col-md-3">
              <input type="text" className="form-control border-primary" id="username" value={this.state.new_comment.username} onChange={this.changeUsername} placeholder="お名前（入力自由）" />
            </div>
            <div className="form-group col-md-5">
              <input type="text" className="form-control border-primary" id="seat" value={this.state.new_comment.seat} onChange={this.changeSeat} placeholder="座席（入力自由） 例：1塁側 Hブロック 20番" />
            </div>
          </div>
          <div className="form-group border-primary">
            <textarea id="id-comment" className="form-control border-primary" value={this.state.new_comment.comment} onChange={this.changeComment} placeholder="コメント（入力必須）" required />
          </div>
          <div className="form-group mb-3">
            <label htmlFor="id-image">画像（入力自由）：</label><input id="id-image" type="file" onChange={ this.changeImage } ref={this.refInputFile}/>
          </div>
          <button type="submit" className="btn btn-primary" disabled={this.state.is_processing}>投稿する</button>
        </form>

        <div className="progress mt-1" style={style.progress}>
          <div className="progress-bar" role="progressbar" style={this.state.style.progress}></div>
        </div>
      </div>
    );
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

  changeImage(e) {
    let files = e.target.files || e.dataTransfer.files;
    if (!files.length)
      return;
    this.createImage(files[0]);
  }

  createImage(file) {
    let reader = new FileReader();
    reader.onload = (e) => {
      this.setState({
        image: e.target.result
      })
    };
    reader.readAsDataURL(file);
  }

  post(event) {
    event.preventDefault();
    this._moveProgress('50%');
    this.setState({
      is_processing: true,
    });

    axios.post(process.env.MIX_APP_BASE_PATH + '/api/comments', this.state.new_comment)
          .then(res => {
            if (this.state.image) {
              this._moveProgress('75%');
              axios.post(process.env.MIX_APP_BASE_PATH + '/api/files', {
                      file: this.state.image,
                      comment_uuid: res.data.uuid,
                    })
                    .then(() => {
                      this.refInputFile.current.value = '';
                      this._clear();
                      this._moveProgress('0%');
                      this.setState({
                        is_processing: false,
                      });
                      this.props.callAfterPost();
                    })
            } else {
              this._clear();
              this._moveProgress('0%');                
              this.setState({
                is_processing: false,
              });
              this.props.callAfterPost();
            }
          })
  }

  _moveProgress(percent) {
    this.setState({
      style: {
        progress: {
          width: percent
        }
      }
    });
  }

  _clear() {
    var tmp = this.state.new_comment;
    tmp.username = '';
    tmp.seat = '';
    tmp.comment = '';
    this.setState({new_comment : tmp});
  }

}
