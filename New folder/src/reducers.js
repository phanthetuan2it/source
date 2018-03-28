import { fromJS } from 'immutable';
const initialState = fromJS({
	todos: [],
	check: false,
})
export default function TodoApp(state = initialState, action) {
	const listTodos= state.toJS().todos;
	
	switch(action.type) {
		case 'ADD_TODO':
			return state.set('todos', fromJS([
				{
					id: action.id,
					text: action.text,
					complete: false,
				},
					...listTodos
				]));

		case 'TOGGLE_TODO':
			return state.set('todos',fromJS(updateTodo(listTodos, action.id)));
		default:
			return state;
	}
}

function updateTodo(listTodos, id) {
	const arr = listTodos.map((item) => (item.id === id) ? {...item, complete: !item.complete} : item);
	return arr;
}