import React, { Component } from 'react';

import {
  FacebookShareButton,
  FacebookIcon,
  TwitterShareButton,
  TwitterIcon,
} from 'react-share';


export default class ShareForm extends Component {

  constructor(props) {
    super(props);
    this.state = {
      path: props.path,
      msg: props.msg,
    };
  }

  render() {
    const share_url = process.env.MIX_APP_EXT_URL + this.state.path;

    const style = {
      buttons: {
        display: 'flex',
      },
      icon: {
        size: 32,
      },
    }

    return (
      <div style={ style.buttons }>
        <FacebookShareButton className="mx-1" url={ share_url } quote={ this.state.msg + " " + "#liveshare" } >
          <FacebookIcon size={ style.icon.size } round />
        </FacebookShareButton>
        <TwitterShareButton className="mx-1" url={ share_url } title={ this.state.msg  + " " + "#liveshare" }>
          <TwitterIcon size={ style.icon.size } round />
        </TwitterShareButton>
      </div>
    )
  }

}
