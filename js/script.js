document.addEventListener('DOMContentLoaded', function() {
    const loginForm = document.getElementById('loginForm');
    const errorMessage = document.getElementById('error-message');

    loginForm.addEventListener('submit', function(event) {
        errorMessage.textContent = ''; // Очищаем сообщение об ошибке

        const username = document.getElementById('username').value.trim();
        const password = document.getElementById('password').value.trim();

        if (username === '' || password === '') {
           event.preventDefault(); // Предотвращаем отправку формы
            errorMessage.textContent = 'Пожалуйста, заполните все поля.';
        } else if (password.length < 6) {
             event.preventDefault();
           errorMessage.textContent = 'Пароль должен быть не менее 6 символов';
        }
        // в реальном проекте здесь выполняется более серьезная валидация
    });
});
