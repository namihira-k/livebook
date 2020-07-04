import * as React from 'react';
import * as ReactDOM from 'react-dom';

import { BrowserRouter as Router, Route} from "react-router-dom";
import queryString from 'query-string';

import EventCommentForm from './EventCommentForm';
import EventCommentList from './EventCommentList';

interface Props {
  qs: any,
}

interface State {
  listObj: any,
}

export default class EventCommentSection extends React.Component<Props, State> {

  listComp: React.RefObject<EventCommentList>;

  constructor(props: any) {
    super(props);
    this.listComp = React.createRef();
    this.updateList = this.updateList.bind(this);
  }

  render() {
    let event_uuid = this.props.qs.uuid;
    return (
      <div>
        <div>
          <EventCommentForm event_uuid={event_uuid} callAfterPost={this.updateList}/>
        </div>
        <div className="mt-3">
          <EventCommentList event_uuid={event_uuid} ref={this.listComp} />
        </div>
      </div>
    )
  }

  updateList() {
    if (this.listComp && this.listComp.current) {
      this.listComp.current.update();
    }
  }

}

if (document.getElementById('id-event-comment-section')) {
    ReactDOM.render(
      <Router>
        <Route render={ (props) => 
          <EventCommentSection qs={queryString.parse(props.location.search)} />
        }/>
      </Router>,
      document.getElementById('id-event-comment-section')
    );
}