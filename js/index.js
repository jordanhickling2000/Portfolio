// 'use strict';

// function typeWriter(el) {
//     const textArray = el.innerHTML.split('');
//     el.innerHTML = '';
//     textArray.forEach((letter, i) =>
//     setTimeout(() => (el.innerHTML += letter), 95 * i)
//     );
//     setInterval(() => typeWriter(el), 7000);
// }

// typeWriter(typerwriter)
//Working code of a typing effect however is not perfect as after a couple of loops changes the letters around


//declaring the typeWriting effect using the element thats used at the end and having a set speed. (Found in the h1 and p const area.)
function typingEffect(element, speed){
    let text = element.innerHTML;
    element.innerHTML = "";
    // Setting i to zero to start a loop.
    let i = 0;
     let timer = setInterval(function(){
        // The begining of the loop section for the typewriter that for each loop creates a new letter and add +1 to the i until it reaches the text length.
        if(i < text.length){
            element.append(text.charAt(i))
            i++;
        } else {
        clearInterval(timer);
        }
     }, 100); //sets the speed at 100 millisecond per letter.
}

// declaring what elements have the typingEffect from above. 
const typewriter = document.querySelector('#typewriter');
typingEffect(typewriter, 100);

const pTypewriter = document.querySelector('#p-typewriter');
typingEffect(pTypewriter, 320);