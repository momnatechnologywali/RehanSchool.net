<?php
// curriculum.php - Curriculum Page
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rehan School - Curriculum</title>
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
        section {
            margin-bottom: 40px;
            padding: 20px;
            border-radius: 8px;
            background-color: #f9f9f9;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        section h2 {
            color: #000080;
            border-bottom: 2px solid #ffff00;
            padding-bottom: 10px;
        }
        ul {
            list-style-type: disc;
            padding-left: 20px;
        }
        li {
            margin-bottom: 10px;
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
            <h2>Curriculum Overview</h2>
            <p>Our curriculum is based on the founder’s life experiences in travel, business, and networking, evolving with new technologies. It focuses on global citizenship, seeing oneself as unique yet equal to others, with a core value of positively impacting 10 million human beings.</p>
            <p>We emphasize the integration of technology and soft skills training, preparing students for future challenges.</p>
            <ul>
                <li>Innovative Curriculum: Integrates cutting-edge technology and soft skills training.</li>
                <li>AI-Enabled Learning: Advanced tools for digital age readiness.</li>
                <li>Entrepreneurial Skills: Teaching freelancing and earning potential.</li>
                <li>Holistic Approach: Fostering overall growth through modern facilities.</li>
            </ul>
        </section>
    </div>
    <footer>&copy; 2025 Rehan School. All rights reserved.</footer>
</body>
</html>
