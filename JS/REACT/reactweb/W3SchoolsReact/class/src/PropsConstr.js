
import React from 'react';


class PropsConstr extends React.Component {
    constructor(props) {
      super(props);
    }
    render() {
      return <h2>I am a {this.props.model}!</h2>;
    }
  }


  export default PropsConstr;