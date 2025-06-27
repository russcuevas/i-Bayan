<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>iBayan</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/chatlinks.css">
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

    <!-- Login Form Section -->
    <div class="container-fluid" style="margin-top: 5px; padding: 12px !important; margin-bottom: 30px">
        <ol class="breadcrumb breadcrumb-arrow shadow-sm">
            <li><a href="index.php"><i class="bi bi-house-fill"></i></a></li>
            <li class='active'><span><strong style="font-weight: 900 !important; color: white !important;">Barangay ChatLinks</strong></span></li>
        </ol>
        <div class="row chat-container" style="padding: 12px; border: none !important;">
            <!-- Sidebar -->
            <div class="col-md-3 p-0 chat-sidebar">
                <div class="list-group list-group-flush">
                    <h5 style="text-align: center;" class="mt-2">BARANGAY CALINGATAN RESIDENTS</h5>
                    <a href="#" class="list-group-item list-group-item-action active">
                        <i class="bi bi-person-circle me-2"></i> John Doe
                    </a>
                    <a href="#" class="list-group-item list-group-item-action">
                        <i class="bi bi-person-circle me-2"></i> Jane Smith
                    </a>
                    <a href="#" class="list-group-item list-group-item-action">
                        <i class="bi bi-person-circle me-2"></i> Admin
                    </a>
                </div>
            </div>

            <!-- Chat Area -->
            <div class="col-md-9 d-flex flex-column p-0">
                <div class="" style="background-color: #1a49cb; padding: 5px; display: flex; justify-content: space-between; align-items: center;">
                    <span style="color: white; font-weight: bold;"></span>
                    <button class="btn btn-danger btn-sm" style="font-weight: 900;">
                        <i class="bi bi-trash"></i> Delete
                    </button>
                </div>

                <div class="chat-messages d-flex flex-column flex-grow-1">
                    <div class="message message-incoming">
                        <div class="bubble bubble-incoming">Hi! How can I help you?</div>
                        <div class="timestamp">10:00 AM</div>
                    </div>
                    <div class="message message-incoming">
                        <div class="bubble bubble-incoming">Hi! How can I help you?</div>
                        <div class="timestamp">10:00 AM</div>
                    </div>
                    <div class="message message-incoming">
                        <div class="bubble bubble-incoming">Hi! How can I help you?</div>
                        <div class="timestamp">10:00 AM</div>
                    </div>
                    <div class="message message-incoming">
                        <div class="bubble bubble-incoming">Hi! How can I help you?</div>
                        <div class="timestamp">10:00 AM</div>
                    </div>
                    <div class="message message-incoming">
                        <div class="bubble bubble-incoming">Hi! How can I help you?</div>
                        <div class="timestamp">10:00 AM</div>
                    </div>
                    <div class="message message-incoming">
                        <div class="bubble bubble-incoming">Hi! How can I help you?</div>
                        <div class="timestamp">10:00 AM</div>
                    </div>
                    <div class="message message-incoming">
                        <div class="bubble bubble-incoming">Hi! How can I help you?</div>
                        <div class="timestamp">10:00 AM</div>
                    </div>
                    <div class="message message-incoming">
                        <div class="bubble bubble-incoming">Hi! How can I help you?</div>
                        <div class="timestamp">10:00 AM</div>
                    </div>
                    <div class="message message-incoming">
                        <div class="bubble bubble-incoming">Hi! How can I help you?</div>
                        <div class="timestamp">10:00 AM</div>
                    </div>
                    <div class="message message-incoming">
                        <div class="bubble bubble-incoming">Hi! How can I help you?</div>
                        <div class="timestamp">10:00 AM</div>
                    </div>
                    <div class="message message-outgoing align-self-end">
                        <div class="bubble bubble-outgoing">I need help with my residency record.</div>
                        <div class="timestamp text-end">10:01 AM</div>
                    </div>
                    <div class="message message-incoming">
                        <div class="bubble bubble-incoming">Sure, please provide your barangay and name.</div>
                        <div class="timestamp">10:02 AM</div>
                    </div>
                </div>
                <div class="chat-input">
                    <div class="input-group">
                        <input style="border: 1px solid black;" type="text" class="form-control" placeholder="Type a message...">
                        <button class="btn btn-primary" type="button"><i class="bi bi-send"></i></button>
                    </div>
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

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="assets/js/time.js"></script>
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