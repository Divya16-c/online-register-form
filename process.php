<?php
// Cleaning function
function clean($value) {
    return htmlspecialchars(trim($value), ENT_QUOTES, 'UTF-8');
}

$fullName   = clean($_POST['fullName'] ?? '');
$email      = clean($_POST['email'] ?? '');
$phone      = clean($_POST['phone'] ?? '');
$course     = clean($_POST['course'] ?? '');
$department = clean($_POST['department'] ?? '');
$semester   = clean($_POST['semester'] ?? '');
$address    = clean($_POST['address'] ?? '');
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Registration Details</title>

<style>
/* Same Pink Theme */

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: "Poppins", sans-serif;
}

body {
    min-height: 100vh;
    background: radial-gradient(circle at top left, #ffd2e8, #ff7ab8);
    display: flex;
    justify-content: center;
    align-items: center;
}

.wrapper {
    width: 100%;
    padding: 20px;
}

.card {
    max-width: 650px;
    margin: auto;
    background: #ffffff;
    padding: 32px;
    border-radius: 20px;
    box-shadow: 0 18px 45px rgba(0, 0, 0, 0.18);
}

.header {
    text-align: center;
    margin-bottom: 20px;
}

.header h1 {
    color: #b3005e;
    font-size: 24px;
    margin-bottom: 6px;
}

.header p {
    color: #a84a74;
}

.details p {
    font-size: 15px;
    margin-bottom: 10px;
    color: #333;
}

.details p strong {
    color: #b3005e;
}

/* Button */
.btn {
    display: inline-block;
    margin-top: 20px;
    padding: 12px 22px;
    background: linear-gradient(135deg, #ff4da6, #cc0066);
    color: white;
    border-radius: 8px;
    text-decoration: none;
    font-weight: 600;
    box-shadow: 0 8px 16px rgba(255, 77, 166, 0.35);
    transition: 0.2s;
}

.btn:hover {
    transform: translateY(-2px);
    box-shadow: 0 12px 22px rgba(255, 77, 166, 0.45);
}
</style>

</head>

<body>
<div class="wrapper">
    <div class="card">

        <div class="header">
            <h1>Registration Successful 🎉</h1>
            <p>Your details are shown below</p>
        </div>

        <div class="details">
            <p><strong>Full Name:</strong> <?php echo $fullName; ?></p>
            <p><strong>Email:</strong> <?php echo $email; ?></p>
            <p><strong>Phone Number:</strong> <?php echo $phone; ?></p>
            <p><strong>Course:</strong> <?php echo $course; ?></p>
            <p><strong>Department:</strong> <?php echo $department; ?></p>
            <p><strong>Semester:</strong> <?php echo $semester; ?></p>
            <p><strong>Address:</strong><br><?php echo nl2br($address); ?></p>
        </div>

        <a href="index.html" class="btn">Back to Form</a>

    </div>
</div>
</body>
</html>
