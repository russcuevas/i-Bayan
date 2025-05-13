<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>iBayan</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/home.css">
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

        .chat-container {
            height: 80vh;
            border: 1px solid #dee2e6;
            border-radius: 10px;
            overflow: hidden;
            background-color: #fff;
        }

        .chat-sidebar {
            background-color: #f1f1f1;
            border-right: 1px solid #dee2e6;
        }

        .chat-messages {
            flex-grow: 1;
            overflow-y: auto;
            padding: 20px;
            background-color: #e9ecef;
            max-height: 65vh;
        }


        .chat-input {
            border-top: 1px solid #dee2e6;
            padding: 15px;
            background-color: #fff;
        }


        .message {
            display: flex;
            flex-direction: column;
            margin: 10px 15px;
            max-width: 75%;
        }

        .message-incoming {
            align-self: flex-start;
        }

        .message-outgoing {
            align-self: flex-end;
            text-align: right;
        }

        .bubble {
            padding: 10px 15px;
            border-radius: 20px;
            font-size: 0.95rem;
            line-height: 1.4;
            position: relative;
            word-wrap: break-word;
        }

        .bubble-incoming {
            background-color: #ffffff;
            border: 1px solid #dee2e6;
            color: #212529;
        }

        .bubble-outgoing {
            background-color: #0d6efd;
            color: white;
        }

        .timestamp {
            font-size: 0.75rem;
            color: #6c757d;
            margin-top: 4px;
        }


        @media (max-width: 767px) {
            .chat-container {
                height: 100vh;
                border-radius: 0;
            }
        }
    </style>
</head>

<body>

    <?php include 'components/navbar.php' ?>

    <!-- Login Form Section -->
    <div class="container px-4 py-5" id="featured-3" style="margin-top: 20px;">
        <h2 class="pb-2 mb-3" style="color: #1a49cb; font-size: 25px; font-weight: 900; text-align: left;">Chatlinks</h2>
        <div class="row chat-container">
            <!-- Sidebar -->
            <div class="col-md-3 p-0 chat-sidebar">
                <div class="list-group list-group-flush">
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
                <!-- Messages -->
                <div class="" style="background-color: #0d6efd; padding: 20px;">

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

                <!-- Input -->
                <div class="chat-input">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Type a message...">
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

    <?php include 'components/footer.php' ?>

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