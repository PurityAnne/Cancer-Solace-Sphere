<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event Details</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="responsive.css">
    <style>body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
    }
    
    .header {
        background-color: #f5f5f5;
        padding: 20px;
        text-align: center;
    }
    
    .event-details {
        margin: 20px;
    }
    
    .event-image img {
        max-width: 100%;
        border-radius: 8px;
    }
    
    .event-info h1 {
        font-size: 2em;
        margin-top: 20px;
    }
    
    .event-info p {
        font-size: 1.2em;
        margin: 10px 0;
    }
    
    .event-info a {
        display: inline-block;
        margin-top: 20px;
        padding: 10px 20px;
        background-color: #007bff;
        color: #fff;
        text-decoration: none;
        border-radius: 8px;
        transition: background-color 0.3s;
    }
    
    .event-info a:hover {
        background-color: #0056b3;
    }
    
    .additional-details {
        margin: 30px 0;
    }
    
    .additional-details h2 {
        font-size: 1.5em;
        margin-bottom: 10px;
    }
    
    .additional-details p {
        font-size: 1.2em;
        margin: 5px 0;
    }
    
    .footer {
        background-color: #f5f5f5;
        padding: 20px;
        text-align: center;
    }
    @media screen and (max-width: 768px) {
    .event-info h1 {
        font-size: 1.5em;
    }

    .event-info p {
        font-size: 1em;
    }

    .event-info a {
        font-size: 1em;
    }

    .additional-details h2 {
        font-size: 1.2em;
    }

    .additional-details p {
        font-size: 1em;
    }
}

    </style>
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

    <section class="event-details">
        <div class="event-image">
            <img src="images/14.jpeg" alt="Event 1">
        </div>
        <div class="event-info">
            <h1>Hopeful Hearts Gala</h1>
            <p>Date: October 25, 2023</p>
            <p>Location: Venue Name, City</p>
            <p>Description: Join us for an evening of inspiration and camaraderie at the Hopeful Hearts Gala. This event celebrates the resilience of cancer survivors and raises funds for vital research and support programs. Enjoy a night of fine dining, live entertainment, and uplifting stories of triumph.</p>
            <a href="registration.html">Register Now</a>
        </div>
        
        <!-- Additional Event Details -->
        <div class="additional-details">
            <h2>Agenda</h2>
            <p>6:00 PM - 7:00 PM: Cocktail Reception</p>
            <p>7:00 PM - 9:00 PM: Dinner and Program</p>
            <p>9:00 PM - 10:00 PM: Live Music and Networking</p>
        </div>

        <div class="additional-details">
            <h2>Guest Speakers</h2>
            <p>1. Dr. Emily Rodriguez - Oncologist</p>
            <p>2. Sarah Thompson - Cancer Survivor</p>
            <p>3. Michael Johnson - Support Group Leader</p>
        </div>

        <div class="additional-details">
            <h2>Contact Information</h2>
            <p>Email: info@hopefulheartsgala.com</p>
            <p>Phone: (123) 456-7890</p>
        </div>
    </section>

    <section class="footer">
        <h4>About us</h4>
        <p>Empowering Lives, Inspiring Hope.<br> Discover our mission, our team, and the heart behind our platform.<br> Together, we're rewriting the narrative of cancer, one resilient step at a time.</p>
        <div class="icons">
            <i class="fa fa-facebook"></i>
            <i class="fa fa-twitter"></i>
            <i class="fa fa-instagram"></i>
            <i class="fa fa-linkedin"></i>
            
        </div>
        <p>Made with <i class="fa fa-heart-o"></i> by Namwaya </p>
    </section>
</body>
</html>
