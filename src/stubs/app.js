/**
 * First we will load all of this project's JavaScript dependencies which
 * includes React and other helpers. It's a great starting point while
 * building robust, powerful web applications using React + Laravel.
 */
require('./bootstrap');

import React from 'react';
import { render } from 'react-dom';
import styled from 'styled-components';

const Title = styled.h1`
  font-size: 1.5em;
  text-align: center;
  color: palevioletred;
`;

const Wrapper = styled.section`
  padding: 4em;
  background: papayawhip;
`;

export default function App() {
	return (
		<Wrapper>
			<Title>
				Hello World!
			</Title>
		</Wrapper>
	);
}

if (document.getElementById('example')) {
    render(<App />, document.getElementById('example'));
}
