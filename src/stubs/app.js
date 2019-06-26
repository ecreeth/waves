require('./bootstrap');

import React from 'react';
import { render } from 'react-dom';

export default function App() {
    return (
        <div>
	  <h1>Hello World!</h1>
	</div>
    );
}

if (document.getElementById('example')) {
    render(<App />, document.getElementById('example'));
}
