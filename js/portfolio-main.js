// ================================================================== 
//
//                 start of the sidebar section
//
// ==================================================================

// function openNav() {
// document.getElementsByClassName("sidebar-navigation")[0].style.width = "100%";
// }
// This top function allows the sidebar to open on click (in the HTML code) which then brings the style of the sidebar to 100% (This is because I want the sidebar to be from the top.)

// function closeNav() {
//     document.getElementsByClassName("sidebar-navigation")[0].style.width = "0";
// }

// Unlike the top code the bottom code does not require any javascript in the HTML. This is good because its easier to change if its all in one place. I will stick with this one for now.
// If the top one is needed to be used then in the tag "onclick = opennav()" is needed. To close its the other way around.

const hamburgerButton = document.querySelector('.hamburger-btn');
const closeButton = document.querySelector('.close-btn');

hamburgerButton.addEventListener("click", openNav)
function openNav(){
    document.getElementsByClassName("sidebar-navigation")[0].style.width = "100%";
}

closeButton.addEventListener("click", closeNav)
function closeNav(){
    document.getElementsByClassName("sidebar-navigation")[0].style.width = "0";
}

