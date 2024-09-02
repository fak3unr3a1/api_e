<?php
    class menus {
        public function main_menu() {
?>
            <div class="topnav">
                <a href="./">Home</a>
                <a href="about.php">About Us</a>
                <a href="projects.php">Our Projects</a>
                <a href="portfolio.php">Our Portfolio</a>
                <a href="blog.php">Blog</a>
                <a href="contact.php">Contact Us</a>
            </div>

            <!-- Main Content -->
            <div class="content">
                <h1>Welcome to Our Website</h1>
                <p>At UNR3A1, we are committed to delivering the best solutions for our clients. Explore our website to learn more about what we do and how we can help you achieve your goals.</p>

                <h2>About Us</h2>
                <p>We are a team of dedicated professionals with a passion for innovation and excellence. Our mission is to provide top-quality services that meet the unique needs of our clients.</p>

                <h2>Our Projects</h2>
                <p>We take pride in our diverse portfolio of projects, each one reflecting our commitment to quality and client satisfaction. Browse through our project gallery to see our work in action.</p>

                <h2>Our Portfolio</h2>
                <p>Our portfolio showcases the breadth and depth of our expertise. From design to development, we deliver exceptional results across a wide range of industries.</p>

                <h2>Blog</h2>
                <p>Stay updated with the latest industry trends, insights, and tips by following our blog. We regularly publish articles that offer valuable information and inspiration.</p>

                <h2>Contact Us</h2>
                <p>Have any questions or want to discuss a project? Get in touch with us through our contact page. We're here to help and look forward to hearing from you.</p>
            </div>

            <!-- Footer -->
            <div class="footer">
                <p>&copy; <?php echo date("Y"); ?> UNR3A1. All rights reserved.</p>
            </div>
<?php
        }
    }
?>
