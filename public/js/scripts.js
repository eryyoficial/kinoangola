/**
 * HOME PAGE - LISTA DE ESTABELECIMENTOS
 */















/**================================== LOGIN ================================== */
$('#loginForm').on('submit', function (event) {
    event.preventDefault();
    $.ajax({
        url: '/auth/login',
        method: 'POST',
        data: {
            username: $('#username').val(),
            password: $('#password').val()
        },
        success: function (response) {
            window.location.href = response.redirectUrl; // redirect based on role
        },
        error: function (xhr) {
            alert('Login falhou: ' + xhr.responseText);
        }
    });
});
