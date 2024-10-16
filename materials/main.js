﻿function setFormMessage(formElement, type, message){
    const messageElement = formElement.querySelector(".form__message");

    messageElement.textContent = message;
    messageElement.classList.remove("form__message--success", "form__message--error");
    messageElement.classList.add(`form__message--${type}`);
}

function setInputError(inputElement,message){
    inputElement.classList.add("form__input--error");
    inputElement.parentElement.querySelector(".form__input-error-message").textContent = message;
}

function clearInputError(inputElement){
    inputElement.classList.remove("form__input--error");
    inputElement.parentElement.querySelector(".form__input-error-message").textContent = "";
}

document.addEventListener("DOMContentLoaded", ()=>{
    const loginForm = document.querySelector("#Login");
    const createForm = document.querySelector("#Create");

    document.querySelector("#linkCreate").addEventListener("click",e =>{
        e.preventDefault();
        loginForm.classList.add("form--hidden");
        createForm.classList.remove("form--hidden");
    })
    document.querySelector("#linkLogin").addEventListener("click", e=>{
        e.preventDefault();
        loginForm.classList.remove("form--hidden");
        createForm.classList.add("form--hidden")
    })

    loginForm.addEventListener("submit",e=>{
        e.preventDefault();
        setFormMessage(loginForm, "Error", "Invalid username/password combination")
    })

    document.querySelectorAll(".form__input").forEach(inputElement => {
        inputElement.addEventListener("blur", e => {
            if (e.target.id === "name" && e.target.value.length > 0 && e.target.value.length < 5) {
                setInputError(inputElement, "Username must be atleast 5 characters in length")
            }
        });

        inputElement.addEventListener("blur", e => {
            if (e.target.id === "password" && e.target.value.length > 0 && e.target.value.length < 10) {
                setInputError(inputElement, "Password must be atleast 10 characters in length")
            }
        });

        inputElement.addEventListener("input", e=>{
            clearInputError(inputElement);
        });
    });
});