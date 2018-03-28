import React, { Component } from 'react';
import logo from './logo.svg';
import './App.css';
import AddTodo from './AddTodo';
import TodoList from './TodoList';
import Footer from './Footer';

class App extends Component {
  render() {
    return (
      <div className="App">
        <AddTodo />
        <TodoList />
        <Footer />
      </div>
    );
  }
}

export default App;
