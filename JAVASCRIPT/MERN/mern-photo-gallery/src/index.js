import React from 'react';
import ReactDOM from 'react-dom/client';
import { Provider } from 'react-redux';
import App from './App';
import AppRouter from './router/AppRouter';
import store from './store/store';
import 'bootstrap/dist/css/bootstrap.min.css';
import './styles.css';


const root = ReactDOM.createRoot(document.getElementById('root'));
root.render(
  <Provider store={store}>
    <AppRouter />
  </Provider>,
);

