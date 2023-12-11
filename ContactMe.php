<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>DoctorConnect | Contact Us</title>
    <style>
        /* Body styles */
body {
    font-family: sans-serif;
    margin: 0;
    padding: 0;
}

/* Header styles */
.header {
    background-color: bisque;
    color: black;
    padding: 20px;
}

.logo {
    font-size: 36px;
    margin: 0;
    display: inline-block;
}

nav ul {
    list-style: none;
    margin: 0;
    padding: 0;
    display: inline-block;
}

nav li {
    display: inline-block;
    margin-right: 20px;
}

nav a {
    text-decoration: none;
    font-size: 20px;
}

    nav a:hover {
        text-decoration: underline;
    }

.button {
    background-color: blue;
    border: none;
    color: black;
    padding: 10px 20px;
    font-size: 20px;
    border-radius: 5px;
    cursor: pointer;
}


/* Navigation styles */
nav {
    background-color: #ccc;
    display: flex;
    justify-content: space-between;
    padding: 0.5rem 1rem;
}

    nav ul {
        list-style: none;
        margin: 0;
        padding: 0;
    }

    nav li {
        display: inline-block;
        margin: 0 0.5rem;
    }

    nav a {
        color: #000;
        text-decoration: none;
    }

/* Main section styles */
main {
display: flex;
flex-direction: column;
margin: 1rem auto;
max-width: 500px;
}
main h2 {
    font-size: 2rem;
    margin: 0 0 1rem;
    text-align: center; /* Center the heading */
}

main form {
    display: flex;
    flex-direction: column;
    align-items: center; /* Center the form contents */
}

main label {
    margin: 0.5rem 0;
    text-align: left; /* Align the labels to the left */
    font-weight: bold; /* Make the labels bold */
}

main input,
main select,
main textarea {
    border: 2px solid #ccc;
    border-radius: 4px;
    font-size: 1rem;
    padding: 0.5rem;
    width: 100%; /* Make the input fields 100% width */
}

    main input:focus,
    main select:focus,
    main textarea:focus {
        border-color: #303f9f;
    }

main button[type="submit"] {
    background-color: #303f9f;
    border: none;
    border-radius: 4px;
    color: black;
    font-size: 1rem;
    margin: 1rem 0;
    padding: 0.5rem;
    width: 50%; /* Make the submit button 50% width */
    align-self: center; /* Center the button within the form */
} 


/* Contact info styles */
.contact-info {
    display: flex;
    flex-direction: column;
    margin: 1rem;
}

    .contact-info h2 {
        font-size: 2rem;
        margin: 0 0 1rem;
    }

    .contact-info p {
        margin: 0.5rem 0;
    }

/* Footer styles */
.footer {
    background-color: bisque;
    color: black;
    padding: 20px;
    text-align: center;
}

.logo {
    font-size: 1.5em;
    margin-bottom: 10px;
}

.useful-links {
    margin-bottom: 10px;
}

ul {
    list-style: none;
    padding: 0;
}

li {
    display: inline-block;
    margin: 0 10px;
}

a {
    color:;
    text-decoration: none;
}

    a:hover {
        color: #000;
    }

p {
    font-size: 0.8em;
}

    </style>
</head>
<body>
    <header class="header">
        <div class="header-content">
            <h1 class="logo">DoctorConnect</h1>
            <nav>
                <ul>
                    <li><a href="index.html">Solace_Sphere</a></li>
                    <li><a href="DoctorConnect.html">Home</a></li>
                    <li><a href="services.html">Services</a></li>
                    <li><a href="contact.html">Contact Us</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <main class="contact-page">
        <h2>Book an Appointment</h2>
        <form method="post" action="appointment.php">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="phone">Phone:</label>
            <input type="tel" id="phone" name="phone" required>

            <label for="service">Select Service:</label>
            <select id="service" name="service">
                <option value="Preventative Care">Preventative Care</option>
                <option value="Cardiology">Cardiology</option>
                <option value="Chronic Illness Management">Chronic Illness Management</option>
                <option value="Women's Health">Women's Health</option>
            </select>

            <label for="date">Preferred Date:</label>
            <input type="date" id="date" name="date" required>

            <label for="message">Message:</label>
            <textarea id="message" name="message" required></textarea>

            <button type="submit">Submit</button>
        </form>
        <div class="contact-info">
            <h2>Dr. Namwaya</h2>
            <p>Address: 123 Main St, Anytown, USA</p>
            <p>Phone: 555-555-5555</p>
            <p>Email: annenamwaya001@gmail.com</p>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3223.738541103499!2d-96.7963238846774!3d32.78052388096628!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x21ff830be084e8d3!2sDoctor%20Name%20Medical%20Clinic!5e0!3m2!1sen!2sus!4v1652500441979!5m2!1sen!2sus" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </main>

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
</body>
</html>