<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>iBayan</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="assets/css/login.css">
    <style>
        .lgu-logo-wrapper {
            background-origin: content-box;
            background-size: contain;
            background-repeat: no-repeat;
            background-position: center;
            background-image: url(images/logo.png);
            width: 70px;
            height: 70px;
            margin-top: 5px;
            float: left;
            margin-right: 20px;
        }
    </style>
</head>

<body>

    <?php include 'components/navbar.php' ?>

    <div class="user-form" style="padding: 20px;">
        <form id="w0" action="" method="post">
            <div class="container-fluid">
                <div class="row">
                    <div class="">
                        <h3 class="bold mb-3 mt-3" style="font-weight: 900;">
                            <i class="fas fa-user"></i> REGISTER ACCOUNT
                        </h3>
                        <div class="row">
                            <!-- Registrant Profile  -->
                            <div class="col-md-4 mb-3">
                                <div class="card card-primary" style="border-top-width: 5px; border-color: #0036C5;">
                                    <div class="card-body">
                                        <h6 class="card-title bold text-primary mb-3" style="color: #0036C5 !important; font-weight: 900;">
                                            <i class="fas fa-id-card-alt"></i> REGISTRANT PROFILE
                                        </h6>
                                        <div class="mb-3 field-sysuser-sys_firstname required">
                                            <label class="form-label" for="sysuser-sys_firstname">First Name <span style="color: red;">*</span></label>
                                            <input type="text" id="sysuser-sys_firstname" class="form-control text-input" style="font-weight: 900" name="" maxlength="500" placeholder="First name" required>
                                            <div class="invalid-feedback"></div>
                                        </div>
                                        <div class="mb-3 field-sysuser-sys_middlename">
                                            <label class="form-label" for="sysuser-sys_middlename">Middle Name</label>
                                            <input type="text" id="sysuser-sys_middlename" class="form-control text-input" style="font-weight: 900" name="" maxlength="500" placeholder="Middle name">
                                            <div class="invalid-feedback"></div>
                                        </div>
                                        <div class="mb-3 field-sysuser-sys_lastname required">
                                            <label class="form-label" for="sysuser-sys_lastname">Last Name <span style="color: red;">*</span></label>
                                            <input type="text" id="sysuser-sys_lastname" class="form-control text-input" style="font-weight: 900" name="" maxlength="500" placeholder="Last name" required>
                                            <div class="invalid-feedback"></div>
                                        </div>
                                        <div class="mb-3 field-sysuser-sys_ext_name">
                                            <label class="form-label" for="sysuser-sys_ext_name">Extension Name</label>
                                            <input type="text" id="sysuser-sys_ext_name" class="form-control text-input" style="font-weight: 900" name="" maxlength="50" placeholder="e.g. Jr, III">
                                            <div class="invalid-feedback"></div>
                                        </div>
                                        <div class="mb-3 field-sysuser-sys_barangay">
                                            <label class="form-label" for="sysuser-sys_barangay">Address <span style="color: red;">*</span></label>
                                            <select class="form-select" aria-label=".form-select-lg example" style="font-weight: 900;">
                                                <option selected>SELECT BARANGAY</option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                            </select>
                                            <div class="mb-3 mt-3 field-sysuser-sys_purok required">
                                                <div class="input-group">
                                                    <input type="text" id="sysuser-sys_purok" style="font-weight: 900" class="form-control" name="" maxlength="500" placeholder="Purok" required>
                                                    <div class="invalid-feedback"></div>
                                                </div>
                                            </div>
                                            <div class="mb-3 field-sysuser-sys_municipality required">
                                                <div class="input-group">
                                                    <input type="text" id="sysuser-sys_municipality" style="font-weight: 900; background-color: #F2F6FE;" class="form-control" name="" placeholder="Mataasnakahoy" readonly>
                                                    <div class="invalid-feedback"></div>
                                                </div>
                                            </div>
                                            <div class="mb-3 field-sysuser-sys_zip_code required">
                                                <div class="input-group">
                                                    <input type="text" id="sysuser-sys_zip_code" style="font-weight: 900; background-color: #F2F6FE;" class="form-control" name="" placeholder="4223" readonly>
                                                    <div class="invalid-feedback"></div>
                                                </div>
                                            </div>
                                            <div class="invalid-feedback"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Account Details -->
                            <div class="col-md-4 mb-3">
                                <div class="card card-primary" style="border-top-width: 5px; border-color: #0036C5;">
                                    <div class="card-body">
                                        <h6 class="card-title bold text-primary mb-3" style="color: #0036C5 !important; font-weight: 900;">
                                            <i class="fas fa-user-cog"></i> ACCOUNT DETAILS
                                        </h6>
                                        <div class="mb-3 field-sysuser-sys_username required">
                                            <label class="form-label" for="sysuser-sys_username">Account <span style="color: red;">*</span></label>
                                            <input type="text" id="sysuser-sys_username" style="font-weight: 900" class="form-control" name="" maxlength="500" placeholder="Username" required>

                                            <div class="invalid-feedback"></div>
                                        </div>
                                        <div class="mb-3 field-sysuser-sys_password required">

                                            <div class="input-group">
                                                <input type="password" id="sysuser-sys_password" style="font-weight: 900" class="form-control" name="" maxlength="500" placeholder="Password" required>
                                                <div class="invalid-feedback"></div>
                                            </div>
                                        </div>
                                        <div class="mb-3 field-sysuser-password_repeat required">

                                            <div class="input-group">
                                                <input type="password" id="sysuser-password_repeat" style="font-weight: 900" class="form-control" name="" placeholder="Verify Password" required>
                                                <div class="invalid-feedback"></div>
                                            </div>
                                        </div>
                                        <div class="mb-3 field-sysuser-sys_email_address required">
                                            <label class="form-label" for="sysuser-sys_email_address">Email Address <span style="color: red;">*</span></label>
                                            <input type="text" id="sysuser-sys_email_address" style="font-weight: 900" class="form-control" name="" maxlength="500" placeholder="Email address" required>

                                            <div class="invalid-feedback"></div>
                                        </div>

                                        <div class="mb-3 field-sysuser-sys_valid_id required">
                                            <label class="form-label" for="sysuser-sys_valid_id">Valid ID <span style="color: red;">*</span></label>
                                            <input type="file" id="sysuser-sys_valid_id" style="font-weight: 900" class="form-control" name="" maxlength="500" placeholder="Email address" required>

                                            <div class="invalid-feedback"></div>
                                        </div>
                                        <div class="mb-3 field-sysuser-sys_contact_number">
                                            <label class="form-label" for="sysuser-sys_contact_number">Phone number <span style="color: red;">*</span></label>
                                            <input type="text" id="sysuser-sys_contact_number" class="form-control text-input" style="font-weight: 900" name="" maxlength="500" placeholder="Middle name">
                                            <div class="invalid-feedback"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Terms and conditions  -->
                            <div class="col-md-4 mb-3">
                                <div class="card card-primary" style="border-top-width: 5px; border-color: #0036C5;">
                                    <div class="card-body">
                                        <h6 class="card-title text-primary bold mb-3" style="color: #0036C5 !important; font-weight: 900;">
                                            <i class="fas fa-user-check"></i> TERMS AND CONDITIONS
                                        </h6>
                                        <strong>Registration</strong>
                                        <ol>
                                            <li> The information provided is certified as true and correct. </li>
                                            <li> Registrant should validate their account by clicking the verification link sent
                                                to the supplied email address. </li>
                                            <li> Registrant should not create multiple false accounts. </li>
                                            <li> Registrant should keep their account credentials and will not share to anyone.
                                            </li>
                                        </ol>
                                        <hr>
                                        <strong>Disclaimer</strong>
                                        <ol>
                                            <li> In accordance to R.A. 10173 or Data Privacy Act, all collected information will
                                                be treated with utmost confidentiality and will not be subjected to public
                                                disclosure. </li>
                                        </ol>
                                        <hr>
                                        <label for="isChecked">
                                            <input type="checkbox" id="isChecked" name="isChecked" value="check" required>
                                            <span style="margin: 0 auto"> <strong> I Accept the Terms and Conditions </strong></span>
                                        </label>
                                    </div>
                                </div>
                                <br>
                                <div class="float-end">
                                    <a class="btn bold" href="login.php" style="background-color: #D9D9D9; font-weight: 900;">BACK</a> <button type="submit" class="btn btn-primary bold"><strong>REGISTER</strong></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <br>
    </div>
    </div>
    <div>
        <a href="#" id="scroll-to-top" class="scroll-to-top"><i class="fas fa-angle-up"></i></a>
    </div>


    <div class="relative flex items-center justify-center d-md-none">
        <img class="mt-0 img-fluid" src="images/city-mobile.png" alt="" style="max-width: 100%; height: auto; color: transparent;">
    </div>
    <div class="relative flex items-center justify-center d-none d-md-block">
        <img class="mt-0 img-fluid" src="images/city-desktop.png" alt="" style="max-width: 100%; height: auto; color: transparent;">
    </div>

    <?php include 'components/footer.php' ?>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="assets/js/time.js"></script>
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