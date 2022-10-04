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

// const pTypewriter = document.querySelector('#p-typewriter');
// typingEffect(pTypewriter, 320);
// Commented out until maybe pontentially needed to use for design. (This will make the P underneath the h1 text a typewriter with a slower speed.)

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
        document.getElementById("fname").style.borderColor = "red";
        document.getElementById("warning-form-fname").style.display="inline"
        // alert("First name is required");
    } else {
        document.getElementById("fname").style.borderColor = "green";
        document.getElementById("warning-form-fname").style.display="none"
    }
  }) 

  form.addEventListener('submit', (e) => {
        e.preventDefault();
    if (sname.value === "" || sname.value == null) {
        document.getElementById("sname").style.borderColor = "red";
        document.getElementById("warning-form-sname").style.display="inline"
        // alert("Last name is required")
    } else {
        document.getElementById("sname").style.borderColor = "green";
        document.getElementById("warning-form-sname").style.display="none"
    }
}) 

const regex = /(^(?!.*__.*)[a-z0-9]{4,253}(_?)[a-z0-9]+(?:\.[a-z0-9!#$%&*+\/=?^`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9]*[a-z0-9])?$)/;

form.addEventListener('submit', (e) =>{
if (email.value === "" || email.value == null) { 
    document.getElementById("email").style.borderColor = "red";
    document.getElementById("warning-form-email").style.display="inline"
    // alert("Email is required");
} else if (email.value.match(regex)) {
    document.getElementById("email").style.borderColor = "green";
    document.getElementById("warning-form-email").style.display="none"
    document.getElementById("warning-form-regex").style.display="none"
} else {
    document.getElementById("warning-form-email").style.display="none"
    document.getElementById("email").style.borderColor = "red";
    document.getElementById("warning-form-regex").style.display="inline"
    // alert("This is an invalid Email Address! Please enter another or check it over.")
}
});


form.addEventListener('submit', (e) => {
    e.preventDefault();
    if (subject.value === "" || subject.value == null) {
        document.getElementById("subject").style.borderColor = "red";
        document.getElementById("warning-form-subject").style.display="inline";
        // alert("Subject is required"); 
    } else {
        document.getElementById("subject").style.borderColor = "green";
        document.getElementById("warning-form-subject").style.display="none";
    }
}) 

form.addEventListener('submit', (e) => {
    e.preventDefault();
    if (message.value === "" || message.value == null) {
        document.getElementById("message").style.borderColor = "red";
        document.getElementById("warning-form-message").style.display="inline";
        // alert("A message is required");
    } else {
        document.getElementById("message").style.borderColor = "green";
        document.getElementById("warning-form-message").style.display="none";
    }
}) 

form.addEventListener('submit', (e) => {
    if(fname.style.borderColor === "green" && sname.style.borderColor === "green" && email.style.borderColor === "green" && subject.style.borderColor === "green" && message.style.borderColor === "green") {
        document.getElementById("success-popup").style.display="inline";
        document.getElementById("popup-container").style.display="inline";
        document.getElementById("close-popup-button").style.display="inline";
    }
})

const closePopup = document.querySelector('#close-popup-button');

closePopup.addEventListener('click', closeSuccessPopup)
    function closeSuccessPopup() {
        document.getElementById("success-popup").style.display="none";
        document.getElementById("popup-container").style.display="none";
        document.getElementById("close-popup-button").style.display="none";
}

// ================================================================== 
//
//                 Test code for Regex
//
// ==================================================================

// const isEmailValid = (email) => {
//     const regexEmail = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
//     return regexEmail.test(email);
// }; 

// form.addEventListener('submit', (e) =>{
// if (email.value.match(regex)) {

// } else {
//     alert("This is an invalid Email Address! Please enter another or check it over.")
// }
// });




    // let regex = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    // return regex.test(String(email).toLowerCase());

