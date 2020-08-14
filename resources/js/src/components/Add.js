import React from 'react';
import AppContainer from './AppContainer';

const Add = () => {
	return (
	 <AppContainer
	  title="Add a Movie"
	 >
	<form>
	 <div className="form-group">
	  <label>Title</label>
	  <input className="form-control" type="text"/>
	 </div>	
	 <div className="form-group">
	  <label>Description</label>
	  <input className="form-control"/>
	 </div>
	 <div className="form-group">
	  <button type="button" className="btn btn-success">Add</button>
	 </div>
	</form>
	 </AppContainer>
	);
};
export default Add;
