<?php
include_once 'header.php';

?>


    <main>
        <article>
            <!--hero-->
            <section class="hero" id="home">
                <div class="container">

                    <div class="hero-content">

                        <p class="hero-subtitle">Welcome to e-Knowledge Customer Service</p>
                        <h2 class="h2 hero-title">Hello! <?php
                        if (isset($_SESSION["username"])){
                            echo $_SESSION["username"] . ' !';
                        }else{
                            echo $_SESSION["username"] . ' !';
                        }
                        
                        ?> </h2>
                        <h2 class="h2 hero-title">What would you like help with today? </h2>
                        <p class="hero-text">
                            <h1>You can quickly take care of most things here, or connect with us when needed.</h1>
                        </p>
                        <br>
                        <button class="btn">e-Knowledge Student Support</button>
                    </div>

                    <figure class="hero-banner">
                        <img src="../images/customer sup new.png" width="694" height="529" loading="lazy" alt="hero-banner" class="w-100 banner-animation">
                    </figure>

                </div>
            </section>

            <!--about-->
            <section class="section about" id="about">
                <div class="container">
                    <figure class="about-banner">
                        <img src="../images/customer support.png" loading="lazy" alt="about banner" class="w-100 banner-animation">
                    </figure>

                    <div class="about-content">

                        <h2 class="h2 section-title underline">Our Service</h2>

                        <p class="about-text">At e-Knowledge Education Center</p>

                        <p class="about-text"> you will find exceptional academic mentoring, accommodations and services for students of all abilities, and people who care about your social and emotional well-being as much as your academic success. <br><br> The services and resources we provide are available from the first day of freshman through every level of graduate study.</p>

                        <ul class="stats-list">
                            <li class="stats-card">
                                <p class="h3 stats-title">9875</p>
                                <p class="stats-text">Satisfied Students</p>
                            </li>

                            <li class="stats-card">
                                <p class="h3 stats-title">7894</p>
                                <p class="stats-text">Project Lunched</p>
                            </li>

                            <li class="stats-card">
                                <p class="h3 stats-title">65</p>
                                <p class="stats-text">Years Completed</p>
                            </li>
                            
                        </ul>   

                    </div>
                </div>
            </section>

            <!--Service-->
            <section class="section service" id="services">
                <div class="container">
                    <h2 class="h2 section-title underline">Our Speciallization</h2>
                    <ul class="service-list">
                        <li>
                            <div class="service-card">
                                <div class="card-icon">
                                    <ion-icon name="telescope-outline"></ion-icon>
                                </div>

                                <h3 class="h3 title">Academic Specializations</h3>

                                <p class="text">
                                    Within the field of Computer Science: Artificial Intelligence, Data Science, Software Engineering, Cybersecurity.
                                    In Psychology: Clinical Psychology, Developmental Psychology, Cognitive Neuroscience, Industrial-Organizational Psychology.
                                    In Business Administration: Finance, Marketing, Human Resources, Entrepreneurship, International Business.
                                    .
                                </p>

                                <button class="card-btn" aria-label="Show More">
                                    <ion-icon name="chevron-forward-outline"></ion-icon>
                                </button>
                            </div>
                        </li>

                        <li>
                            <div class="service-card">
                                <div class="card-icon">
                                    <ion-icon name="desktop-outline"></ion-icon>
                                </div>

                                <h3 class="h3 title">Professional Specializations</h3>

                                <p class="text">
                                    Within the field of Medicine: Cardiology, Dermatology, Orthopedics, Pediatrics, Neurology.
                                    In Law: Criminal Law, Corporate Law, Intellectual Property Law, Environmental Law, Family Law.
                                    In Education: Special Education, Curriculum Development, Educational Leadership, Early Childhood Education.
                                </p>

                                <button class="card-btn" aria-label="Show More">
                                    <ion-icon name="chevron-forward-outline"></ion-icon>
                                </button>
                            </div>
                        </li>


                        <li>
                            <div class="service-card">
                                <div class="card-icon">
                                    <ion-icon name="globe-outline"></ion-icon>
                                </div>

                                <h3 class="h3 title">Vocational Specializations</h3>

                                <p class="text">
                                    Within the field of Culinary Arts: Pastry and Baking, Culinary Management, International Cuisine, Food Photography.
                                    In Automotive Technology: Engine Repair, Collision Repair, Automotive Electronics, Hybrid and Electric Vehicles.
                                    In Graphic Design: User Interface Design, Branding and Identity, Motion Graphics, Web Design.
                                </p>

                                <button class="card-btn" aria-label="Show More">
                                    <ion-icon name="chevron-forward-outline"></ion-icon>
                                </button>
                            </div>
                        </li>
                        
                    </ul>
                
                </div>
            </section>

        </article>

    </main>

<?php 
    include_once 'footer.php';
?>
   