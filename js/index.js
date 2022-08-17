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

// ================================================================== 
//
//                 start of the form validation
//
// ==================================================================


const fname = document.querySelector('#fname');
const sname = document.querySelector('#sname');
const email = document.querySelector('#email'); 
const subject = document.querySelector('#subject');
const message = document.querySelector('#message');

const form = document.querySelector('.form');



form.addEventListener('submit', (e) => {
        e.preventDefault();
    if (fname.value === "" || fname.value == null) {
        alert("First name is required");
    } else if (sname.value === "" || sname.value == null) {
        alert("Last name is required");
    } else if (subject.value === "" || subject.value == null) {
        alert("Subject is required"); 
    } else if (message.value === "" || message.value == null) {
        alert("A message is required");
    }
  }) 
  
    let regex = /^([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{2,5})$/;

    form.addEventListener('submit', (e) =>{
    if (email.value === "" || email.value == null) { 
        alert("Email is required");
    }
});

form.addEventListener('submit', (e) =>{
if (email.value.match(regex)) {

} else {
    alert("This is an invalid Email Address! Please enter another or check it over.")
}
});




    // let regex = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    // return regex.test(String(email).toLowerCase());

