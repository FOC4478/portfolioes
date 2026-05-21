okay how do i link it to my github? and in the footer i need  socials. <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Professional Portfolio</title>

    <link rel="stylesheet" href="index.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
</head>
<body>

    <!-- NAVBAR -->
    <nav>
        <div class="logo">
         INNOCENT OKEKEM FAVOUR<span>.</span>
        </div>

        <ul class="nav-links" id="navLinks">
            <li><a href="#home">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#projects">Projects</a></li>
            <li><a href="#contact">Contact</a></li>
        </ul>

        <div class="hamburger" id="hamburger">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </nav>

    <!-- HERO -->
    <section class="hero" id="home">

        <div class="glow glow1"></div>
        <div class="glow glow2"></div>

        <div class="hero-content">

            <!-- LEFT -->
            <div class="left">

                <p class="tag">
                    WELCOME TO MY PORTFOLIO
                </p>

                <h1>
                    Creative <br>
                    <span>Web</span> Developer
                </h1>

                <p class="desc">
                    I create modern responsive websites with beautiful
                    animations, clean UI designs and smooth user experiences.
                </p>

                <div class="buttons">
                    <a href="#projects" class="btn primary">
                        View Projects
                    </a>

                    <a href="#contact" class="btn secondary">
                        Hire Me
                    </a>
                </div>

            </div>

            <!-- RIGHT -->
            <div class="right">

                <div class="circle"></div>

                <div class="image-card">
                    <img src="images/picture1.png" alt="">
                </div>

            </div>

        </div>

    </section>

    <!-- ABOUT -->
    <section class="about" id="about">

        <div class="about-image">
            <img src="images/picture2.png" alt="">
        </div>

        <div class="about-content">

            <h2>
                About <span>Me</span>
            </h2>

            <p>
                I specialize in building professional websites using HTML,
                CSS, JavaScript and modern frontend technologies with responsive
                layouts and smooth animations.
            </p>

            <div class="stats">

                <div class="card">
                    <h3>3+</h3>
                    <p>Years Experience</p>
                </div>

                <div class="card">
                    <h3>50+</h3>
                    <p>Projects Completed</p>
                </div>

            </div>

        </div>

    </section>

    <!-- PROJECTS -->
   <section class="projects" id="projects">

    <div class="title">
        <h2>Featured <span>Projects</span></h2>
        <p>Some of the web applications and UI systems I have built.</p>
    </div>

    <div class="project-grid">

        <div class="project-card">
            <img src="https://images.unsplash.com/photo-1555066931-4365d14bab8c?q=80&w=1000" alt="">

            <div class="project-content">
                <h3>Admin Dashboard System</h3>
                <p>
                    A responsive admin panel with user management,
                    analytics, and CRUD functionality.
                </p>
                <a href="#">View Details →</a>
            </div>
        </div>

        <div class="project-card">
            <img src="https://images.unsplash.com/photo-1557821552-17105176677c?q=80&w=1000" alt="">

            <div class="project-content">
                <h3>Eatery Website</h3>
                <p>
                    Modern restaurant website with menu display,
                    animations, and mobile responsiveness.
                </p>
                <a href="#">View Details →</a>
            </div>
        </div>

        <div class="project-card">
            <img src="https://images.unsplash.com/photo-1581091870622-3d6f3b0c2f12?q=80&w=1000" alt="">

            <div class="project-content">
                <h3>Attendance System UI</h3>
                <p>
                    Smart attendance interface design with login,
                    record tracking, and dashboard layout.
                </p>
                <a href="#">View Details →</a>
            </div>
        </div>

    </div>

</section>

    <!-- CONTACT -->
    <section class="contact" id="contact">

        <h2>
            Let's Work <span>Together</span>
        </h2>

        <p>
            Have a project idea or need a professional website?
            Let's create something amazing.
        </p>

        <form>
            <input type="text" placeholder="Your Name">
            <input type="email" placeholder="Your Email">
            <textarea placeholder="Your Message"></textarea>

            <button type="submit">
                Send Message
            </button>
        </form>

    </section>

    <!-- FOOTER -->
    <footer>
        © 2026 Favour Portfolio. All Rights Reserved.
    </footer>

    <script src="index.js"></script>

</body>
</html>