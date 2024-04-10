<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Feedback</title>
    <link rel="stylesheet" href="../css/global.css">
    <link rel="stylesheet" href="../css/admin_css/notification_admin.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;600;700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
</head>

<body>
    <div class="admin-feedback-page">
        <div class="sidebar">
            <div class="sidebar-header">
                <div class="feedback-icon"><i class="fas fa-calendar-alt"></i></div>
                <div class="logo">Ashesifit</div>
            </div>
            <div class="sidebar-menu">
            <div class="menu-item"><a href="../admin/profile_admin.php"><i class="fas fa-user"></i> Profile</a></div>
                <div class="menu-item"><a href="../admin/dashboard_admin.php"><i class="fas fa-tachometer-alt"></i> Dashboard</a></div>
                <div class="menu-item"><a href="../admin/booking_admin.php"><i class="fas fa-calendar-alt"></i> Bookings</a></div>
                <div class="menu-item"><a href="../admin/notification_admin.php"><i class="fas fa-bell"></i> Notification</a></div>
                <div class="menu-item"><a href="../admin/feedback_admin.php"><i class="fas fa-comment"></i> Feedback</a></div>
                <div class="menu-item"><a href="../admin/instructors_admin.php"><i class="fas fa-chalkboard-teacher"></i> Instructors</a></div>
                <div class="menu-item"><a href="../admin/equipment_admin.php"><i class="fas fa-dumbbell"></i> Equipment</a></div>
                <div class="menu-item active"><a href="../admin/reports_admin.php"><i class="fas fa-chart-bar"></i> Generate Reports</a></div>
                <div class="menu-item active"><a href="../admin/schedule_instructor.php"> <i class="far fa-clock"></i> View Schedule</a></div>
                <div class="menu-item"><a href="../admin/manageUsers_admin.php"><i class="fas fa-users"></i> Manage Users</a></div>
            </div>
            <a href="../login/login.php" class="logout-link">
                <button class="logout-btn"><i class="fas fa-sign-out-alt"></i> Logout</button>
            </a>
        </div>
       </div>
    <!-- Button to send notification -->
    <button id="send-notification-btn"><i class="fas fa-bell"></i> Send Notification</button>

    <!-- Notification content -->
    <div class="notification-content">
        <h1>Notification</h1>
        <!-- Message box -->
        <div class="message-box">
            <!-- Sample message item -->
            <div class="message-item">
                <div class="message-content">
                    <h3>Sample Message</h3>
                    <p>This is a sample message content.</p>
                </div>
                <button class="reply-button">Reply</button>
            </div>
        </div>

      <!-- Send Notification Form -->
            <div class="send-notification-form-container">
  
                <div class="send-notification-popup" id="send-notification-popup">
                    <div class="send-notification-form">
                        <h2>Send Notification</h2>
                        <form id="send-notification-form"  action = "../action/sendMessage.php">
                            <label for="recipient">Recipient:</label>
                            <input type="text" id="reply-name" placeholder="Name" required>
                            <label for="message">Message:</label>
                            <textarea name="message" id="message" cols="30" rows="5"></textarea>
                            <button type="submit">Send</button>
                            <button type="button" id="close-send-notification-popup">Close</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Reply form container -->
    <div class="reply-form-container" id="reply-popup">
        <div class="reply-form">
            <h2>Reply</h2>
            <form id="reply-form">
                <input type="text" id="reply-name" placeholder="Name" required>
                <textarea id="reply-message" placeholder="Message" required></textarea>
                <button type="submit">Send</button>
                <button type="button" id="close-popup">Close</button>
            </form>
        </div>
    </div>
        <!-- Reply form container -->
        <div class="reply-form-container">
            <h2>Reply</h2>
            <form id="reply-form">
                <input type="text" id="reply-name" placeholder="Name" required>
                <textarea id="reply-message" placeholder="Message" required></textarea>
                <button type="submit">Send</button>
                <button type="button" id="close-popup">Close</button>
            </form>
        </div>
    </div>
  
  

    <script src="../js/admin_js/notification_admin.js"></script>

    <script src="../js/admin_js/notification_admin.js"></script>

</html>