<?php
// Reservation form handling
$name_error = $email_error = $date_error = $guests_error = "";
$name = $email = $date = $guests = $special_request = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $is_valid = true;
    
    // Validate Name
    if (empty($_POST["name"])) {
        $name_error = "Name is required";
        $is_valid = false;
    } else {
        $name = htmlspecialchars($_POST["name"]);
    }
    
    // Validate Email
    if (empty($_POST["email"])) {
        $email_error = "Email is required";
        $is_valid = false;
    } elseif (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
        $email_error = "Invalid email format";
        $is_valid = false;
    } else {
        $email = htmlspecialchars($_POST["email"]);
    }
    
    // Validate Date
    if (empty($_POST["date"])) {
        $date_error = "Reservation date is required";
        $is_valid = false;
    } else {
        $date = htmlspecialchars($_POST["date"]);
    }
    
    // Validate Guests
    if (empty($_POST["guests"])) {
        $guests_error = "Number of guests is required";
        $is_valid = false;
    } else {
        $guests = htmlspecialchars($_POST["guests"]);
    }
    
    $special_request = htmlspecialchars($_POST["special_request"] ?? "");
    
    if ($is_valid) {
        header("Location: thank-you.php?name=" . urlencode($name));
        exit();
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aster Café | Midnight Coffee & Silent Stories - London</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700;800&family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- Header -->
    <header id="header">
        <div class="container">
            <div class="logo">
                <span class="logo-icon"></span>
                <span class="logo-text">Aster Café</span>
            </div>
            <nav>
                <ul>
                    <li><a href="#home">Home</a></li>
                    <li><a href="#menu">Menu</a></li>
                    <li><a href="#experience">Experience</a></li>
                    <li><a href="#reservation">Reservation</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </nav>
            <button class="btn-reserve-header">Reserve Table</button>
            <div class="mobile-menu-btn">☰</div>
        </div>
    </header>

    <!-- Hero Section -->
    <section id="home" class="hero">
        <div class="hero-overlay"></div>
        <div class="hero-content">
            <span class="hero-subtitle">London's Hidden Midnight Café</span>
            <h1 class="hero-title">ASTER CAFÉ</h1>
            <p class="hero-tagline">"Where silence tastes like coffee."</p>
            <p class="hero-description">A hidden midnight café in London designed for dreamers, readers, and quiet souls.</p>
            <div class="hero-buttons">
                <button class="btn-primary">Reserve a Table</button>
                <button class="btn-secondary">Explore Menu</button>
            </div>
        </div>
        <div class="scroll-indicator">
            <span>Scroll</span>
            <div class="scroll-line"></div>
        </div>
    </section>
    <!-- About Section -->
    <section id="about" class="about">
        <div class="container">
            <div class="about-grid">
                <div class="about-image">
                    <img src="relaximage1.jpg" alt="Cozy Café Interior">
                    <div class="image-frame"></div>
                    <div class="image-caption">
                        <span>Sanctuary in the City</span>
                        <small>Where every corner tells a story</small>
                    </div>
                </div>
                <div class="about-content">
                    <span class="section-tag">Our Story</span>
                    <h2>An Escape From the Noise</h2>
                    <p>Aster Café was created as a sanctuary for meaningful conversations, slow evenings, and handcrafted coffee experiences in the heart of London.</p>
                    <p>Tucked away on Kensington Lane, our doors open to those seeking refuge from the chaotic city pace. Here, every cup tells a story, every corner holds a secret, and every evening unfolds like poetry.</p>
                    <div class="about-features">
                        <div class="about-feature">
                            <span>🌙</span>
                            <span>Open till 2 AM</span>
                        </div>
                        <div class="about-feature">
                            <span>📖</span>
                            <span>Reading Library</span>
                        </div>
                        <div class="about-feature">
                            <span>🎷</span>
                            <span>Live Jazz</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Experience / Features Section -->
    <section id="experience" class="experience">
        <div class="container">
            <div class="section-header">
                <span class="section-tag">The Experience</span>
                <h2>More Than Just Coffee</h2>
                <p>Step into a world where every detail is crafted for your comfort</p>
            </div>
            <div class="features-grid">
                <div class="feature-card">
                    <div class="feature-icon"></div>
                    <h3>Quiet Atmosphere</h3>
                    <p>Soft jazz, warm lights, peaceful evenings away from the city rush.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon"></div>
                    <h3>Artisan Coffee</h3>
                    <p>Freshly roasted blends crafted with precision by master baristas.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon"></div>
                    <h3>Reading Corners</h3>
                    <p>Private spaces for books, work, and quiet reflection.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Signature Menu Section -->
    <section id="menu" class="menu">
        <div class="container">
            <div class="section-header">
                <span class="section-tag">Signature Menu</span>
                <h2>Handcrafted for You</h2>
                <p>Our most beloved creations</p>
            </div>
            <div class="menu-grid">
                <div class="menu-item">
                    <div class="menu-item-image">
                        <img src="MidnightMocha.png" alt="Midnight Mocha">
                    </div>
                    <div class="menu-item-info">
                        <h4>Midnight Mocha</h4>
                        <p>Dark chocolate, espresso, steamed milk</p>
                        <span class="price">£8</span>
                    </div>
                </div>
                <div class="menu-item">
                    <div class="menu-item-image">
                        <img src="VanillaLatte.png" alt="Vanilla Latte">
                    </div>
                    <div class="menu-item-info">
                        <h4>Vanilla Latte</h4>
                        <p>Madagascar vanilla, smooth espresso</p>
                        <span class="price">£7</span>
                    </div>
                </div>
                <div class="menu-item">
                    <div class="menu-item-image">
                        <img src="CaramelEspresso.png" alt="Caramel Espresso">
                    </div>
                    <div class="menu-item-info">
                        <h4>Caramel Espresso</h4>
                        <p>House-made caramel, double shot</p>
                        <span class="price">£6</span>
                    </div>
                </div>
                <div class="menu-item">
                    <div class="menu-item-image">
                        <img src="CinnamonCheesecake.png" alt="Cinnamon Cheesecake">
                    </div>
                    <div class="menu-item-info">
                        <h4>Cinnamon Cheesecake</h4>
                        <p>New York style with cinnamon dust</p>
                        <span class="price">£10</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

        <!-- Gallery Section -->
    <section id="gallery" class="gallery">
        <div class="container">
            <div class="section-header">
                <span class="section-tag">Moments</span>
                <h2>Visual Poetry</h2>
                <p>Glimpses into our world</p>
            </div>
        </div>
        <div class="gallery-grid">
            <div class="gallery-item gallery-large">
                <img src="relaximage1.jpg" alt="Main Hall">
                <div class="image-overlay">
                    <span>Main Hall</span>
                    <small>Cozy Ambiance</small>
                </div>
            </div>
            <div class="gallery-item">
                <img src="Coffee Bar.jpg" alt="Coffee Bar">
                <div class="image-overlay">
                    <span>Coffee Bar</span>
                    <small>Artisan Craft</small>
                </div>
            </div>
            <div class="gallery-item">
                <img src="Jazz Night.jpg" alt="Jazz Night">
                <div class="image-overlay">
                    <span>Jazz Night</span>
                    <small>Live Music</small>
                </div>
            </div>
            <div class="gallery-item gallery-tall">
                <img src="gallery.png" alt="Gallery">
                <div class="image-overlay">
                    <span>Art Corner</span>
                    <small>Local Artists</small>
                </div>
            </div>
            <div class="gallery-item">
                <img src="Window View.jpg" alt="Window View">
                <div class="image-overlay">
                    <span>Rainy Window</span>
                    <small>London Evenings</small>
                </div>
            </div>
            <div class="gallery-item">
                <img src="woman-drinking.jpg" alt="Woman Drinking Coffee">
                <div class="image-overlay">
                    <span>Quiet Moments</span>
                    <small>Peaceful Sips</small>
                </div>
            </div>
            <div class="gallery-item">
                <img src="writers-scene-concept.jpg" alt="Writer's Scene">
                <div class="image-overlay">
                    <span>Writer's Corner</span>
                    <small>Ink & Ideas</small>
                </div>
            </div>
            
        </div>
    </section>
    <!-- Reservation Form Section -->
    <section id="reservation" class="reservation">
        <div class="container">
            <div class="reservation-card">
                <div class="reservation-content">
                    <span class="section-tag">Reserve Your Evening</span>
                    <h2>Claim Your Corner</h2>
                    <p>Limited tables available for the perfect quiet evening</p>
                    
                    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>#reservation" class="reservation-form">
                        <div class="form-group">
                            <label for="name">Full Name</label>
                            <input type="text" id="name" name="name" value="<?php echo $name; ?>" placeholder="James Morrison">
                            <span class="error"><?php echo $name_error; ?></span>
                        </div>
                        
                        <div class="form-group">
                            <label for="email">Email Address</label>
                            <input type="email" id="email" name="email" value="<?php echo $email; ?>" placeholder="hello@example.com">
                            <span class="error"><?php echo $email_error; ?></span>
                        </div>
                        
                        <div class="form-row">
                            <div class="form-group">
                                <label for="date">Reservation Date</label>
                                <input type="date" id="date" name="date" value="<?php echo $date; ?>">
                                <span class="error"><?php echo $date_error; ?></span>
                            </div>
                            
                            <div class="form-group">
                                <label for="guests">Number of Guests</label>
                                <select id="guests" name="guests">
                                    <option value="">Select</option>
                                    <option value="1" <?php echo ($guests == "1") ? "selected" : ""; ?>>1 Guest</option>
                                    <option value="2" <?php echo ($guests == "2") ? "selected" : ""; ?>>2 Guests</option>
                                    <option value="3" <?php echo ($guests == "3") ? "selected" : ""; ?>>3 Guests</option>
                                    <option value="4" <?php echo ($guests == "4") ? "selected" : ""; ?>>4 Guests</option>
                                    <option value="5" <?php echo ($guests == "5") ? "selected" : ""; ?>>5 Guests</option>
                                    <option value="6" <?php echo ($guests == "6") ? "selected" : ""; ?>>6+ Guests</option>
                                </select>
                                <span class="error"><?php echo $guests_error; ?></span>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="special_request">Special Request (Optional)</label>
                            <textarea id="special_request" name="special_request" rows="3" placeholder="Any allergies, preferences, or special occasions?"><?php echo $special_request; ?></textarea>
                        </div>
                        
                        <button type="submit" class="btn-submit">Reserve Table →</button>
                    </form>
                </div>
                <div class="reservation-image">
                    <img src="AsterCafe.jpg" alt="Cozy Corner at Aster Café">
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="testimonials">
        <div class="container">
            <div class="section-header">
                <span class="section-tag">Loved By Many</span>
                <h2>What Our Guests Say</h2>
            </div>
            <div class="testimonials-grid">
                <div class="testimonial-card">
                    <p>"The most peaceful café experience in London. The quiet atmosphere and warm lighting make it perfect for reading."</p>
                    <div class="testimonial-author">
                        <strong>Emma Clarke</strong>
                        <span>Regular Guest</span>
                    </div>
                </div>
                <div class="testimonial-card">
                    <p>"Finally found a place where I can work without distractions. Their midnight mocha is absolutely divine!"</p>
                    <div class="testimonial-author">
                        <strong>David Chen</strong>
                        <span>Freelance Writer</span>
                    </div>
                </div>
                <div class="testimonial-card">
                    <p>"The jazz nights here are magical. Feels like stepping into a different era. Highly recommended."</p>
                    <div class="testimonial-author">
                        <strong>Sophia Williams</strong>
                        <span>Jazz Enthusiast</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer id="contact">
        <div class="container">
            <div class="footer-grid">
                <div class="footer-section">
                    <div class="footer-logo">
                        <span>☕</span>
                        <span>ASTER CAFÉ</span>
                    </div>
                    <p>Coffee. Silence. Stories.</p>
                </div>
                
                <div class="footer-section">
                    <h4>Visit Us</h4>
                    <p>18 Kensington Lane,<br>London, UK</p>
                    <p class="footer-contact">hello@astercafe.co.uk<br>+44 20 7946 2180</p>
                </div>
                
                <div class="footer-section">
                    <h4>Hours</h4>
                    <p>Monday - Friday: 4 PM - 2 AM<br>Saturday - Sunday: 12 PM - 2 AM</p>
                </div>
                
                <div class="footer-section">
                    <h4>Follow Us</h4>
                    <div class="social-links">
                        <a href="#">Instagram</a>
                        <a href="#">Twitter</a>
                        <a href="#">Facebook</a>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <p>Designed & Developed by Maryam & Radia</p>
                <p>© 2026 Aster Café. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <script src="script.js"></script>
</body>
</html>

    <!-- Changes made in file -->
