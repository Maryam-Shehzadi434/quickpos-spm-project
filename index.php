<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aster Café | Midnight Coffee & Silent Stories</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700;800&family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- Header Section - SCRUM-17 -->
    <header id="header">
        <div class="container">
            <div class="logo">
                <span class="logo-icon">☕</span>
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
            <!-- SCRUM-22: Hero Section -->
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

            <!-- SCRUM-27: About Section -->
    <section id="about" class="about">
        <div class="container">
            <div class="about-grid">
                <div class="about-image">
                    <img src="https://images.unsplash.com/photo-1501339847302-ac426a4a7cbb?w=800" alt="Cozy Café Interior">
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
                </div>
            </div>
        </div>

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

                        <!-- SCRUM-30: Experience Section -->
    <section id="experience" class="experience">
        <div class="container">
            <div class="section-header">
                <span class="section-tag">The Experience</span>
                <h2>More Than Just Coffee</h2>
                <p>Step into a world where every detail is crafted for your comfort</p>
            </div>
            <div class="features-grid">
                <div class="feature-card">
                    <div class="feature-icon">☕</div>
                    <h3>Quiet Atmosphere</h3>
                    <p>Soft jazz, warm lights, peaceful evenings away from the city rush.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">🍵</div>
                    <h3>Artisan Coffee</h3>
                    <p>Freshly roasted blends crafted with precision by master baristas.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">📚</div>
                    <h3>Reading Corners</h3>
                    <p>Private spaces for books, work, and quiet reflection.</p>
                </div>
            </div>
        </div>
            <!-- SCRUM-32 & 33: Signature Menu Section -->
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
                        <img src="https://images.unsplash.com/photo-1461023058943-07fcbe16d735?w=400" alt="Midnight Mocha">
                    </div>
                    <div class="menu-item-info">
                        <h4>Midnight Mocha</h4>
                        <p>Dark chocolate, espresso, steamed milk</p>
                        <span class="price">£8</span>
                    </div>
                </div>
                <div class="menu-item">
                    <div class="menu-item-image">
                        <img src="https://images.unsplash.com/photo-1485808191679-5f86510681a2?w=400" alt="Vanilla Latte">
                    </div>
                    <div class="menu-item-info">
                        <h4>Vanilla Latte</h4>
                        <p>Madagascar vanilla, smooth espresso</p>
                        <span class="price">£7</span>
                    </div>
                </div>
                <div class="menu-item">
                    <div class="menu-item-image">
                        <img src="https://images.unsplash.com/photo-1461023058943-07fcbe16d735?w=400" alt="Caramel Espresso">
                    </div>
                    <div class="menu-item-info">
                        <h4>Caramel Espresso</h4>
                        <p>House-made caramel, double shot</p>
                        <span class="price">£6</span>
                    </div>
                </div>
                <div class="menu-item">
                    <div class="menu-item-image">
                        <img src="https://images.unsplash.com/photo-1587925358603-c2eea5305bbc?w=400" alt="Cinnamon Cheesecake">
                    </div>
                    <div class="menu-item-info">
                        <h4>Cinnamon Cheesecake</h4>
                        <p>New York style with cinnamon dust</p>
                        <span class="price">£10</span>
                    </div>
                </div>
            </div>
        </div>

            <!-- SCRUM-35 & 36: Gallery Section -->
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
                <img src="https://images.unsplash.com/photo-1501339847302-ac426a4a7cbb?w=800" alt="Main Hall">
                <div class="image-overlay">
                    <span>Main Hall</span>
                    <small>Cozy Ambiance</small>
                </div>
            </div>
            <div class="gallery-item">
                <img src="https://images.unsplash.com/photo-1442512595331-e89e73853f31?w=400" alt="Coffee Bar">
                <div class="image-overlay">
                    <span>Coffee Bar</span>
                    <small>Artisan Craft</small>
                </div>
            </div>
            <div class="gallery-item">
                <img src="https://images.unsplash.com/photo-1414235077428-338989a2e8c0?w=400" alt="Jazz Night">
                <div class="image-overlay">
                    <span>Jazz Night</span>
                    <small>Live Music</small>
                </div>
            </div>
            <div class="gallery-item gallery-tall">
                <img src="https://images.unsplash.com/photo-1495474472287-4d71bcdd2085?w=400" alt="Art Corner">
                <div class="image-overlay">
                    <span>Art Corner</span>
                    <small>Local Artists</small>
                </div>
            </div>
            <div class="gallery-item">
                <img src="https://images.unsplash.com/photo-1511920170033-f8396924c348?w=400" alt="Window View">
                <div class="image-overlay">
                    <span>Rainy Window</span>
                    <small>London Evenings</small>
                </div>
            </div>
            <div class="gallery-item">
                <img src="https://images.unsplash.com/photo-1486499043531-fec0b3767eef?w=400" alt="Quiet Moments">
                <div class="image-overlay">
                    <span>Quiet Moments</span>
                    <small>Peaceful Sips</small>
                </div>
            </div>
        </div>

            <!-- SCRUM-50 & 51: Testimonials Section -->
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
    </section>
    </section>
    </section>
    </section>
    </section>
    </header>

    <!-- Rest of the content will be added in other tasks -->
    <!-- [SCRUM-18] Add navigation links to header Requirment Satisfied -->
    <!-- [SCRUM-19] Add Reserve Table button to header Requirment Satisfied -->
    <!-- [SCRUM-33] Add menu items with images and prices Requirment Satisfied -->
    <!-- [SCRUM-34] Add hover effects to menu items Requirment Satisfied -->
    <!-- [SCRUM-35] Add gallery grid layout Requirment Satisfied -->
    <!-- [SCRUM-36] Add enhanced gallery hover effects Requirment Satisfied -->
    <!-- [SCRUM-50] Add testimonials section Requirment Satisfied -->

</body>
</html>