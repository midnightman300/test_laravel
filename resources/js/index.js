import React, { useEffect } from "react";
import * as ReactDOMClient from 'react-dom/client';
import DecorativeInput from "./components/Form/DecorativeInput.js";
import {TargetDecorator} from "./components/Preprocessor/TargetDecorator.js";

export default function App() {

    useEffect(() => {
        TargetDecorator('target');
    });

    return (
        <div className="App">
            <TargetDecorator target={"target"} />
            <DecorativeInput type={"input"} decorStyle={"1"} target={"target"} />
            <br /><br />
            <DecorativeInput type={"input"} decorStyle={"2"} target={"target"} />
            <br /><br />
            <DecorativeInput type={"input"} decorStyle={"3"} target={"target"} />
        </div>
    );
}

const rootElement = document.getElementById("root");
ReactDOMClient.createRoot(rootElement).render(<App />);
