<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>iBayan</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
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
            <li><a href="index.php"><i class="bi bi-house-fill"></i></a></li>
            <li class='active'><span><strong style="font-weight: 900 !important; color: white !important;">BARANGAY ADMINS</strong></span></li>
        </ol>
        <div class="application-index" style="height: 100vh;">
            <div id="application-grid">
                <div class="d-none d-md-block">
                    <div class="d-flex justify-content-between align-items-center">
                        <div style="flex: 1;">
                            <h4 class="m-0 text-uppercase" style="font-weight: 900;">
                                <img src="images/document.png" alt="BPLS" style="width: 30px;"> BARANGAY ADMINS
                            </h4>
                        </div>
                        <div class="text-center text-md-right">
                            <a class="btn btn-primary w-100 mb-3" style="font-weight: 900;" href="add_admin.php">New Application</a>
                        </div>
                    </div>
                </div>

                <!-- Mobile View -->
                <div class="d-md-none mb-3 mt-3">
                    <div class="col">
                        <div class="row-md-6 mb-3">
                            <h4 class="m-0 text-uppercase" style="font-weight: 900;">
                                <img src="images/document.png" alt="BPLS" style="width: 30px;"> FAMILY MEMBERS
                            </h4>
                        </div>
                        <div class="row-md-6">
                            <div class="text-center d-grid gap-2">
                                <a class="btn btn-primary w-100 mb-3" style="font-weight: 900;" href="add_admin.php">New Application</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="table-responsive">
                    <table id="applicationTable" class="table display nowrap" style="width:100%">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Barangay</th>
                                <th>Fullname</th>
                                <th>Position</th>
                                <th>Status</th>
                                <th>Created At</th>
                                <th>Updated At</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>2</td>
                                <td>3</td>
                                <td>4</td>
                                <td>5</td>
                                <td>6</td>
                                <td>7</td>
                            </tr>
                        </tbody>
                    </table>
                </div>


            </div>
        </div>
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
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="assets/js/time.js"></script>
    <script>
        $(document).ready(function() {
            $('#applicationTable').DataTable({
                scrollX: true, // enable horizontal scrolling
                responsive: true,
                pageLength: 10,
                ordering: true,
                searching: true,
                lengthChange: false
            });

        });
    </script>

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