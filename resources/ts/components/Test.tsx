import * as React from 'react';
import * as ReactDOM from 'react-dom';

import axios from 'axios';


interface Props {
}

interface State {
  image: string | ArrayBuffer | null
}

export default class Test extends React.Component<Props, State> {
  
  constructor(props: any) {
    super(props);
    this.state ={
      image: '',
    }

    this.onFormSubmit = this.onFormSubmit.bind(this)
    this.onChange = this.onChange.bind(this)
    this.fileUpload = this.fileUpload.bind(this)  
  }

  render() {
    return (
      <form onSubmit={ this.onFormSubmit }>
        <input type="file" onChange={ this.onChange }/>
        <button type="submit">Upload</button>
        <img src="http://static.namimono.com/dav/publish/60a0177e-ba0b-44ad-b8ee-5ab3468a14ed/img/1a81f2d5-14ee-48e1-a6b8-c33ceb9a9626.jpg" />
      </form>
    );
  }

  onChange(e: any) {
    let files = e.target.files || e.dataTransfer.files;
    if (!files.length)
      return;
    this.createImage(files[0]);
  }

  createImage(file: any) {
    let reader = new FileReader();
    reader.onload = (e) => {
      this.setState({
        image: e.target !== null ? e.target.result : null
      })
    };
    reader.readAsDataURL(file);
  }

  onFormSubmit(e: any){
    e.preventDefault() 
    this.fileUpload(this.state.image);
  }

  fileUpload(image: any){
    return axios.post(process.env.MIX_APP_BASE_PATH + '/api/files', {
                  file: this.state.image,
                  comment_uuid: '1234567890',
                })
                .then((response: any) => console.log(response))
  }

}

if (document.getElementById('id-test')) {
    ReactDOM.render(<Test />, document.getElementById('id-test'));
}
