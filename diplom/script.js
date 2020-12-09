"use strict"
//Кнопка "наверх";
function trackScroll() {
	let scrolled = window.pageYOffset;
	let height = document.documentElement.clientHeight;
	if (scrolled > height) {
	  scrollUp.classList.add('scroll-up-active');
	} else {
	  scrollUp.classList.remove('scroll-up-active');
	}
}

function backToTop() {
	if (window.pageYOffset > 0) {
	  window.scrollTo (top)
	}
}

let scrollUp = document.querySelector('.scroll-up');

window.addEventListener('scroll', trackScroll);
scrollUp.addEventListener('click', backToTop);

//Слайдер;

let slideIndex = 1;
showSlides(slideIndex);

function nextSlide() {
    showSlides(slideIndex += 1);
}

function previousSlide() {
    showSlides(slideIndex -= 1);  
}

function currentSlide(n) {
    showSlides(slideIndex = n);
}

function showSlides(n) {
    let slides = document.getElementsByClassName("item");
    if (n > slides.length) {
      slideIndex = 1
    }
    if (n < 1) {
        slideIndex = slides.length
    }
    for (let slide of slides) {
        slide.style.display = "none";
    }
    slides[slideIndex - 1].style.display = "block";    
}

//Модалное окно после отправки формы
let showModalButton = document.querySelector(".button");
let modalWindow = document.querySelector(".modal-window");
let body = document.querySelector("body");
let closeButton = document.querySelector(".close-button");
closeButton.addEventListener("click", closeModalWindow);


function showModal() {
		modalWindow.style.display = "block";
}

function closeModalWindow () {
    modalWindow.style.display = "none";
}
//Отправка формы
let feedbackForm = document.querySelector(".feedback-form");
feedbackForm.onsubmit = function(event) {
    event.preventDefault();
    sendForm(feedbackForm);
}
function sendForm(form) {
    let formData = new FormData(form);
    fetch("form_obr.php", { 
        method: "POST",
        body: formData,
    })
        .then((response) => {
            if(response.ok){
                return response.text();
            } else {
                console.error("Ошибка HTTP: " + response.status);
            }
            })
        .then((result) => {
            if(result == "ok") {
                showModal();
            } else {
                showErrorText(result);
            }
        });
}
function showErrorText(text) {
    let p = document.querySelector(".error-text");
    p.innerHTML = text;
}
