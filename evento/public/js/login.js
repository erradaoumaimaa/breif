const loginPopup = document.getElementById('login-popup');

const showLogin = () => {

    loginPopup.classList.remove('hidden');
}

const closeLogin = () => {

    loginPopup.classList.add('hidden');
}
