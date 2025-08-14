<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Waste Wise - Smart Waste Management Solutions</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary: #2e7d32;
            --primary-dark: #1b5e20;
            --primary-light: #81c784;
            --secondary: #ff8f00;
            --dark: #263238;
            --light: #f5f5f5;
            --gray: #757575;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', sans-serif;
            color: var(--dark);
            line-height: 1.6;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        /* Header */
        header {
            background-color: white;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            position: fixed;
            width: 100%;
            z-index: 100;
        }

        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px 0;
        }

        .logo {
            font-size: 24px;
            font-weight: 700;
            color: var(--primary);
            text-decoration: none;
        }

        .logo span {
            color: var(--secondary);
        }

        .nav-links {
            display: flex;
            gap: 30px;
        }

        .nav-links a {
            text-decoration: none;
            color: var(--dark);
            font-weight: 500;
            transition: color 0.3s;
        }

        .nav-links a:hover {
            color: var(--primary);
        }

        .cta-button {
            background-color: var(--primary);
            color: white;
            padding: 10px 20px;
            border-radius: 5px;
            text-decoration: none;
            font-weight: 600;
            transition: background-color 0.3s;
        }

        .cta-button:hover {
            background-color: var(--primary-dark);
        }

        /* Hero Section */
        .hero {
            padding: 180px 0 100px;
            background-color: var(--light);
            text-align: center;
        }

        .hero h1 {
            font-size: 48px;
            font-weight: 700;
            margin-bottom: 20px;
            color: var(--primary-dark);
        }

        .hero p {
            font-size: 20px;
            color: var(--gray);
            max-width: 700px;
            margin: 0 auto 40px;
        }

        .hero-buttons {
            display: flex;
            gap: 20px;
            justify-content: center;
        }

        .secondary-button {
            background-color: white;
            color: var(--primary);
            padding: 12px 24px;
            border-radius: 5px;
            text-decoration: none;
            font-weight: 600;
            border: 2px solid var(--primary);
            transition: all 0.3s;
        }

        .secondary-button:hover {
            background-color: var(--primary-light);
            color: white;
        }

        /* Features Section */
        .features {
            padding: 80px 0;
        }

        .section-title {
            text-align: center;
            margin-bottom: 60px;
        }

        .section-title h2 {
            font-size: 36px;
            color: var(--primary-dark);
            margin-bottom: 15px;
        }

        .section-title p {
            color: var(--gray);
            max-width: 600px;
            margin: 0 auto;
        }

        .features-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
        }

        .feature-card {
            background-color: white;
            border-radius: 10px;
            padding: 30px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
            transition: transform 0.3s;
        }

        .feature-card:hover {
            transform: translateY(-10px);
        }

        .feature-icon {
            background-color: var(--primary-light);
            width: 60px;
            height: 60px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 20px;
        }

        .feature-icon i {
            font-size: 24px;
            color: var(--primary-dark);
        }

        .feature-card h3 {
            font-size: 22px;
            margin-bottom: 15px;
            color: var(--primary-dark);
        }

        /* Stats Section */
        .stats {
            background-color: var(--primary);
            color: white;
            padding: 80px 0;
        }

        .stats-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 30px;
            text-align: center;
        }

        .stat-item h3 {
            font-size: 48px;
            font-weight: 700;
            margin-bottom: 10px;
        }

        .stat-item p {
            font-size: 18px;
            opacity: 0.9;
        }

        /* Testimonials */
        .testimonials {
            padding: 80px 0;
            background-color: var(--light);
        }

        .testimonial-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
        }

        .testimonial-card {
            background-color: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
        }

        .testimonial-text {
            font-style: italic;
            margin-bottom: 20px;
            color: var(--gray);
        }

        .testimonial-author {
            display: flex;
            align-items: center;
        }

        .author-avatar {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background-color: var(--primary-light);
            margin-right: 15px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--primary-dark);
            font-weight: bold;
        }

        .author-info h4 {
            font-size: 18px;
            margin-bottom: 5px;
        }

        .author-info p {
            color: var(--gray);
            font-size: 14px;
        }

        /* CTA Section */
        .cta {
            padding: 100px 0;
            text-align: center;
            background-color: var(--primary-dark);
            color: white;
        }

        .cta h2 {
            font-size: 36px;
            margin-bottom: 20px;
        }

        .cta p {
            max-width: 600px;
            margin: 0 auto 40px;
            opacity: 0.9;
        }

        /* Footer */
        footer {
            background-color: var(--dark);
            color: white;
            padding: 60px 0 20px;
        }

        .footer-content {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 40px;
            margin-bottom: 40px;
        }

        .footer-column h3 {
            font-size: 18px;
            margin-bottom: 20px;
            color: var(--primary-light);
        }

        .footer-column ul {
            list-style: none;
        }

        .footer-column ul li {
            margin-bottom: 10px;
        }

        .footer-column ul li a {
            color: #b0bec5;
            text-decoration: none;
            transition: color 0.3s;
        }

        .footer-column ul li a:hover {
            color: white;
        }

        .social-links {
            display: flex;
            gap: 15px;
        }

        .social-links a {
            color: white;
            font-size: 20px;
        }

        .copyright {
            text-align: center;
            padding-top: 20px;
            border-top: 1px solid #37474f;
            color: #b0bec5;
            font-size: 14px;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .hero h1 {
                font-size: 36px;
            }

            .hero p {
                font-size: 18px;
            }

            .hero-buttons {
                flex-direction: column;
                align-items: center;
            }

            .nav-links {
                display: none;
            }
        }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <!-- Header -->
    <header>
        <div class="container">
            <nav>
                <a href="#" class="logo">Waste<span>Wise</span></a>
                <div class="nav-links">
                    <a href="#features">Features</a>
                    <a href="#solutions">Solutions</a>
                    <a href="#about">About</a>
                    <a href="#contact">Contact</a>
                    <a href="#" class="cta-button">Get Started</a>
                </div>
            </nav>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="hero">
        <div class="container">
            <h1>Smart Waste Management for a Cleaner Future</h1>
            <p>Waste Wise helps businesses and communities reduce waste, increase recycling, and optimize waste collection through innovative technology solutions.</p>
            <div class="hero-buttons">
                <a href="#" class="cta-button">Request Demo</a>
                <a href="#" class="secondary-button">Learn More</a>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="features" id="features">
        <div class="container">
            <div class="section-title">
                <h2>Our Smart Solutions</h2>
                <p>Discover how Waste Wise can transform your waste management processes with cutting-edge technology</p>
            </div>
            <div class="features-grid">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-trash-alt"></i>
                    </div>
                    <h3>Smart Bins</h3>
                    <p>IoT-enabled waste bins that monitor fill levels in real-time and optimize collection routes to reduce costs and emissions.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-recycle"></i>
                    </div>
                    <h3>Recycling Analytics</h3>
                    <p>Advanced analytics to track recycling rates, identify contamination, and improve your sustainability performance.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>Waste Tracking</h3>
                    <p>Comprehensive waste tracking and reporting to help you meet regulatory requirements and sustainability goals.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="stats">
        <div class="container">
            <div class="stats-container">
                <div class="stat-item">
                    <h3>250+</h3>
                    <p>Businesses Transformed</p>
                </div>
                <div class="stat-item">
                    <h3>40%</h3>
                    <p>Average Waste Reduction</p>
                </div>
                <div class="stat-item">
                    <h3>75%</h3>
                    <p>Recycling Rate Increase</p>
                </div>
                <div class="stat-item">
                    <h3>30%</h3>
                    <p>Collection Cost Savings</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials -->
    <section class="testimonials" id="solutions">
        <div class="container">
            <div class="section-title">
                <h2>What Our Clients Say</h2>
                <p>Hear from organizations that have transformed their waste management with Waste Wise</p>
            </div>
            <div class="testimonial-grid">
                <div class="testimonial-card">
                    <p class="testimonial-text">"Waste Wise helped us reduce our landfill waste by 45% in just 6 months while improving our recycling rates significantly."</p>
                    <div class="testimonial-author">
                        <div class="author-avatar">JD</div>
                        <div class="author-info">
                            <h4>Jane Doe</h4>
                            <p>Sustainability Manager, GreenCorp</p>
                        </div>
                    </div>
                </div>
                <div class="testimonial-card">
                    <p class="testimonial-text">"The smart bin technology has reduced our collection costs by 35% while improving service levels for our residents."</p>
                    <div class="testimonial-author">
                        <div class="author-avatar">JS</div>
                        <div class="author-info">
                            <h4>John Smith</h4>
                            <p>City Waste Director</p>
                        </div>
                    </div>
                </div>
                <div class="testimonial-card">
                    <p class="testimonial-text">"The analytics dashboard gives us unparalleled visibility into our waste streams, helping us make data-driven decisions."</p>
                    <div class="testimonial-author">
                        <div class="author-avatar">MB</div>
                        <div class="author-info">
                            <h4>Maria Brown</h4>
                            <p>Facilities Director, University</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta" id="contact">
        <div class="container">
            <h2>Ready to Transform Your Waste Management?</h2>
            <p>Join hundreds of organizations that are reducing costs and environmental impact with Waste Wise solutions.</p>
            <a href="#" class="cta-button">Get Started Today</a>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="footer-content">
                <div class="footer-column">
                    <h3>WasteWise</h3>
                    <p>Innovative waste management solutions for businesses, municipalities, and institutions.</p>
                    <div class="social-links">
                        <a href="#"><i class="fab fa-facebook"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-linkedin"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
                <div class="footer-column">
                    <h3>Solutions</h3>
                    <ul>
                        <li><a href="#">Smart Bins</a></li>
                        <li><a href="#">Recycling Analytics</a></li>
                        <li><a href="#">Waste Tracking</a></li>
                        <li><a href="#">Route Optimization</a></li>
                    </ul>
                </div>
                <div class="footer-column">
                    <h3>Company</h3>
                    <ul>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Careers</a></li>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">Press</a></li>
                    </ul>
                </div>
                <div class="footer-column">
                    <h3>Contact</h3>
                    <ul>
                        <li><a href="#">info@wastewise.com</a></li>
                        <li><a href="#">1-800-WASTEWISE</a></li>
                        <li><a href="#">Support Center</a></li>
                        <li><a href="#">Request Demo</a></li>
                    </ul>
                </div>
            </div>
            <div class="copyright">
                <p>&copy; 2023 WasteWise. All rights reserved.</p>
            </div>
        </div>
    </footer>
</body>
</html>
