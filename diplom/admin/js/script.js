'use strict'

//Вход в админ-панель    

let authForm = document.querySelector(".auth-form");
authForm.onsubmit = function(event) {
    event.preventDefault();
    sendForm(authForm);
}
function sendForm(form) {
    let formData = new FormData(form);
    fetch(form.action, { 
        method: form.method,
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
                location.href = "admin.php";
            } else {
                showErrorText(result);
            }
        });
}
function showErrorText(text) {
    let p = document.querySelector(".error-text");
    p.innerHTML = text;
}

//Удаление пользователя в админ-панели

