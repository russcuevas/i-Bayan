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
        <h3 class="mt-3 mb-3" style="font-weight: 900;">Welcome admin!</h3>

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
            <div class="d-flex justify-content-center align-items-center">
                <div>
                    <small class="small text-center">
                        Don't have an account yet?
                        <a class="fw-bold text-primary" href="#" data-bs-toggle="modal" data-bs-target="#contactAdminModal" style="text-decoration: none;">How to register</a>
                    </small>
                </div>
            </div>

            <div class="d-flex justify-content-center align-items-center">
                <div>
                    <small class="small text-center">
                        Forgot Password?
                        <a class="fw-bold text-primary" href="#" data-bs-toggle="modal" data-bs-target="#forgotPasswordModal" style="text-decoration: none;">Click here to read</a>
                </div>
            </div>
        </form>
    </div>

    <!-- CONTACT SUPERADMIN MODAL -->
    <div class="modal fade" id="contactAdminModal" tabindex="-1" aria-labelledby="contactAdminModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content rounded-3">
                <div class="modal-header">
                    <h5 class="modal-title fw-bold" id="contactAdminModalLabel">Contact</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p style="text-align: left;">To create a new account, please contact the Super Admin using the following details:</p>
                    <ol class="fw-semibold text-start">
                        <li><strong>Email:</strong> admin@example.com</li>
                        <li><strong>Phone:</strong> +63 912 345 6789</li>
                    </ol>
                    <p>Alternatively, you may visit the admin office <br> during working hours to request an account.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary rounded-pill" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- MODAL FORGOT PASSWORD -->
    <div class="modal fade" id="forgotPasswordModal" tabindex="-1" aria-labelledby="forgotPasswordModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content rounded-3">
                <div class="modal-header">
                    <h5 class="modal-title fw-bold" id="forgotPasswordModalLabel">How to Forgot Your Password?</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <ol class="fw-semibold text-start">
                        <li>Visit your Barangay Hall for verification.</li>
                        <li>Bring a valid ID for identification.</li>
                        <li>Request a password reset form from the staff.</li>
                        <li>Wait for confirmation the staff to change your password</li>
                        <li>Use the temporary password and change it immediately.</li>
                    </ol>
                    <p class="mt-3 mb-0 text-muted">For more help, contact the iBayan support desk at your LGU office.</p>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary rounded-pill" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>



    <div class="relative flex items-center justify-center d-md-none">
        <img class="mt-0 img-fluid" src="images/city-mobile.png" alt="" style="max-width: 100%; height: auto; color: transparent;">
    </div>
    <div class="relative flex items-center justify-center d-none d-md-block">
        <img class="mt-0 img-fluid" src="images/city-desktop.png" alt="" style="max-width: 100%; height: auto; color: transparent;">
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