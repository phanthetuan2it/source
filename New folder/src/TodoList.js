import React from 'react'
import { connect } from 'react-redux'
import { createStructuredSelector } from 'reselect'
import { toggleTodo } from './actions'
import makeSelectTodos from './selectors'

const TodoList = ({ todos, handleToggle }) => {
	return (
		<div>
			<ul>
				{todos && todos.map((item) => (
					<li onClick={() => handleToggle(item.id)} style={{textDecoration: item.complete ? 'line-through' : 'none'}}>{item.text}</li>
				))}
			</ul>
		</div>
	)
}

const mapStateToProps = createStructuredSelector ({
	todos: makeSelectTodos(),
})

const mapDispathToProps = {
	handleToggle: toggleTodo,
}

export default connect(mapStateToProps, mapDispathToProps)(TodoList);