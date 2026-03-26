document.addEventListener('DOMContentLoaded', function (event) {
    const err = document.querySelector('.user_is_correct');
    const loginForm = document.getElementById('loginform');
    const valid = document.getElementById('valid');

    loginForm.addEventListener('submit', function (event) {
        event.preventDefault();

        const formData = new FormData(loginForm)

        fetch('log-in-api.php', {
            method: 'POST',
            body: formData
        })
            .then(r => r.json())
            .then(data => {
                if (data.success) {
                    err.classList.remove('active');
                    err.classList.add('active2');
                    valid.innerHTML = 'Username and Password are correct'
                    localStorage.setItem("userEmail", data.email);
                    window.location.href = '../home-page/home-page.php';

                } else {
                    console.error(data.error);
                    err.classList.add('active');
                }
            })

            .catch(err => console.error(err));
    });



});