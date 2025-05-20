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
            <li><a href="manage_admin.php">Barangay Admins</a></li>
            <li class='active'><span><strong style="font-weight: 900 !important; color: white !important;">Create Application</strong></span></li>
        </ol>

        <form id="application-form" class="main-form" action="" method="post">
            <div class="row">
                <div class="col-md-3">
                    <div class="card card-default">
                        <div class="card-body">
                            <h4 class="bold span-or mb-4" style="font-weight: 900;">
                                Profile Information
                            </h4>

                            <h6>Barangay: </h6>
                            <h6>Fullname: </h6>
                            <h6>Position: </h6>
                            <h6>Contact Number: </h6>
                        </div>
                    </div>
                </div>
        </form>
        <div class="application-create col-md-9">

            <div class="information-registration-form">
                <form id="information-registration-form" class="main-form" action="" method="post">
                    <div class="row">
                        <div class="col-md-12">
                            <h4 class="bold span-or mb-4" style="font-weight: 900;">
                                Barangay Admin Information
                            </h4>
                            <div class="row">
                                <div class="col-md-6 ">
                                    <div class="card card-default mb-3">
                                        <div class="card-body">
                                            <h5 class="bold text-secondary">Profile Information</h5>
                                            <div class="row">
                                                <div class="mb-3 field-businessdata-bsd_name required">
                                                    <label class="form-label" for="businessdata-bsd_name">Fullname <span style="color: red;">*</span></label>
                                                    <input style="font-weight: 900;" type="text" id="businessdata-bsd_name" class="form-control text-uppercase" name="first_name" aria-required="true">
                                                    <div class="invalid-feedback"></div>
                                                </div>
                                            </div>

                                            <div class="mb-3 field-businessdata-bsd_name required">
                                                <label class="form-label" for="status">Barangay <span style="color: red;">*</span></label>
                                                <select id="status" name="status" class="form-select mb-3" aria-label="Select status" style="font-weight: 900;" onchange="toggleIDField()">
                                                    <option value="" disabled selected>SELECT BARANGAY</option>
                                                </select>
                                                <div class="invalid-feedback"></div>
                                            </div>

                                            <div class="row">
                                                <div class="mb-3 field-businessdata-bsd_name required">
                                                    <label class="form-label" for="businessdata-bsd_name">Position <span style="color: red;">*</span></label>
                                                    <input style="font-weight: 900;" type="text" id="businessdata-bsd_name" class="form-control text-uppercase" name="first_name" aria-required="true">
                                                    <div class="invalid-feedback"></div>
                                                </div>
                                            </div>
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
                                </div>

                                <div class="col-md-6">
                                    <div class="card card-default">
                                        <div class="card-body">
                                            <h5 class="bold text-secondary">Account Information</h5>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="mb-3 field-taxpayerdata-txd_mobile_no required">
                                                        <label class="form-label" for="taxpayerdata-txd_mobile_no">Username <span style="color: red;">*</span></label>
                                                        <input style="font-weight: 900;" type="text" id="taxpayerdata-txd_mobile_no" class="form-control" name="" data-mdb-input-mask="data-mdb-input-mask" aria-required="true">
                                                        <div class="invalid-feedback"></div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mb-3 field-taxpayerdata-txd_email_address required">
                                                        <label class="form-label" for="taxpayerdata-txd_email_address">Password <span style="color: red;">*</span></label>
                                                        <input style="font-weight: 900;" type="text" id="taxpayerdata-txd_email_address" class="form-control" name="" value="" aria-required="true">
                                                        <div class="invalid-feedback"></div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mb-3 field-taxpayerdata-txd_email_address required">
                                                        <label class="form-label" for="taxpayerdata-txd_email_address">Confirm Password <span style="color: red;">*</span></label>
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
</body>

</html>