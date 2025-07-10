<?php
$barangay = basename(__DIR__);
$barangay_name = $_SESSION["barangay_name_$barangay"] ?? 'Barangay';
$resident_name = $_SESSION["resident_name_$barangay"] ?? 'Resident';
$is_approved = $_SESSION["is_approved_$barangay"] ?? 0;
?>

<aside id="leftsidebar" class="sidebar">
    <div class="menu">
        <ul class="list">
            <li class="header" style="font-size: 12px">
                WELCOME TO BARANGAY <?= htmlspecialchars(strtoupper($barangay_name)) ?><br>
                <span style="color: #1a49cb;"><?= htmlspecialchars($resident_name) ?></span><br>
                <span style="color: #1a49cb;">RESIDENT</span>
            </li>

            <li class="active">
                <a href="index.php">
                    <i class="material-icons">home</i>
                    <span>Home</span>
                </a>
            </li>



            <?php if ($is_approved): ?>
                <li>
                    <a href="family_profiling.php">
                        <i class="material-icons">groups</i>
                        <span>Family Profiling</span>
                    </a>
                </li>

                <li>
                    <a href="javascript:void(0);" class="menu-toggle">
                        <i class="material-icons">library_books</i>
                        <span>Certificate Issuance</span>
                    </a>
                    <ul class="ml-menu">
                        <li><a href="certificate_issuance.php">Certificate</a></li>
                        <li><a href="certificate_operate.php">Operate</a></li>
                        <li><a href="certificate_closure.php">Closure</a></li>
                        <li><a href="certificate_cedula.php">Cedula</a></li>
                    </ul>
                </li>

                <li>
                    <a href="live_chat.php">
                        <i class="material-icons">chat</i>
                        <span>Live Chat</span>
                    </a>
                </li>

                <li>
                    <a href="feedback.php">
                        <i class="material-icons">thumb_up</i>
                        <span>Feedback</span>
                    </a>
                </li>

                <li>
                    <a href="about_us.php">
                        <i class="material-icons">menu_book</i>
                        <span>About Us</span>
                    </a>
                </li>
            <?php endif; ?>
        </ul>
    </div>
</aside>