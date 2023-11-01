const sign_in_btn = document.querySelector('#Sign-In-button');
const sign_up_btn = document.querySelector('#Sign-up-button');
const container = document.querySelector('.container');

sign_up_btn.addEventListener('click', () => {
    container.classList.add('sign-up-mode');
    document.querySelector('.sign-up-form').classList.add('right-panel-form'); // Add this line
});

sign_in_btn.addEventListener('click', () => {
    container.classList.remove('sign-up-mode');
    document.querySelector('.sign-up-form').classList.remove('right-panel-form'); // Add this line
});

// Add the code for handling the visibility of the sign-in and sign-up forms
const signInForm = document.querySelector('.sign-in-form');
const signUpForm = document.querySelector('.sign-up-form');

sign_in_btn.addEventListener('click', () => {
    signInForm.classList.add('form-visible');
    signUpForm.classList.remove('form-visible');
});

sign_up_btn.addEventListener('click', () => {
    signUpForm.classList.add('form-visible');
    signInForm.classList.remove('form-visible');
});
