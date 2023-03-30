import React from "react";
import {TextDecorator} from "../TextDecorator";

export const TargetDecorator = (target) => {

    let decoratedWords = []
    let coreElem = document.getElementById(target)
    if (!coreElem) {
        return
    }
    let words = coreElem.innerHTML.split(' ')

    coreElem.textContent = '';

    words.forEach(word => {
        decoratedWords.push(
            TextDecorator(
                word
            )
        )
    });

    decoratedWords.forEach(elem => {
        coreElem.appendChild(elem)
    })

    return coreElem
};
