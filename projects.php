<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Projects - UNR3A1</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            line-height: 1.6;
        }
        .container {
            width: 80%;
            margin: auto;
            overflow: hidden;
        }
        h2 {
            color: #333;
            text-align: center;
            margin-top: 30px;
        }
        p {
            text-align: center;
            color: #666;
        }
        .projects {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            padding: 20px;
        }
        .project {
            padding: 15px;
            background-color: #f4f4f4;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        .footer {
            text-align: center;
            padding: 20px;
            background-color: #333;
            color: #fff;
            position: relative;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Our Projects</h2>
        <p>We take pride in our diverse portfolio of projects, each one reflecting our commitment to quality and client satisfaction. Browse through our project gallery to see our work in action.</p>

        <div class="projects">
            <div class="project">
                <h3>Project A</h3>
                <p>A comprehensive solution for automating agricultural processes. This project includes IoT integration, real-time data analytics, and an intuitive user interface for remote management.</p>
            </div>
            <div class="project">
                <h3>Project B</h3>
                <p>Development of a scalable e-commerce platform with advanced search functionality, secure payment integration, and a seamless user experience tailored for global audiences.</p>
            </div>
            <div class="project">
                <h3>Project C</h3>
                <p>A custom CRM solution designed for small businesses, featuring lead management, customer interaction tracking, and automated reporting for better decision-making.</p>
            </div>
            <div class="project">
                <h3>Project D</h3>
                <p>Implementation of a robust subscription management system for a SaaS company, including tiered pricing, automated billing, and detailed usage analytics.</p>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <div class="footer">
        <p>&copy; <?php echo date("Y"); ?> UNR3A1. All rights reserved.</p>
    </div>
</body>
</html>
