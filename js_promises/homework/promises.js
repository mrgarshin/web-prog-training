"use strict"

let modalButton = document.querySelector(".open-modal-button");
modalButton.onclick = showModal;

function showModal() {
	let modalContainer = document.querySelector(".modal-container");
	modalContainer.style.display = "block";
	//Перепешите код ниже, задействова синтаксис промисов
	// setTimeout(() => {
	//   showModalBackground()
	//   setTimeout(() => {
	//     showModalWindow()
	//     setTimeout(() => {
	//       alert("Модальное окно полностью показано");
	//     }, 1000);
	//   },1000); 
	// },30)
	//Что должно получиться
	setTimeout(() => {
		showModalBackground()
			.then(() => {return showModalWindow()})
			.then(() => {alert("Модальное окно полностью показано")})
	}, 30);
}

//Перепешите эти функции, использовав синтаксис промисов, чтобы по окончанию анимации вызывался resolve(). Для того, чтобы вызврать resolve() по окончанию анимации, воспользуйтесь событием "transitionend"
function showModalBackground() {
	 return new Promise(function(resolve, reject) {
		let modalBackground = document.querySelector(".modal-background");
		modalBackground.style.height = "100vh";
		modalBackground.ontransitionend = () => {
			resolve();
		}
	});
}
function showModalWindow() {
	return new Promise(function(resolve, reject) {
		let modalWindow = document.querySelector(".modal-window");
		modalWindow.style.opacity = "1";		
		setTimeout(() => {
			resolve() 
		}, 1000)
	});
}