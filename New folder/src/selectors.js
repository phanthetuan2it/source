import { createSelector } from 'reselect'

const selectTodos = () => (state) => state.get('todos');

const makeSelectTodos = () => createSelector(
	selectTodos(),
	(substate) => {
		return substate.toJS();
	}
);

export default makeSelectTodos;
