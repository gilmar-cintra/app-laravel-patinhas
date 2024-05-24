function togglePassword() {
    const passwordInput = $('#password');
    const eye = $('#eye');

    if ($(passwordInput).attr('type') === 'password') {
        $(passwordInput).attr('type','text');
        $(eye).removeClass('bi-eye');
        $(eye).addClass('bi-eye-slash');
    } else {
        $(passwordInput).attr('type','password');
        $(eye).addClass('bi-eye');
        $(eye).removeClass('bi-eye-slash');    }
}
