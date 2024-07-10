function validateForm() {
    var name = document.getElementById('name').value.trim();
    var email = document.getElementById('email').value.trim();
    var password = document.getElementById('password').value.trim();
    var confirmPassword = document.getElementById('confirmPassword').value.trim();

    var isValid = true;

    if (name === '') {
        alert('Name is required');
        isValid = false;
    }
    else if (email === '') {
        alert('Email is required');
        isValid = false;
    }
    else if (password === '') {
        alert('Password is required');
        isValid = false;
    }
    else if (confirmPassword === '') {
        alert('Confirm Password is required');
        isValid = false;
    } else if (password !== confirmPassword) {
        alert('Passwords do not match');
        isValid = false;
    }

    return isValid;
}



