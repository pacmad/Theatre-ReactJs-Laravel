import React from 'react';
import { Link } from 'react-router-dom';
import AppContainer from './AppContainer';

const Home = () => {
	return (
	<AppContainer
	 title="movies"	 
	>
	<Link to="/add" class="btn btn-primary">Add Movie</Link>
	<div class="table table-responsive">
	<table class="table table-striped">
	<thead>
		<tr>
		<th>ID</th>
		<th>Title</th>	
		<th>Description</th>
		<th>Action</th>	
		</tr>
	</thead>
	<tbody>
		<tr>
		<td>1</td>
		<td>Title</td>	
		<td>Lorem Ipsum</td>
		<td>
		 <Link to="/edit/1" class="btn btn-warning">Edit</Link>
 		 <Link to="/" class="btn btn-danger">Delete</Link>

		</td>	
		</tr>
	</tbody>
	</table>
	</div>
	</AppContainer>
	);
};
export default Home;
