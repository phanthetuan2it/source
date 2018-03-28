import React from 'react';
import { connect } from 'react-redux';
import { addTodo } from './actions';

const AddTodo = ({ hanldeTodo }) => {
	let myInput;

	const submitForm = (e) => {
		e.preventDefault();
		hanldeTodo(myInput.value);
		myInput.value= "";
	}

	return (
		<form onSubmit={submitForm}>
			<input ref={input => myInput = input} type="text" />
			<button>Add</button>
		</form>
	)
}

const mapStateToProps = (state) => ({
	todos: state.todos,
})

const mapDispatchToProps = {
	hanldeTodo: addTodo,
}

export default connect(null, mapDispatchToProps)(AddTodo);