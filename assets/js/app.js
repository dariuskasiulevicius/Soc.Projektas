import '../css/app.css';
import React from 'react';
import ReactDOM from 'react-dom';
import ListPage from "./pages/product_list/list";
import 'bootstrap/dist/css/bootstrap.css';

class App extends React.Component {


  render() {
    return (

          <ListPage/>
    );
  }
}

ReactDOM.render(<App />, document.getElementById('root'));
