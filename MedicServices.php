<!DOCTYPE html>
<html>
<head>
    <title>DoctorConnect - Services</title>
    <style>
        /* Reset default styles */
* {
    box-sizing: border-box;
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

/* Service details styles */
.service-details {
    padding: 2rem;
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    font-family: Arial, sans-serif;
}

.service {
    width: 30rem;
    margin: 1rem;
    padding: 1rem;
    border: 1px solid #ccc;
    border-radius: 5px;
}

.service-img {
    width: 100%;
    height: auto;
    border-radius: 5px;
    margin-bottom: 1rem;
}

.service h3 {
    font-size: 1.5rem;
    margin-bottom: 0.5rem;
}

.service h4 {
    font-size: 1.2rem;
    margin-top: 1rem;
    margin-bottom: 0.5rem;
}

.service p {
    font-size: 1rem;
    line-height: 1.5;
}

.book-appointment-btn {
    display: inline-block;
    margin-top: 10px;
    padding: 8px 16px;
    background-color: bisque;
    color: black;
    border-radius: 4px;
    text-decoration: none;
    font-size: 14px;
    font-weight: 600;
    transition: background-color 0.3s ease-in-out;
}

    .book-appointment-btn:hover {
        background-color: #0062cc;
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
    color: #666;
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
                    <li><a href="MedicServices.html">Services</a></li>
                    <li><a href="contact.html">Contact Us</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <section class="service-details">
        <div class="service-details-container">
            <h2>Services</h2>
            <div class="service">
                <img src="images/service1.jpg" alt="Preventative Care" class="service-img">
                <h3>Preventative Care</h3>
                <p>Dr. Namwaya emphasizes the importance of preventing health problems before they occur. He provides a range of preventative services such as routine check-ups, screenings, and immunizations to help his patients maintain optimal health. By addressing potential health issues proactively, Dr. Student Name's patients can avoid more serious health problems down the line.</p>
                <h4>Routine Check-Ups</h4>
                <p>Dr. Namwaya recommends that all patients have a routine check-up at least once a year to help maintain good health. During these check-ups, he will perform a physical exam, ask about any symptoms or concerns, and recommend any additional tests or screenings as needed.</p>
                <h4>Screenings</h4>
                <p>Dr. Namwaya offers a range of screenings to help detect potential health problems early, before they become more serious. These screenings may include blood tests, mammograms, colonoscopies, and other tests depending on the patient's age, sex, and medical history.</p>
                <h4>Immunizations</h4>
                <p>Dr. Namwaya provides immunizations to help protect his patients from a range of preventable diseases. These may include vaccinations against the flu, pneumonia, shingles, and other infectious diseases.</p>
                <a href="ContactMe.html" class="book-appointment-btn">Book Appointment</a>
            </div>

            <div class="service">
                <img src="images/service2.jpg" alt="Cardiology" class="service-img">
                <h3>Cardiology</h3>
                <p>Dr. Namwaya is a skilled cardiologist with expertise in diagnosing and treating heart-related conditions such as high blood pressure, heart disease, and arrhythmias. He uses various diagnostic tools and treatment options to offer personalized care that meets his patients' unique needs.</p>
                <h4>Diagnostic Testing</h4>
                <p>Dr. Namwaya may recommend various diagnostic tests to help identify potential heart problems. These may include electrocardiograms (ECGs), echocardiograms, stress tests, and other tests depending on the patient's symptoms and medical history.</p>
                <h4>Treatment Options</h4>
                <p>Dr. Namwaya offers a range of treatment options for heart-related conditions, including lifestyle changes, medications, and non-invasive surgical techniques. He will work with his patients to develop an individualized treatment plan that takes into account their specific symptoms, medical history, and personal preferences.</p>
                <a href="ContactMe.html" class="book-appointment-btn">Book Appointment</a>
            </div>

            <div class="service">
                <img src="images/service3.jpg" alt="Chronic Illness Management" class="service-img">
                <h3>Chronic Illness Management</h3>
                <p>Dr. Namwaya understands that managing a chronic illness can be challenging for patients and their families. He provides comprehensive care to help his patients manage chronic conditions such as diabetes, hypertension, and COPD. He works with his patients to develop individualized treatment plans that help them maintain the best possible quality of life.</p>
                <h4>Treatment Plans</h4>
                <p>Dr. Namwaya will work with his patients to develop personalized treatment plans that may include medications, lifestyle changes, and other therapies. He will also monitor his patients' conditions over time and make adjustments to their treatment plans as needed.</p>
                <h4>Education and Support</h4>
                <p>Dr. Namwaya understands that managing a chronic illness can be overwhelming. He provides education and support to his patients and their families to help them better understand their condition and manage their symptoms. He also collaborates with other healthcare professionals, such as nurses and dietitians, to provide comprehensive care.</p>
                <a href="ContactMe.html" class="book-appointment-btn">Book Appointment</a>
            </div>
            <div class="service">
                <img src="images/service4.jpg" alt="Women's Health" class="service-img">
                <h3>Women's Health</h3>
                <p>Dr. Namwaya offers specialized care for women's health issues, including prenatal care, family planning, and menopause management. He provides compassionate care to help his patients navigate the unique health challenges that women may face throughout their lives.</p>
                <h4>Prenatal Care</h4>
                <p>Dr. Namwaya provides comprehensive prenatal care to help ensure a healthy pregnancy for both mother and baby. He offers routine check-ups, ultrasound imaging, and other tests to monitor the health of the mother and baby throughout pregnancy.</p>
                <h4>Family Planning</h4>
                <p>Dr. Namwaya provides family planning services to help his patients make informed decisions about their reproductive health. These services may include birth control options, fertility counseling, and preconception planning.</p>
                <h4>Menopause Management</h4>
                <p>Dr. Namwaya provides specialized care to help women manage the physical and emotional symptoms of menopause. He offers a range of treatment options, including hormone therapy, lifestyle changes, and other therapies, to help his patients manage their symptoms and maintain good health.</p>
                <a href="ContactMe.html" class="book-appointment-btn">Book Appointment</a>
            </div>
        </div>
    </section>

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

</body>
</html>
