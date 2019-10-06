import React, { Component } from 'react';
import ReactDOM from 'react-dom';

import EventList from './EventList';

export default class EventSearch extends Component {

  constructor() {
    super();
    this.state = {
      places: [],

      selected_place: '',
    }

    this.changePlace = this.changePlace.bind(this);
  }

  render() {
    return (
      <div>
        <form>
          <div className="form-group">
            <label htmlFor="id-place">場所を選ぶ</label>
            <select className="custom-select" id="id-place" onChange={(event) => { this.changePlace(event)}}>
              <option defaultValue>...</option>
              {
                this.state.places.map(p => {
                  return (
                    <option value={ p.place } key={ p.place }>{ p.place }</option>                
                    )
                  })
                }
            </select>
          </div>
        </form>

        { this.renderSelectedEvent() }
      </div>
    );
  }

  renderSelectedEvent(){
    if (this.state.selected_place == '') {
      return this.state.places.map(p => {
              return this.renderEventList(p)
            })
    }

    return this.state.places.filter(p => {
                              return p.place == this.state.selected_place;
                            })
                            .map(p => {
                              return this.renderEventList(p)
                            })
  }

  renderEventList(p){
    return (
      <div key={ p.place }>
        <h5>{ p.place }</h5>
        <EventList place={ p.place }　/>
      </div>
    )
  }

  componentDidMount() {
    this.fetchPlace()
  }

  fetchPlace() {
    fetch(process.env.MIX_APP_BASE_PATH + '/api/places?')
    .then(response => {
      return response.json();
    })
    .then(result => {
      this.setState({
        places: result.data,
      })
    });
  }

  changePlace(event) {
    this.setState({
      selected_place: event.target.value,
    });
  }

}

if (document.getElementById('id-event-search')) {
  ReactDOM.render(<EventSearch />, document.getElementById('id-event-search'));
}
