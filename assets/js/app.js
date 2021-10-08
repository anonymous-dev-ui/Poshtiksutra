window.onscroll = function() { scrollFunction() };

function scrollFunction() {
    if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
        document.getElementById("header").classList.add("sticky");
    } else {
        document.getElementById("header").classList.remove("sticky");
    }
}
var toggle = document.querySelectorAll(".question>.question-box>.toggle-answer");

var tabs = document.querySelectorAll(".question");
toggle.forEach(element => {
    element.onclick = () => {
        for (let i = 0; i < tabs.length; i++) {
            tabs[i].classList.remove("active");
        }
        element.parentNode.parentNode.classList.add("active");
    };
});
var quickview = document.querySelectorAll(".quickView");
quickview.forEach(element => {
    element.onclick = () => {
        document.querySelector(".productView").classList.toggle("active");
    }

});
var newsletter = document.querySelectorAll(".newsletter");
newsletter.forEach(element => {

    element.onclick = () => {
        document.querySelector(".newsletterPopup").classList.toggle("active");
    }
});
var cart = document.querySelector("#cart");


cart.onclick = () => {
    document.querySelector(".cartbar").classList.toggle("active");
}