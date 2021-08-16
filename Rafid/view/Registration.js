const form = document.getElementById('form');
const username = document.getElementById('username');
const email = document.getElementById('email');
const password = document.getElementById('password');
const password check = document.getElementById('password check');

form.addEventListener('submit', (0) =>{
	e.preventDefault();

	checkInput();
});

function checkInputs(){
	const usernameValue = username.value.trim();
	const emailValue = email.value.trim();
	const passwordValue = password.value.trim();
	const passwordcheckValue = password check.value.trim();

	if (usernameValue === '') {
		setErrorFor(username, 'Username cannot be blank');
	} else {
		setSuccessFor(username);
	}
}