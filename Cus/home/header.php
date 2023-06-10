<?php
    session_start();
?>

<!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>e-knowledge support center</title>
    <!--
        -favicon
    -->
    <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml">

    <!--
        custom css link
    -->
    <link rel="stylesheet" href="home.css">
    

    <!--
        google font link(input markdown)
    -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&family=Source+Sans+Pro:wght@600;700&display=swap"
      rel="stylesheet">


      <!--Start of Tawk.to Script-->
    <script type="text/javascript">
    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
    var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
    s1.async=true;
    s1.src='https://embed.tawk.to/646ed12bad80445890eef62f/1h18e255r';
    s1.charset='UTF-8';
    s1.setAttribute('crossorigin','*');
    s0.parentNode.insertBefore(s1,s0);
    })();
    </script>
    <!--End of Tawk.to Script-->


 </head>
 <body>
    
    <!--
        #Header
    -->
    <header class="header">
        <div class="container">

            <div class="overlay" data-overlay></div>

            <a href="#">
                <h1 class="logo">eKnowledge</h1>
            </a>

            <nav class="navbar" data-navbar>
                <div class="navbar-top">
                    <a href="#" class="logo">e-knolage</a>

                    <button class="nav-close-btn" aria-label="close Menu" data-nav-close-btn>
                        <ion-icon name="close-outline"></ion-icon>
                    </button>
                </div>

                <ul class="navbar-list">
                    <li class="navbar-item">
                        <a href="#home" class="navbar-link" data-navbar-link>Home</a>
                    </li>

                    <li class="navbar-item">
                        <a href="#about" class="navbar-link" data-navbar-link>About</a>
                    </li>

                    <li class="navbar-item">
                        <a href="#services" class="navbar-link" data-navbar-link>Services</a>
                    </li>

                    <li class="navbar-item">
                        <a href="#contactus" class="navbar-link" data-navbar-link>Contact Us</a>
                    </li>
                </ul>

            </nav>

            <a href="../home/login.php" class="btn">
                <ion-icon name="chevron-forward-outline" aria-hidden="true"></ion-icon>

                <span>login</span>
            </a>

            <button class="nav-open-btn" aria-label="Open Menu" data-nav-open-btn>
                <ion-icon name="menu-outline"></ion-icon>

            </button>

        </div>
    </header>