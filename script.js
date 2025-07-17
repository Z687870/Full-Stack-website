const authModal = document.querySelector('.auth-modal');
const loginLink = document.querySelector('.login-link');
const createLink = document.querySelector('.create-link');
const loginBtn = document.querySelector('.login-btn');
const closeBtn = document.querySelector('.close-btn');
const profileInfo = document.querySelector('.profile-info');
const avatarCircle = document.querySelector('.avatar-circle');
const alertBox = document.querySelector('.alert-box')


createLink.addEventListener('click', () => authModal.classList.add('slide'));
loginLink.addEventListener('click', () => authModal.classList.remove('slide'));

loginBtn.addEventListener('click', () => authModal.classList.add('show'));
closeBtn.addEventListener('click', () => authModal.classList.remove('show','slide'));

avatarCircle.addEventListener('click',() => profileInfo.classList.toggle('show'));

setTimeout(() => alertBox.classList.add('show'),50)

setTimeout(() => {
    alertBox.classList.remove('show');
    setTimeout(() => alertBox.remove(), 1000);
}, 6000)