<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Events</title>
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
    
    .events {
        padding: 50px;
        text-align: center;
    }
    
    .event-card {
        margin: 20px;
        padding: 20px;
        background-color: #ffffff;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        border-radius: 8px;
        max-width: 300px;
        display: inline-block;
        text-align: left;
    }
    
    .event-card img {
        max-width: 100%;
        border-radius: 8px;
    }
    
    .event-card h2 {
        margin: 10px 0;
    }
    
    .event-card p {
        margin: 5px 0;
        font-size: 0.9em;
    }
    
    .event-card a {
        display: block;
        margin-top: 10px;
        text-decoration: none;
        color: #007bff;
    }
    body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
}

.header {
    background-color: #f5f5f5;
    padding: 20px;
    text-align: center;
}

.events {
    padding: 50px;
    text-align: center;
}

.event-card {
    margin: 20px;
    padding: 20px;
    background-color: #ffffff;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    border-radius: 8px;
    max-width: 300px;
    display: inline-block;
    text-align: left;
}

.event-card img {
    max-width: 100%;
    border-radius: 8px;
}

.event-card h2 {
    margin: 10px 0;
}

.event-card p {
    margin: 5px 0;
    font-size: 0.9em;
}

.event-card a {
    display: block;
    margin-top: 10px;
    text-decoration: none;
    color: #007bff;
}


    </style>
    <link rel="stylesheet" href="styles.css"> 
     <link rel="stylesheet" href="responsive.css">
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
        <h1>Upcoming Events</h1>
    <section class="events">
       

        <div class="event-card">
            <img src="images/14.jpeg" alt="Event 1">
            <h2>Hopeful Hearts Gala</h2>
            <p>Description: Join us for an evening of inspiration and camaraderie at the Hopeful Hearts Gala. This event celebrates the resilience of cancer survivors and raises funds for vital research and support programs. Enjoy a night of fine dining, live entertainment, and uplifting stories of triumph.</p>
            <a href="event details.html">Learn More</a>
        </div>

        <div class="event-card">
            <img src="images/14.jpeg" alt="Event 2">
            <h2>Wellness Workshop: Mindful Living</h2>
            <p>Description: Discover the power of mindfulness in this interactive workshop. Learn practical techniques to cultivate presence, reduce stress, and enhance overall well-being. Guided by experienced mindfulness practitioners, this workshop offers tools to navigate life's challenges with grace and inner peace.</p>
            <a href="event details.html">Learn More</a>
        </div>

        <div class="event-card">
            <img src="images/14.jpeg" alt="Event 3">
            <h2>Cancer Awareness Walkathon</h2>
            <p>Description: Lace up your sneakers and join us for a scenic walkathon to raise awareness about cancer. This community event encourages healthy living while honoring those affected by cancer. Walk, run, or simply cheer on participants as we come together to support a cause that touches us all.</p>
            <a href="event details.html">Learn More</a>
        </div>

        <div class="event-card">
            <img src="images/14.jpeg" alt="Event 4">
            <h2>Art Therapy: Creative Expression in Healing</h2>
            <p>Description: Unleash your creativity in this therapeutic art session. Led by professional artists, participants will explore various mediums to express emotions, hopes, and aspirations. No prior artistic experience required—just a willingness to let your imagination flow.</p>
            <a href="event details.html">Learn More</a>
        </div>

        <div class="event-card">
            <img src="images/14.jpeg" alt="Event 5">
            <h2>Nutrition Workshop: Nourishing the Body, Empowering the Soul</h2>
            <p>Description: Dive into the world of nutrition with our expert-led workshop. Gain valuable insights on crafting balanced, nutrient-rich meals that support overall well-being. Discover how proper nutrition can enhance energy levels, promote healing, and empower individuals on their cancer journey.</p>
            <a href="event details.html">Learn More</a>
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
