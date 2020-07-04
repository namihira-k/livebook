import * as React from 'react';
import moment from 'moment';

interface Props {
}

interface State {
  datetime: Date,
}

export default class Clock extends React.Component<Props, State> {

  interval!: NodeJS.Timeout;

  constructor(props: any) {
    super(props);
    this.state = {
      datetime: new Date
    }

    this.startClock = this.startClock.bind(this);
  }

  render() {
    return (
      <span>{ this.displayDateTime(this.state.datetime) }</span>
    );
  }

  componentDidMount() {
    this.startClock();
  }

  componentWillUnmount() {
    clearInterval(this.interval);
  }

  startClock() {
    this.interval = setInterval(() => {
      this.tick();
    }, 1000)
  }

  tick() {
    this.setState({
      datetime: new Date
    })
  }

  displayDateTime(str: Date) {
    var m = moment(str);
    m.locale('ja')
    return m.format('llll')
  }

}

