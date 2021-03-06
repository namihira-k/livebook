import * as React from 'react';
import * as ReactDOM from 'react-dom';


import EventList from './EventList';

interface Props {
}

interface State {
  places: any[],
  selected_place: string,
}

export default class EventSearch extends React.Component<Props, State> {

  constructor(props: any) {
    super(props);
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
              <option defaultValue='true'>...</option>
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

  renderEventList(p: any){
    return (
      <div key={ p.place }>
        <h5><i className="fa fa-map-marker mr-1"></i>{ p.place }</h5>
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

  changePlace(event: any) {
    this.setState({
      selected_place: event.target.value,
    });
  }

}

if (document.getElementById('id-event-search')) {
  ReactDOM.render(<EventSearch />, document.getElementById('id-event-search'));
}
