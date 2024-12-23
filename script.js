document.getElementById('show-password').addEventListener('click', function(event) {
    event.preventDefault();  // Prevent form submission if inside a form

    var passwordField = document.getElementById('password');
    var showPasswordText = document.getElementById('show-password');

    // Toggle password visibility
    if (passwordField.type === 'password') {
        passwordField.type = 'text';
        showPasswordText.textContent = 'Hide';
    } else {
        passwordField.type = 'password';
        showPasswordText.textContent = 'Show';
    }
});



// Detect when the "Remember me" checkbox is clicked
document.getElementById('remember-me').addEventListener('change', function() {
    if (this.checked) {
        console.log('Remember me checked');
    } else {
        console.log('Remember me unchecked');
    }
});


// Detect when the "Use token" checkbox is clicked
document.getElementById('use-token').addEventListener('change', function() {
    if (this.checked) {
        console.log('Use token checked');
    } else {
        console.log('Use token unchecked');
    }
});
