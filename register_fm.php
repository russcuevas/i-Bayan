<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>iBayan</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/fillup.css">
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

    <div class="container-fluid" style="margin:1rem 0 1rem 0;">
        <ol class="breadcrumb breadcrumb-arrow shadow-sm">
            <li><a href="home.php"><i class="bi bi-house-fill"></i></a></li>
            <li><a href="status_fm.php">Family Members</a></li>
            <li class='active'><span><strong style="font-weight: 900 !important; color: white !important;">Create Application</strong></span></li>
        </ol>

        <form id="application-form" class="main-form" action="/mataasnakahoybatangas/business-permit/application/new" method="post">
            <div class="row">
                <div class="col-md-3">
                    <div class="card card-default">
                        <div class="card-body">
                            <h4 class="bold span-or mb-4" style="font-weight: 900;">
                                Rules & Terms
                            </h4>
                            <div class="d-flex flex-column mt-2">
                                <div class="alert alert-primary alert-dismissible mb-3 small" role="alert">
                                    <div class="d-flex flex-nowrap">
                                        <i class="btn-icon fas fa-info-circle"></i>
                                        <div class="flex-column">
                                            <p class="m-0">
                                                In accordance to R.A. 10173 or Data Privacy Act, all collected information will
                                                be treated with utmost confidentiality and will not be subjected to public
                                                disclosure.
                                            </p>
                                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <strong>Registration Procedure</strong>
                                <ol>
                                    <li> The information provided is certified as true and correct. </li>
                                    <li> If it is successfully registered the admin will verified and approved if you fill out the requirements. </li>
                                    <li> Residents should not create multiple. </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
        </form>
        <div class="application-create col-md-9">

            <div class="information-registration-form">
                <form id="information-registration-form" class="main-form" action="/mataasnakahoybatangas/business-permit/application/new" method="post">
                    <div class="row">
                        <div class="col-md-12">
                            <h4 class="bold span-or mb-4" style="font-weight: 900;">
                                Family Information
                            </h4>
                            <div class="row">
                                <div class="col-md-6 ">
                                    <div class="card card-default mb-3">
                                        <div class="card-body">
                                            <h5 class="bold text-secondary mb-3">Family Information</h5>
                                            <div class="mb-3 field-familydata-relationship required">
                                                <label class="form-label" for="familydata-relationship">Relationship <span style="color: red;">*</span></label>
                                                <div class="kv-plugin-loading loading-familydata-relationship"></div>
                                                <select id="familydata-relationship" class="form-control" style="font-weight: 900;" name="">
                                                    <option value="1">Son</option>
                                                    <option value="2">Grandmother</option>
                                                    <option value="3">Grandfather</option>
                                                    <option value="4">Father</option>
                                                    <option value="5">Wife</option>
                                                    <option value="1">Siblings</option>
                                                </select>
                                                <div class="invalid-feedback"></div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="mb-3 field-businessdata-bsd_name required">
                                                        <label class="form-label" for="businessdata-bsd_name">First name <span style="color: red;">*</span></label>
                                                        <input style="font-weight: 900;" type="text" id="businessdata-bsd_name" class="form-control text-uppercase" name="first_name" aria-required="true">
                                                        <div class="invalid-feedback"></div>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">

                                                    <div class="mb-3 field-businessdata-bsd_name required">
                                                        <label class="form-label" for="businessdata-bsd_name">Middle name</label>
                                                        <input style="font-weight: 900;" type="text" id="businessdata-bsd_name" class="form-control text-uppercase" name="middle_name" aria-required="true">
                                                        <div class="invalid-feedback"></div>
                                                    </div>
                                                </div>

                                            </div>

                                            <div class="row">
                                                <div class="col-md-6">

                                                    <div class="mb-3 field-businessdata-bsd_name required">
                                                        <label class="form-label" for="businessdata-bsd_name">Last name <span style="color: red;">*</span></label>
                                                        <input style="font-weight: 900;" type="text" id="businessdata-bsd_name" class="form-control text-uppercase" name="last_name" aria-required="true">
                                                        <div class="invalid-feedback"></div>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">

                                                    <div class="mb-3 field-businessdata-bsd_name required">
                                                        <label class="form-label" for="businessdata-bsd_name">Suffix</label>
                                                        <input style="font-weight: 900;" type="text" id="businessdata-bsd_name" class="form-control text-uppercase" name="suffix" aria-required="true">
                                                        <div class="invalid-feedback"></div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="sex-div">
                                                <div class="mb-3">
                                                    <label class="form-label d-block">Sex <span style="color: red;">*</span></label>
                                                    <div class="row" role="radiogroup">
                                                        <div class="col-md-6">
                                                            <div class="form-check">
                                                                <input type="radio" id="i2" class="form-check-input" name="sex" value="male" required>
                                                                <label class="form-check-label" for="i2">Male</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-check">
                                                                <input type="radio" id="i3" class="form-check-input" name="sex" value="female" required>
                                                                <label class="form-check-label" for="i3">Female</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="mb-3 field-businessdata-bsd_name required">
                                                <label class="form-label" for="businessdata-bsd_name">Birthdate <span style="color: red;">*</span></label>
                                                <input style="font-weight: 900;" type="date" id="businessdata-bsd_name" class="form-control text-uppercase" name="birthdate" aria-required="true">
                                                <div class="invalid-feedback"></div>
                                            </div>


                                            <div class="mb-3 field-sysuser-sys_barangay">
                                                <label class="form-label" for="sysuser-sys_barangay">Address <span style="color: red;">*</span></label>
                                                <select class="form-select" aria-label=".form-select-lg example" style="font-weight: 900;">
                                                    <option selected disabled>SELECT BARANGAY</option>
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

                                <div class="col-md-6">
                                    <div class="card card-default mb-3">
                                        <div class="card-body">
                                            <h5 class="bold text-secondary">Registration Requirement</h5>
                                            <label class="form-label" for="status">Status <span style="color: red;">*</span></label>
                                            <select id="status" name="status" class="form-select mb-3" aria-label="Select status" style="font-weight: 900;" onchange="toggleIDField()">
                                                <option value="" disabled selected>SELECT STATUS</option>
                                                <option value="student">Student</option>
                                                <option value="working">Working</option>
                                            </select>

                                            <!-- Working: Valid ID -->
                                            <div id="valid-id-field" class="mb-3 d-none">
                                                <label class="form-label" for="valid_id">Valid ID <span style="color: red;">*</span></label>
                                                <input type="file" id="valid_id" name="valid_id" style="font-weight: 900" class="form-control" required>
                                                <div class="invalid-feedback"></div>
                                            </div>

                                            <!-- Student: Student ID -->
                                            <div id="student-id-field" class="mb-3 d-none">
                                                <label class="form-label" for="student_id">Student ID <span style="color: red;">*</span></label>
                                                <input type="file" id="student_id" name="student_id" style="font-weight: 900" class="form-control" required>
                                                <div class="invalid-feedback"></div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="card card-default">
                                        <div class="card-body">
                                            <h5 class="bold text-secondary">Contact Information</h5>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="mb-3 field-taxpayerdata-txd_mobile_no required">
                                                        <label class="form-label" for="taxpayerdata-txd_mobile_no">Mobile No. <span style="color: red;">*</span></label>
                                                        <input style="font-weight: 900;" type="text" id="taxpayerdata-txd_mobile_no" class="form-control" name="" data-mdb-input-mask="data-mdb-input-mask" aria-required="true">
                                                        <div class="invalid-feedback"></div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mb-3 field-taxpayerdata-txd_email_address required">
                                                        <label class="form-label" for="taxpayerdata-txd_email_address">Email Address <span style="color: red;">*</span></label>
                                                        <input style="font-weight: 900;" type="text" id="taxpayerdata-txd_email_address" class="form-control" name="" value="" aria-required="true">
                                                        <div class="invalid-feedback"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="d-flex justify-content-end my-4">
                                        <button type="submit" class="btn btn-primary btn-custom" name="submit">
                                            <i class="fas fa-paper-plane"></i> Submit
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>


        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
        <script>
            function scrollToBottom() {
                const chatMessages = document.querySelector('.chat-messages');
                chatMessages.scrollTop = chatMessages.scrollHeight;
            }
            window.onload = function() {
                scrollToBottom();
            };
        </script>

        <!-- SHOW REQUIREMENT STATUS ID -->
        <script>
            function toggleIDField() {
                const status = document.getElementById('status').value;
                const validIdField = document.getElementById('valid-id-field');
                const studentIdField = document.getElementById('student-id-field');

                validIdField.classList.add('d-none');
                studentIdField.classList.add('d-none');

                if (status === 'working') {
                    validIdField.classList.remove('d-none');
                } else if (status === 'student') {
                    studentIdField.classList.remove('d-none');
                }
            }
        </script>
</body>

</html>