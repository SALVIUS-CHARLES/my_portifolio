<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projects</title>
    <link rel="stylesheet" href="css/styles.css">
    <style>
        /* General Reset */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f9;
    color: #333;
    background-image: url('moon.PNG'); /* Ensure the image path is correct */
    background-size: cover; /* This ensures the image covers the entire screen */
    background-position: center; /* This centers the image on the page */
    line-height: 1.6;
    display: flex;
    flex-direction: column;
    min-height: 100vh;
}


        /* Navigation Bar */
        nav {
            width: 100%;
            background-color: #333;
            padding: 15px 0;
            text-align: center;
        }

        nav a {
            color: #fff;
            text-decoration: none;
            margin: 0 15px;
            font-size: 18px;
            font-weight: bold;
            transition: color 0.3s ease;
        }

        nav a:hover {
            color:#575757;
        }

        /* Projects Section */
        #projects {
            max-width: 1200px;
            margin: 100px auto 0;
            text-align: center;
            flex-grow: 1;
        }

        #projects h2 {
            font-size: 2.5em;
            color: gold;
            margin-bottom: 20px;
        }

        .gallery {
            display: flex;
            justify-content: center;
            gap: 20px;
            flex-wrap: wrap;
        }

        .project-card {
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            max-width: 300px;
            text-align: center;
        }

        .project-card img {
            width: 100%;
            height: auto;
        }

        .project-card h3 {
            font-size: 1.5em;
            color: #333;
            margin: 15px 0 10px;
        }

        .project-card p {
            font-size: 1em;
            padding: 0 15px 15px;
            color: #555;
        }

        /* Footer */
        footer {
        text-align: center;
        padding: 20px;
        background-color: #333;
        color: #fff;
        font-size: 14px;
        width: 100%;
    }

    footer .social-media {
        margin-top: 10px;
    }

    footer .social-media a {
        margin: 0 10px;
        display: inline-block;
    }

    footer .social-media img {
        width: 40px; /* Adjust size as needed */
        height: 40px;
        transition: transform 0.3s ease;
    }

    footer .social-media img:hover {
        transform: scale(1.2);
    }
    </style>
</head>

<body>
    <nav>
        <a href="index.html">Home</a>
        <a href="about.html">About Me</a>
        <a href="projects.php">Projects</a>
        <a href="contact.php">Contact</a>
    </nav>

    <section id="projects">
        <h2>Projects</h2>
        <div class="gallery">
            <!-- Project 1 -->
            <div class="project-card">
                <img src="web dvp.PNG" alt="Project 1 Image"> <!-- Replace with your image path -->
                <h3>Project 1: WEB DEVELOPMENT</h3>
                <p>
                Web development is the process of building and maintaining websites.
                 It involves front-end development (design and interactivity) using HTML, CSS, and JavaScript, and back-end development (server-side functionality) using languages like PHP, Python, and databases. Web developers ensure that websites are functional, responsive, and user-friendly. It also includes testing and optimizing for performance and security.
                 Full-stack development covers both front-end and back-end tasks.
                </p>
            </div>

            <!-- Project 2 -->
            <div class="project-card">
                <img src="gra.PNG" alt="Project 2 Image"> <!-- Replace with your image path -->
                <h3>Project 2: GRAPHICS DESIGN</h3>
                <p>
                Graphic design is the art of visual communication through the use of typography,
                 imagery, color, and layout. Designers create visual content for branding, advertising,
                  websites, and more. It involves tools like Adobe Photoshop and Illustrator to craft designs that convey messages effectively. Graphic design enhances user experience and helps businesses stand out.
                 It combines creativity with technical skills to create impactful visuals.
                </p>
            </div>

            <!-- Project 3 -->
            <div class="project-card">
                <img src="ML.PNG" alt="Project 3 Image"> <!-- Replace with your image path -->
                <h3>Project 3: MACHINE LEARNING</h3>
                <p>
                Machine learning is a subset of Artificial Intelligence (AI) that enables computers to 
                learn from data and make predictions without being explicitly programmed.
                </p>
            </div>
        </div>
    </section>

    <footer>
        <p>&copy; Copyright All Rights Reserved © 2025 | Developed by Salvius Charles</p>

        <div class="social-media">
            <a href="https://www.tweeter.com" target="_blank">
                <img src="TWEET.PNG" alt="Tweeter" />
            </a>
            <a href="https://www.whatasapp.com" target="_blank">
                <img src="TSAPP.PNG" alt="Whatsap" />
            </a>
        </div>
    </footer>
</body>
</html>
