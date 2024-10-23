document.getElementById('loginForm').addEventListener('submit', function (e) {
    const username = document.getElementById('username').value;
    const password = document.getElementById('password').value;
    let valid = true;

    document.getElementById('usernameError').style.display = 'none';
    document.getElementById('passwordError').style.display = 'none';

    if (username === '') {
        document.getElementById('usernameError').innerText = 'Harus terisi';
        document.getElementById('usernameError').style.display = 'block';
        valid = false;
    }

    if (password === '') {
        document.getElementById('passwordError').innerText = 'Harus terisi';
        document.getElementById('passwordError').style.display = 'block';
        valid = false;
    } else if (password.length > 6) {
        document.getElementById('passwordError').innerText = 'Password maksimal 6 karakter';
        document.getElementById('passwordError').style.display = 'block';
        valid = false;
    } else if (!/[A-Z]/.test(password) || !/[a-z]/.test(password)) {
        document.getElementById('passwordError').innerText = 'Password harus terdiri dari huruf besar dan kecil';
        document.getElementById('passwordError').style.display = 'block';
        valid = false;
    }

    if (!valid) {
        e.preventDefault(); 
    }
});
