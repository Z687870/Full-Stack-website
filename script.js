const authModal = document.querySelector('.auth-modal');
const loginLink = document.querySelector('.login-link');
const createLink = document.querySelector('.create-link');
const loginBtn = document.querySelector('.login-btn');
const closeBtn = document.querySelector('.close-btn');


createLink.addEventListener('click', () => authModal.classList.add('slide'));
loginLink.addEventListener('click', () => authModal.classList.remove('slide'));

loginBtn.addEventListener('click', () => authModal.classList.add('show'));
closeBtn.addEventListener('click', () => authModal.classList.remove('show','slide'));