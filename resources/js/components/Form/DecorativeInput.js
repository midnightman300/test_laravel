import React, {useState} from "react";
import {TextDecorator} from "../TextDecorator";

function DecorativeInput(props) {
    const [inputType] = useState(props.type)
    const [decorStyle] = useState(props.decorStyle)
    const [target] = useState(props.target)
    const name = 'input-form-' + decorStyle;
    const [inputValue, setInputValue] = useState('')

    function handleChange(event){
        setInputValue(event.target.value)
        if(props.onChange) props.onChange(inputValue)
    }

    function handleKeyDown(event){
        if (event.key === 'Enter') {
            const newValue = TextDecorator(
                event.target.value,
                event.target.getAttribute("data-style")
            )
            document.getElementById(target).appendChild(newValue)
        }
    }
    return (
        <>
            <label htmlFor={name}>Enter text for style #{decorStyle}:&nbsp;</label>
            <input type={inputType} value={inputValue}
               data-style={decorStyle} onChange={handleChange}
               name={name} onKeyDown={handleKeyDown}
               className="inputclass"
               style={{border:'1px solid #ccc', borderRadius: '10px'}}
            />
        </>
    );
}
export default DecorativeInput;
