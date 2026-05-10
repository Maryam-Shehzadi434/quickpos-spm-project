<?php
session_start();

// Get form data
$name = trim($_POST['name'] ?? '');
$email = trim($_POST['email'] ?? '');
$date = trim($_POST['date'] ?? '');
$guests = trim($_POST['guests'] ?? '');
$special_request = trim($_POST['special_request'] ?? '');

$errors = [];

// SCRUM-40: Validate name
if (empty($name)) {
    $errors['name'] = "Name is required";
}

// SCRUM-41 Added & 42: Validate email Added email format validation
if (empty($email)) 
    {
    $errors['email'] = "Email is required";
} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors['email'] = "Invalid email format";
}

// SCRUM-43: Validate date
if (empty($date)) {
    $errors['date'] = "Reservation date is required";
}

// SCRUM-44: Validate guests
if (empty($guests)) {
    $errors['guests'] = "Number of guests is required";
}

// SCRUM-45 & 46: If errors, redirect back with data
if (!empty($errors)) {
    $_SESSION['form_errors'] = $errors;
    $_SESSION['form_data'] = [
        'name' => $name,
        'email' => $email,
        'date' => $date,
        'guests' => $guests,
        'special_request' => $special_request
    ];
    header('Location: index.php#reservation');
    exit();
}

// SCRUM-47: Create thank-you.php page
// SCRUM-48: Redirect on success
// SCRUM-49: XSS protection via htmlspecialchars
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
            <p>We look forward to serving you on <strong><?php echo htmlspecialchars($date); ?></strong> for <strong><?php echo htmlspecialchars($guests); ?></strong> guest(s).</p>
        </div>
        <a href="index.php" class="back-home">← Back to Aster Café</a>
    </div>
</body>
</html>