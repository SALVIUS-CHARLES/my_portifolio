<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Me</title>
    <style>
        /* General Reset */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* Body Styles */
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
            background-color: #f4f4f9;
            background-image: url('stars.PNG'); /* Add the path to your background image here */
            background-size: cover;
            background-position: center;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        /* Navigation Styles */
        nav {
            background-color: #333;
            padding: 1em 0;
            text-align: center;
        }

        nav a {
            color: #fff;
            text-decoration: none;
            margin: 0 15px;
            font-size: 18px;
            transition: color 0.3s ease;
            
        }

        nav ul li a:hover {
            background-color: #575757;
            border-radius: 5px;
            align-items: center;

        }


        /* Header Styles */
        header {
            text-align: center;
            padding: 20px;
            background: black;
            color: white;
        }

        header h1 {
            font-size: 36px;
            margin-bottom: 10px;
            color: gold;
        }

        /* Contact Form Section */
        main {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: calc(100vh - 140px); /* Adjust for header and footer */
            flex-grow: 1;
        }

        #contact-form {
            background: rgba(255, 255, 255, 0.9); /* Slight transparency for the background */
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 90%;
            max-width: 500px;
        }

        #contact-form h2 {
            margin-bottom: 20px;
            font-size: 24px;
            color: #444;
            text-align: center;
        }

        /* Form Inputs */
        form label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
            color: #555;
        }

        form input,
        form textarea,
        form button {
            width: 100%;
            margin-bottom: 15px;
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        form textarea {
            resize: vertical;
            height: 120px;
        }

        form button {
            background-color: black;
            color: white;
            border: none;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        form button:hover {
            background-color: green;
        }

        /* Error Messages */
        .error-message {
            color: #d32f2f;
            font-size: 14px;
            margin-top: 5px;
        }

        .input-error {
            border-color: #d32f2f;
        }

        /* Loading Indicator */
        #loading {
            display: none;
            color: #555;
            font-size: 18px;
            text-align: center;
            margin-top: 10px;
        }

        /* Footer Styles */
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
            width: 30px; /* Adjust size as needed */
            height: 30px;
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

    <header>
        <h1>Contact Me</h1>
    </header>

    <main>
        <section id="contact-form">
            <h2>FOR MORE INFO..</h2>

            <!-- Display success or error messages -->
            <div id="errorMessages"></div>

            <form id="contactForm" action="contact.php" method="POST">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>
                <div class="error-message" id="nameError"></div>

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
                <div class="error-message" id="emailError"></div>

                <label for="message">Message:</label>
                <textarea id="message" name="message" required></textarea>
                <div class="error-message" id="messageError"></div>

                <button type="submit">Send Message</button>
            </form>

            <!-- Loading Indicator -->
            <div id="loading">Submitting your message...</div>
        </section>
    </main>

    <footer>
        <p>&copy; Copyright All Rights Reserved © 2025 | Developed by Salvius Charles</p>

        <div class="social-media">
            <a href="https://www.tweeter.com" target="_blank">
                <img src="TWEET.PNG" alt="TWEETER" />
            </a>
            <a href="https://www.whatasapp.com" target="_blank">
                <img src="TSAPP.PNG" alt="WHATSAP" />
            </a>
        </div>
    </footer>

    <script>
        // JavaScript to enhance the form
        document.getElementById('contactForm').addEventListener('submit', function(event) {
            // Prevent default form submission
            event.preventDefault();

            // Show loading indicator
            document.getElementById('loading').style.display = 'block';

            // Clear previous error messages and styles
            const errorMessages = document.querySelectorAll('.error-message');
            errorMessages.forEach(msg => msg.textContent = '');

            const inputs = document.querySelectorAll('input, textarea');
            inputs.forEach(input => input.classList.remove('input-error'));

            let formValid = true;

            // Validate Name
            const name = document.getElementById('name').value.trim();
            if (name === "") {
                formValid = false;
                document.getElementById('nameError').textContent = "Name is required.";
                document.getElementById('name').classList.add('input-error');
            }

            // Validate Email
            const email = document.getElementById('email').value.trim();
            if (email === "") {
                formValid = false;
                document.getElementById('emailError').textContent = "Email is required.";
                document.getElementById('email').classList.add('input-error');
            } else if (!validateEmail(email)) {
                formValid = false;
                document.getElementById('emailError').textContent = "Please enter a valid email address.";
                document.getElementById('email').classList.add('input-error');
            }

            // Validate Message
            const message = document.getElementById('message').value.trim();
            if (message === "") {
                formValid = false;
                document.getElementById('messageError').textContent = "Message is required.";
                document.getElementById('message').classList.add('input-error');
            }

            // If form is valid, submit the form
            if (formValid) {
                // Simulate successful form submission (in a real application, the form would submit via AJAX or reload the page)
                setTimeout(function() {
                    document.getElementById('loading').style.display = 'none';
                    alert('message has been sent successfully!');
                    document.getElementById('contactForm').reset();
                }, 2000);  // Simulate a 2-second delay before hiding the loading indicator and showing success
            } else {
                // Hide the loading indicator if there is an error
                document.getElementById('loading').style.display = 'none';
            }
        });

        // Function to validate email
        function validateEmail(email) {
            const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            return emailPattern.test(email);
        }
    </script>
</body>
</html>
