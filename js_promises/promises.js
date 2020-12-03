"use strict"

let redLight = document.querySelector(".red");
let yellowLight = document.querySelector(".yellow");
let greenLight = document.querySelector(".green");

let redTime = 3000;
let yellowTime = 1000;
let greenTime = 2000;

//Адская пирамида колбэков\вызовов (как в учебнике)
startWorking();
// function startWorking() {
//   turnRed();
//   setTimeout(() => {
//     turnYellow();
//     setTimeout(() => {
//       turnGreen();
//       setTimeout(() => {
//         turnYellow();
//         setTimeout(() => {
//           startWorking();
//         } ,yellowTime);
//       }, greenTime);
//     }, yellowTime);
//   }, redTime);
// }
function startWorking() {
    turnRed()
        .then(() => {return turnYellow()})
        .then(() => {return turnGreen()})    
        .then(() => {return turnYellow()})
        .then(() => {startWorking()});
}
function turnRed() {
    return new Promise( function (resolve, reject) {
        redLight.style.backgroundColor = "red";
        yellowLight.style.backgroundColor = "";
        greenLight.style.backgroundColor = "";
        setTimeout(() => {
            resolve();
        }, redTime);
    });
}

function turnYellow() {
    return new Promise( function (resolve, reject) {
        redLight.style.backgroundColor = "";
        yellowLight.style.backgroundColor = "yellow";
        greenLight.style.backgroundColor = "";
        setTimeout(() => {
            resolve();
        }, yellowTime);
    });
}

function turnGreen() {
    return new Promise( function (resolve, reject) {
        redLight.style.backgroundColor = "";
        yellowLight.style.backgroundColor = "";
        greenLight.style.backgroundColor = "green";
        setTimeout(() => {
            resolve();
        }, greenTime);
    });
}


function calculate (a, b) {
    return new Promise(function (resolve, reject){
        console.log("Промис начал свою работу");
        setTimeout(() => {
            resolve(a + b); //resolve - успешное завершение промиса
        }, getRandomInt(3000, 5000));
        setTimeout(() => {
            reject(a + b);
        }, getRandomInt(3000, 5000));
    });
}

calculate(5, 7)
    .then((result) => {console.log("Промис выполнился успешно! " + result)})
    .catch((result) => {console.log("Промис завершился с ошибкой! " + result)})
    .finally(() => {console.log("Промис завершил работу!")});
    
function getRandomInt(start, end) {
    return start + Math.floor(Math.random()*(end - start));
}

let car = document.querySelector(".car");

drive();
function drive() {
  driveLeft()
    .then(() => teleportRight())
    .then(() => drive());
}

function driveLeft() {
  return new Promise(function(resolve, reject) {
    car.style.transition = "left 5s linear";
    car.style.left = "100%";
    car.ontransitionend = () => {
      car.ontransitionend = null;
      resolve();
    };
  });
}

function teleportRight() {
  return new Promise(function(resolve, reject) {
    car.style.transition = "";
    car.style.left = (0 - car.getBoundingClientRect().width) + "px";
    setTimeout(() => {
      resolve();
    }, 0);
  });
}





















