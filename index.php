<?php
// index.php - Homepage
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rehan School - Where seventh-grade students learn to earn $500 a month</title>
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
        .features {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
        }
        .feature {
            flex: 1 1 300px;
            margin: 10px;
            padding: 15px;
            background-color: #ffff00;
            color: #000080;
            border-radius: 8px;
            text-align: center;
            transition: transform 0.3s ease;
        }
        .feature:hover {
            transform: scale(1.05);
        }
        .stats {
            display: flex;
            justify-content: space-around;
            text-align: center;
        }
        .stat {
            flex: 1;
            padding: 20px;
            background-color: #000080;
            color: #ffff00;
            margin: 10px;
            border-radius: 8px;
        }
        .testimonial {
            background-color: #ffff00;
            color: #000080;
            padding: 15px;
            margin: 10px 0;
            border-radius: 8px;
            font-style: italic;
        }
        .articles {
            display: flex;
            flex-wrap: wrap;
        }
        .article {
            flex: 1 1 400px;
            margin: 10px;
            padding: 15px;
            background-color: #f0f0f0;
            border-radius: 8px;
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
            .features, .stats, .articles {
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
        <section id="introduction">
            <h2>Introduction</h2>
            <p>Founded by Rehan Allahwala, our mission is to end poverty in Pakistan by equipping students with problem-solving capabilities. Our aim is to help your child become an expert in problem-solving and earn Rs. 25,000 per month from freelancing which we will teach them.</p>
        </section>
        <section id="features">
            <h2>Unique Features</h2>
            <div class="features">
                <div class="feature">
                    <h3>AI-Enabled Education</h3>
                    <p>As the first AI-enabled school in Pakistan, Rehan School offers advanced learning tools that keep students ahead in the digital age.</p>
                </div>
                <div class="feature">
                    <h3>Holistic Development</h3>
                    <p>Comprehensive approach includes modern classrooms, well-equipped labs, and sports facilities to foster overall growth.</p>
                </div>
                <div class="feature">
                    <h3>Entrepreneurial Focus</h3>
                    <p>Empower students to earn while learning by developing marketable skills, promoting financial independence.</p>
                </div>
            </div>
        </section>
        <section id="statistics">
            <h2>Statistics</h2>
            <div class="stats">
                <div class="stat">
                    <h3>10+</h3>
                    <p>Team Members</p>
                </div>
                <div class="stat">
                    <h3>100+</h3>
                    <p>Students</p>
                </div>
                <div class="stat">
                    <h3>1</h3>
                    <p>Campuses</p>
                </div>
            </div>
        </section>
        <section id="testimonials">
            <h2>Testimonials</h2>
            <div class="testimonial">"Rehan School transformed my child's future!" - Parent A</div>
            <div class="testimonial">"Amazing AI integration and entrepreneurial training." - Student B</div>
        </section>
        <section id="articles">
            <h2>Latest Articles</h2>
            <div class="articles">
                <div class="article">
                    <h3>Launching New AI Curriculum</h3>
                    <p>Details on our latest updates in AI education.</p>
                </div>
                <div class="article">
                    <h3>Student Success Stories</h3>
                    <p>How our students are earning while learning.</p>
                </div>
            </div>
        </section>
    </div>
    <footer>&copy; 2025 Rehan School. All rights reserved.</footer>
</body>
</html>
