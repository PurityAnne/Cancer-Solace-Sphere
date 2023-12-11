<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact us</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
        <section class="sub-header">
            <nav>
                <a href="index.html"><img src="community logo.jpeg"></a>
                <div class="nav-links" id="nav-links">
                    <!-- <i class="fa fa-times" onclick="hideMenu()"></i> -->
                    <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="About.php">About Us</a></li>
                    <li><a href="services.php">Services</a></li>
                    <li><a href="events.php">Events</a></li>
                    <li><a href="community.php">Community</a></li>
                    <li><a href="blog.php">Blog</a></li>
                    <li><a href="contact.php">Contact</a></li>
                    <li><a href="DoctorConnect.php">DoctorConnect</a></li>
                    <li><a href="Donations.php">Donations</a></li>

                    </ul>
                    <!-- <i class="fa fa-bars"onclick="showMenu() ></i> -->
                </div>
            </nav>
    <h1>Contact</h1>
    
        </section>
        <section class="location">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31912.500070216847!2d36.68326349600357!3d-1.1152563201195478!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f25fdf626d033%3A0xa7acfc7e724492b8!2sRiara%20Ridge!5e0!3m2!1sen!2ske!4v1697725308503!5m2!1sen!2ske" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </section>
        <section class="contact-us">
            <div class="row">
            <div class="contact-col">
            <div><i class="fa fa-home"></i>
            <span>
                <h5>XYZ Road,Postgraduate building</h5>
                <p>Kabuku, Limuru</p>
            </span>
        </div>
        <div><i class="fa fa-phone"></i>
            <span>
                <h5>0796315376</h5>
                <p>Monday to Saturday</p>
            </span>
        </div>
        <div><i class="fa fa-envelope"></i>
            <span>
                <h5>annenamwaya@gmail.com</h5>
                <p>Email us your query</p>
            </span>
        </div>
        </div>
            <div class="contact-col">
                <form action="form-hndler.php" method="post">
                    <input  type="text" name="name" placeholder="Enter your name "required>
                    <input  type="email" name="email" placeholder="Enter your email address" required>
                    <input  type="text" name="subject" placeholder="Enter your subject "required>
                    <textarea rows="10" name="message" placeholder="Message" required></textarea>
                        <button type="submit" class="hero-btn">Send Message</button>

                    
                </form>
            </div>
        </section>
        <section class="footer">
            <h4>Contact us</h4>
            <p>Empowering Lives, Inspiring Hope.<br> Discover our mission, our team, and the heart behind our platform.<br> Together, we're rewriting the narrative of cancer, one resilient step at a time.</p>
            <div class="icons">
                <i class="fa fa-facebook"></i>
                <i class="fa fa-twitter"></i>
                <i class="fa fa-instagram"></i>
                <i class="fa fa-linkedin"></i>
                
                
            </div>
            <p>Made with <i class="fa fa-heart-o"></i> by Namwaya </p>
        </section>
</html>