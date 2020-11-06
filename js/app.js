(function(root, factory) {
    'use strict';

    if (typeof define === 'function' && define.amd) {
        define(factory);
    } else if (typeof exports === 'object') {
        exports = module.exports = factory();
    } else {
        root.TinyType = factory();
    }
})(this, function() {
    return function TinyType(
        selectedElement, // element's id string OR a DOM Element
        strings = ['Try passing some strings.', 'Pretty cool, isn\'t it?'], {
            typeSpeed = 100,
            deleteSpeed = 50,
            startDelay = 500,
            deleteDelay = 500,
            cursor = '|',
            loop = false,
            onFinished,
        } = {} // configs are optional
    ) {
        const element = (typeof selectedElement === 'string') ?
            document.getElementById(selectedElement) :
            selectedElement;

        deleteDelay = deleteDelay || 0; // adressess deleteDelay: false
        startDelay = startDelay || 0; // adressess startDelay: false

        if (cursor) {
            const cursorSpan = document.createElement('span');
            cursorSpan.classList.add('tinytype-cursor');
            cursorSpan.textContent = cursor;
            element.insertAdjacentElement('afterend', cursorSpan);
        }

        let stringsIndex = 0;

        typewrite(strings);

        function typewrite(strings) {
            if (stringsIndex === strings.length)
                if (loop) stringsIndex = 0; // should always be the case
                else return; // probably not usefull

            setTimeout(() => { typeString(strings[stringsIndex]); }, startDelay);
        }

        function typeString(str) {
            let index = 0;

            const intervalID = setInterval(() => {
                element.textContent += str[index];
                if (++index === str.length) return onStringTyped(intervalID);
            }, typeSpeed);
        }

        function onStringTyped(id) {
            clearInterval(id);
            if (!loop && stringsIndex === strings.length - 1) // if no loop, don’t erase last string
                return (onFinished) ? onFinished() : null;
            setTimeout(eraseString, deleteDelay);
        }

        function eraseString() {
            const str = element.textContent;
            let strLength = str.length;

            const intervalID = setInterval(() => {
                element.textContent = str.substr(0, --strLength);
                if (strLength === 0) return onStringErased(intervalID);
            }, deleteSpeed);
        }

        function onStringErased(id) {
            clearInterval(id);
            ++stringsIndex;
            typewrite(strings);
        }

    };

});
// mneu ham
ham.addEventListener('click', function() {
    ham.classList.toggle('crece');
    menu_wrapper.classList.toggle('crece');
});
//flecha subir


var frases = [' conectan', 'enganchan '];
TinyType('tinytype', frases, {

    onFinished: function() {},

    deleteSpeed: 90
});

document.getElementById("botonArriba").addEventListener("click", irArriba);

function irArriba() {

    let up = document.documentElement.scrollTop;
    if (up > 0) {
        window.scrollTo(0, 0);
    }
}

botonArriba = document.getElementById('botonArriba');
window.onscroll = function() {

    let scroll = document.documentElement.scrollTop;
    if (scroll > 200) {
        botonArriba.style.transform = "scale(1)";

    } else if (scroll < 200) {
        botonArriba.style.transform = "scale(0)";;
    }

};