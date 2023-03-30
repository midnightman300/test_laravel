import React from 'react';

export const TextDecorator = (text, style) => {

    if (typeof style == "undefined") {
        style = Math.round(Math.random() * 3)
    }
    let styling = ''
    switch(parseInt(style)) {
        case 1:
            styling = 'text-decoration: underline;'
            break;
        case 2:
            styling = 'font-weight: bold;'
            break;
        default:
            styling = 'color: red;';
    }

    let elem = document.createElement("span")
    elem.setAttribute('style', styling)
    let t = document.createTextNode(text);
    elem.appendChild(t)

    let span = document.createElement("span")
    span.append(' ')
    span.appendChild(elem)

    return span
};
