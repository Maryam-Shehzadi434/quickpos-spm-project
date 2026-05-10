<?php
session_start();

// SCRUM-39: Skeleton validation (TDD - will fail initially)
// Get form data
$name = trim($_POST['name'] ?? '');
$email = trim($_POST['email'] ?? '');
$date = trim($_POST['date'] ?? '');
$guests = trim($_POST['guests'] ?? '');
$special_request = trim($_POST['special_request'] ?? '');

$errors = [];

// SKELETON: No validation yet - tests will fail
// Full validation will be added in SCRUM-40 to SCRUM-45

// If validation fails, redirect back to form with errors
if (!empty($errors)) {
    $_SESSION['form_errors'] = $errors;
    $_SESSION['form_data'] = ['name' => $name, 'email' => $email, 'date' => $date, 'guests' => $guests, 'special_request' => $special_request];
    header('Location: index.php#reservation');
    exit();
}

// If validation passes, show thank you page
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservation Confirmed | Aster Café</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700;800;900&family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body class="thankyou-page">
    <div class="thankyou-container">
        <div class="checkmark-wrapper">
            <div class="checkmark-circle">
                <div class="checkmark">✓</div>
            </div>
        </div>
        <div class="welcome-text">
            <h1>Welcome, <?php echo htmlspecialchars($name); ?>!</h1>
            <p class="guest-name">Your reservation is confirmed</p>
        </div>
        <div class="confirmation-message">
            <p>A confirmation email has been sent to <strong><?php echo htmlspecialchars($email); ?></strong></p>
        </div>
        <a href="index.php" class="back-home">← Back to Aster Café</a>
    </div>
</body>
</html>