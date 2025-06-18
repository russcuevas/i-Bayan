<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>iBayan</title>
    <link rel="icon" href="img/logo.png" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="css/login.css">
</head>

<body>

    <div class="container text-center login-container">
        <img src="img/logo.png" alt="Municipality Seal" class="login-seal">
        <h3 class="mt-3 mb-3" style="font-weight: 900;">Welcome superadmin!</h3>

        <form class="needs-validation" novalidate>
            <div class="form-group position-relative mb-3 text-start">
                <input type="text" class="form-control rounded-pill px-4" style="font-weight: 900" id="username" placeholder="Username" required>
                <div class="invalid-feedback ms-2">
                    Please enter your username.
                </div>
            </div>

            <div class="form-group position-relative mb-3 text-start">
                <input type="password" class="form-control rounded-pill px-4" style="font-weight: 900" id="password" placeholder="Password" required>
                <div class="invalid-feedback ms-2">
                    Please enter your password.
                </div>
            </div>
            <button class="btn btn-primary w-100 rounded-pill mt-3 mb-3" style="font-weight: 900;" name="" type="submit">Login ➜</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>
    <script>
        (function() {
            'use strict';
            var forms = document.querySelectorAll('.needs-validation');
            Array.prototype.slice.call(forms).forEach(function(form) {
                form.addEventListener('submit', function(event) {
                    if (!form.checkValidity()) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });
        })();
    </script>



</body>

</html>