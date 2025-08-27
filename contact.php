<?php
// contact.php - Contact Page with form handling
include 'db.php';
 
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'] ?? '';
    $email = $_POST['email'] ?? '';
    $message = $_POST['message'] ?? '';
 
    if (!empty($name) && !empty($email) && !empty($message)) {
        try {
            $stmt = $pdo->prepare("INSERT INTO inquiries (name, email, message) VALUES (:name, :email, :message)");
            $stmt->execute(['name' => $name, 'email' => $email, 'message' => $message]);
            echo "<script>alert('Message sent successfully!'); window.location.href = 'index.php';</script>";
            exit;
        } catch (PDOException $e) {
            echo "<script>alert('Error: " . addslashes($e->getMessage()) . "');</script>";
        }
    } else {
        echo "<script>alert('Please fill all fields.');</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rehan School - Contact</title>
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
        form {
            display: flex;
            flex-direction: column;
        }
        label {
            margin-bottom: 5px;
            color: #000080;
        }
        input, textarea {
            margin-bottom: 15px;
            padding: 10px;
            border: 1px solid #000080;
            border-radius: 4px;
            font-size: 1em;
        }
        button {
            background-color: #000080;
            color: #ffff00;
            padding: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        button:hover {
            background-color: #ffff00;
            color: #000080;
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
        <section id="contact-info">
            <h2>Contact Information</h2>
            <p>Address: Korangi Campus, Karachi, Pakistan</p>
            <p>Phone: +92-123-456789</p>
            <p>Email: info@rehanschool.net</p>
        </section>
        <section id="contact-form">
            <h2>Send Us a Message</h2>
            <form method="POST">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
                <label for="message">Message:</label>
                <textarea id="message" name="message" rows="5" required></textarea>
                <button type="submit">Submit</button>
            </form>
        </section>
    </div>
    <footer>&copy; 2025 Rehan School. All rights reserved.</footer>
</body>
</html>
