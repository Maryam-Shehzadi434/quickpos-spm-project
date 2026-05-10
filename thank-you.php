<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservation Confirmed | Aster Café - London</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700;800;900&family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background: #111111;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            overflow-x: hidden;
        }

        /* Cinematic Background with Slow Zoom */
        body::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: url('https://images.unsplash.com/photo-1501339847302-ac426a4a7cbb?w=1600');
            background-size: cover;
            background-position: center;
            opacity: 0.35;
            animation: slowZoom 25s ease-in-out infinite alternate;
            z-index: 0;
        }

        @keyframes slowZoom {
            0% { transform: scale(1); }
            100% { transform: scale(1.08); }
        }

        /* Dark Overlay */
        body::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, rgba(17, 17, 17, 0.85) 0%, rgba(17, 17, 17, 0.7) 100%);
            z-index: 0;
        }

        /* Main Container */
        .thankyou-container {
            position: relative;
            z-index: 2;
            text-align: center;
            padding: 60px 50px;
            background: rgba(26, 26, 26, 0.95);
            backdrop-filter: blur(12px);
            border-radius: 32px;
            border: 1px solid rgba(214, 185, 140, 0.3);
            max-width: 600px;
            margin: 20px;
            animation: containerReveal 0.8s cubic-bezier(0.2, 0.9, 0.4, 1.1) forwards;
            box-shadow: 0 25px 50px rgba(0, 0, 0, 0.5), 0 0 0 1px rgba(214, 185, 140, 0.1);
        }

        @keyframes containerReveal {
            from {
                opacity: 0;
                transform: translateY(40px) scale(0.96);
                filter: blur(8px);
            }
            to {
                opacity: 1;
                transform: translateY(0) scale(1);
                filter: blur(0);
            }
        }

        /* Animated Checkmark */
        .checkmark-wrapper {
            margin-bottom: 30px;
        }

        .checkmark-circle {
            width: 100px;
            height: 100px;
            background: linear-gradient(135deg, #D6B98C 0%, #c4a67a 100%);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto;
            animation: scaleIn 0.6s cubic-bezier(0.34, 1.2, 0.64, 1) 0.3s both, glowPulse 2s ease-in-out infinite 1s;
            box-shadow: 0 10px 30px rgba(214, 185, 140, 0.3);
        }

        @keyframes scaleIn {
            0% {
                transform: scale(0);
                opacity: 0;
            }
            50% {
                transform: scale(1.1);
            }
            100% {
                transform: scale(1);
                opacity: 1;
            }
        }

        @keyframes glowPulse {
            0%, 100% {
                box-shadow: 0 10px 30px rgba(214, 185, 140, 0.3);
            }
            50% {
                box-shadow: 0 15px 45px rgba(214, 185, 140, 0.6);
            }
        }

        .checkmark {
            font-size: 55px;
            color: #111111;
            font-weight: 700;
            transform: scale(0);
            animation: checkBounce 0.5s ease-out 0.5s forwards;
        }

        @keyframes checkBounce {
            0% {
                transform: scale(0);
            }
            80% {
                transform: scale(1.15);
            }
            100% {
                transform: scale(1);
            }
        }

        /* Welcome Text */
        .welcome-text {
            margin-bottom: 20px;
            animation: fadeInUp 0.6s ease-out 0.4s both;
        }

        .welcome-text h1 {
            font-family: 'Playfair Display', serif;
            font-size: 48px;
            color: #F5EBDD;
            margin-bottom: 10px;
            letter-spacing: 2px;
            background: linear-gradient(135deg, #F5EBDD 0%, #D6B98C 60%, #F5EBDD 100%);
            background-size: 200% auto;
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
            animation: shineText 3s linear infinite;
        }

        @keyframes shineText {
            0% { background-position: 0% center; }
            100% { background-position: 200% center; }
        }

        .welcome-text .guest-name {
            color: #D6B98C;
            font-size: 20px;
            font-weight: 500;
            letter-spacing: 1px;
        }

        /* Confirmation Message */
        .confirmation-message {
            margin-bottom: 30px;
            animation: fadeInUp 0.6s ease-out 0.6s both;
        }

        .confirmation-message p {
            color: #B8B8B8;
            font-size: 16px;
            line-height: 1.8;
        }

        .confirmation-message .highlight {
            color: #D6B98C;
            font-weight: 600;
        }

        /* Reservation Details Card */
        .details-card {
            background: rgba(17, 17, 17, 0.7);
            border-radius: 20px;
            padding: 25px;
            margin: 25px 0;
            border: 1px solid rgba(214, 185, 140, 0.2);
            animation: fadeInUp 0.6s ease-out 0.8s both;
            transition: all 0.3s ease;
        }

        .details-card:hover {
            border-color: rgba(214, 185, 140, 0.5);
            transform: translateY(-3px);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
        }

        .details-card h3 {
            font-family: 'Playfair Display', serif;
            color: #D6B98C;
            font-size: 18px;
            letter-spacing: 2px;
            margin-bottom: 15px;
            font-weight: 600;
        }

        .detail-item {
            display: flex;
            justify-content: center;
            gap: 30px;
            flex-wrap: wrap;
        }

        .detail {
            text-align: center;
        }

        .detail-label {
            display: block;
            font-size: 11px;
            text-transform: uppercase;
            letter-spacing: 2px;
            color: #666;
            margin-bottom: 5px;
        }

        .detail-value {
            display: block;
            font-size: 14px;
            color: #F5EBDD;
            font-weight: 500;
        }

        /* Café Quote */
        .cafe-quote {
            margin: 30px 0;
            padding: 20px;
            border-left: 3px solid #D6B98C;
            background: rgba(214, 185, 140, 0.05);
            animation: fadeInUp 0.6s ease-out 1s both;
        }

        .cafe-quote p {
            font-family: 'Playfair Display', serif;
            font-size: 20px;
            font-style: italic;
            color: #D6B98C;
            letter-spacing: 1px;
        }

        .cafe-quote small {
            display: block;
            margin-top: 10px;
            font-size: 12px;
            color: #666;
            letter-spacing: 1px;
        }

        /* Back Button */
        .back-home {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            background: #D6B98C;
            color: #111111;
            text-decoration: none;
            padding: 14px 35px;
            border-radius: 50px;
            font-weight: 600;
            transition: all 0.3s ease;
            margin-top: 20px;
            animation: fadeInUp 0.6s ease-out 1.2s both;
            border: none;
            cursor: pointer;
            font-size: 16px;
        }

        .back-home:hover {
            background: #c4a67a;
            transform: translateY(-3px);
            box-shadow: 0 10px 25px rgba(214, 185, 140, 0.3);
            gap: 15px;
        }

        .back-home:active {
            transform: translateY(0);
        }

        /* Social Share Section */
        .social-share {
            margin-top: 35px;
            padding-top: 25px;
            border-top: 1px solid rgba(214, 185, 140, 0.15);
            animation: fadeInUp 0.6s ease-out 1.4s both;
        }

        .social-share p {
            font-size: 12px;
            color: #666;
            margin-bottom: 12px;
            letter-spacing: 1px;
        }

        .social-icons {
            display: flex;
            justify-content: center;
            gap: 20px;
        }

        .social-icons a {
            color: #B8B8B8;
            text-decoration: none;
            font-size: 14px;
            transition: all 0.3s;
            padding: 8px 16px;
            border-radius: 30px;
            background: rgba(59, 42, 36, 0.3);
        }

        .social-icons a:hover {
            color: #D6B98C;
            background: rgba(59, 42, 36, 0.6);
            transform: translateY(-2px);
        }

        /* Particle Effects */
        .particle {
            position: absolute;
            width: 2px;
            height: 2px;
            background: #D6B98C;
            border-radius: 50%;
            opacity: 0;
            animation: floatParticle 6s linear infinite;
            z-index: 1;
        }

        @keyframes floatParticle {
            0% {
                opacity: 0;
                transform: translateY(100vh) translateX(0);
            }
            10% {
                opacity: 0.5;
            }
            90% {
                opacity: 0.5;
            }
            100% {
                opacity: 0;
                transform: translateY(-100vh) translateX(20px);
            }
        }

        /* Responsive */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @media (max-width: 550px) {
            .thankyou-container {
                padding: 40px 25px;
                margin: 15px;
            }

            .welcome-text h1 {
                font-size: 32px;
            }

            .checkmark-circle {
                width: 75px;
                height: 75px;
            }

            .checkmark {
                font-size: 40px;
            }

            .cafe-quote p {
                font-size: 16px;
            }

            .detail-item {
                flex-direction: column;
                gap: 12px;
            }
        }
    </style>
</head>
<body>
    <!-- Floating Particles -->
    <div class="particle" style="left: 10%; animation-delay: 0s;"></div>
    <div class="particle" style="left: 20%; animation-delay: 1s;"></div>
    <div class="particle" style="left: 35%; animation-delay: 2s;"></div>
    <div class="particle" style="left: 50%; animation-delay: 0.5s;"></div>
    <div class="particle" style="left: 65%; animation-delay: 1.5s;"></div>
    <div class="particle" style="left: 80%; animation-delay: 2.5s;"></div>
    <div class="particle" style="left: 90%; animation-delay: 3s;"></div>

    <div class="thankyou-container">
        <!-- Animated Checkmark -->
        <div class="checkmark-wrapper">
            <div class="checkmark-circle">
                <div class="checkmark">✓</div>
            </div>
        </div>

        <!-- Welcome Text -->
        <div class="welcome-text">
            <?php
            $name = isset($_GET['name']) ? htmlspecialchars($_GET['name']) : 'Guest';
            ?>
            <h1>Welcome, <?php echo $name; ?>!</h1>
            <p class="guest-name">Your journey begins here</p>
        </div>

        <!-- Confirmation Message -->
        <div class="confirmation-message">
            <p>Your reservation has been <span class="highlight">confirmed</span> ✨</p>
            <p>A confirmation email has been sent to your inbox with all the details.</p>
        </div>

        <!-- Reservation Details Card -->
        <div class="details-card">
            <h3>Reservation Details</h3>
            <div class="detail-item">
                <div class="detail">
                    <span class="detail-label">Date</span>
                    <span class="detail-value"><?php echo date('F j, Y'); ?></span>
                </div>
                <div class="detail">
                    <span class="detail-label">Time</span>
                    <span class="detail-value">Arrival anytime</span>
                </div>
                <div class="detail">
                    <span class="detail-label">Table</span>
                    <span class="detail-value">Quiet corner reserved</span>
                </div>
            </div>
        </div>

        <!-- Café Quote -->
        <div class="cafe-quote">
            <p>"Where silence tastes like coffee."</p>
            <small>— Aster Café, London</small>
        </div>

        <!-- Back Button -->
        <a href="index.php" class="back-home">
            <span>←</span> Return to Aster Café
        </a>

        <!-- Social Share -->
        <div class="social-share">
            <p>Share your experience</p>
            <div class="social-icons">
                <a href="#">Instagram</a>
                <a href="#">Twitter</a>
                <a href="#">Facebook</a>
            </div>
        </div>
    </div>
</body>
</html>