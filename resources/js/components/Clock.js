import React, { Component } from 'react';
import moment from 'moment';

export default class Clock extends Component {
  
  constructor() {
    super();
    this.state = {
      datetime: ''
    }

    this.startClock = this.startClock.bind(this);
  }

  render() {
    return (
      <span>{ this.displayDateTime(this.state.datetime) }</span>
    );
  }

  componentDidMount() {
    this.startClock()
  }

  startClock() {
    setInterval(() => {
      this.setState({
        datetime: new Date
      })
    }, 1000)
  }

  displayDateTime(str) {
    var m = moment(str);
    m.locale('ja')
    return m.format('llll')
  }

}

