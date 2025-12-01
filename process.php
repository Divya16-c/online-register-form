<?php
// Basic server-side handling

// Optional: simple function to safely get POST data
function get_post($key) {
    return isset($_POST[$key]) ? htmlspecialchars(trim($_POST[$key])) : '';
}

// If the script is accessed directly without POST, redirect back to form
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header("Location: index.html");
    exit();
}

$fullName = get_post('fullName');
$email    = get_post('email');
$phone    = get_post('phone');
$gender   = get_post('gender');
$dob      = get_post('dob');
$course   = get_post('course');
$address  = get_post('address');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Application Submitted</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <div class="result-container">
        <div class="result-header">
            <h2>Application Submitted Successfully ✔</h2>
            <p>Below is the information you provided:</p>
        </div>

        <div class="result-details">
            <div class="result-grid">
                <div class="result-label">Full Name</div>
                <div class="result-value"><?php echo $fullName; ?></div>

                <div class="result-label">Email</div>
                <div class="result-value"><?php echo $email; ?></div>

                <div class="result-label">Phone</div>
                <div class="result-value"><?php echo $phone; ?></div>

                <div class="result-label">Gender</div>
                <div class="result-value"><?php echo $gender; ?></div>

                <div class="result-label">Date of Birth</div>
                <div class="result-value"><?php echo $dob; ?></div>

                <div class="result-label">Course</div>
                <div class="result-value"><?php echo $course; ?></div>

                <div class="result-label">Address</div>
                <div class="result-value"><?php echo nl2br($address); ?></div>
            </div>
        </div>

        <a href="index.html" class="back-link">← Submit Another Application</a>
    </div>
</body>
</html>
