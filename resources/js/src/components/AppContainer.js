
import React from 'react';

const AppContainer = ({title, children}) => {
	return (
	 <div className="container">
	  <div class="card">
	  <div class="card-header"> {title} </div>
	  <div class="card-body">
	    {children}
	  </div>
	</div>
	 </div>
	);
};
export default AppContainer;


