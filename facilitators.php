<?php
// facilitators.php - Facilitators Page
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rehan School - Facilitators</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #ffffff;
            color: #333333;
        }
        header {
            background-color: #000080;
            color: #ffff00;
            padding: 20px;
            text-align: center;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
        header h1 {
            margin: 0;
            font-size: 2.5em;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
        }
        nav {
            background-color: #000080;
            padding: 10px;
            text-align: center;
        }
        nav a {
            color: #ffff00;
            text-decoration: none;
            margin: 0 15px;
            font-size: 1.2em;
            transition: color 0.3s ease;
        }
        nav a:hover {
            color: #ffffff;
        }
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }
        .facilitators {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
        }
        .facilitator {
            flex: 1 1 300px;
            margin: 10px;
            padding: 15px;
            background-color: #ffff00;
            color: #000080;
            border-radius: 8px;
            text-align: center;
            transition: transform 0.3s ease;
        }
        .facilitator:hover {
            transform: scale(1.05);
        }
        .facilitator a {
            color: #000080;
            text-decoration: none;
        }
        footer {
            background-color: #000080;
            color: #ffff00;
            text-align: center;
            padding: 10px;
            position: fixed;
            width: 100%;
            bottom: 0;
        }
        @media (max-width: 768px) {
            .facilitators {
                flex-direction: column;
            }
            nav a {
                display: block;
                margin: 10px 0;
            }
        }
    </style>
</head>
<body>
    <header>
        <h1>Rehan School</h1>
        <p>Where seventh-grade students learn to earn $500 a month</p>
    </header>
    <nav>
        <a href="index.php">Home</a>
        <a href="curriculum.php">Curriculum</a>
        <a href="facilitators.php">Facilitators</a>
        <a href="contact.php">Contact</a>
    </nav>
    <div class="container">
        <section>
            <h2>Our Facilitators</h2>
            <div class="facilitators">
                <div class="facilitator">
                    <h3>Rehan Allahwala</h3>
                    <p>Founder and Lead Educator. Expert in entrepreneurship and AI.</p>
                    <a href="https://twitter.com/rehanallahwala">Twitter</a> | <a href="https://linkedin.com/in/rehanallahwala">LinkedIn</a>
                </div>
                <div class="facilitator">
                    <h3>Jane Doe</h3>
                    <p>AI Specialist. Teaches advanced tech integration.</p>
                    <a href="https://twitter.com/janedoe">Twitter</a> | <a href="https://linkedin.com/in/janedoe">LinkedIn</a>
                </div>
                <div class="facilitator">
                    <h3>John Smith</h3>
                    <p>Entrepreneurship Coach. Focuses on freelancing skills.</p>
                    <a href="https://twitter.com/johnsmith">Twitter</a> | <a href="https://linkedin.com/in/johnsmith">LinkedIn</a>
                </div>
            </div>
        </section>
    </div>
    <footer>&copy; 2025 Rehan School. All rights reserved.</footer>
</body>
</html>
