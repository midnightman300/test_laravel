import React from 'react';
import * as ReactDOMClient from 'react-dom/client';

export default function HelloReact() {
    return (
        <h1>Hello React!</h1>
    );
}

if (document.getElementById('hello-react')) {
    ReactDOMClient
        .createRoot(document.getElementById('hello-react'))
        .render(<HelloReact />);
}
