<?php 
    include_once 'inc/dbh.php';
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link rel="stylesheet" href="css/style.css?v=<?php echo time(); ?>">
        <title>Portfolio</title>
        <link rel="icon" type="image/png" href="imgs/favicons/favicon.ico">
    </head>
    <body>
        <nav>
            <div class="main-nav">
                <a href="index.html"><h1 class="intials">JH</h1>
                <div class="border-line">
                </div>
                <div>
                    <ul class="navigation">
                        <li><a href="about.html">About me</a></li>
                        <li><a href="#card-link">My Portfolio</a></li>
                        <li><a href="coding.html">Coding Examples</a></li>
                        <li><a href="scs.html">SCS Software</a></li>
                        <li><a href="#link">Contact Me</a></li>
                    </ul>
                </div>
            </div>
            <div class="social-media">
                <span><a href="https://github.com/JordanHicklingNetMatters" target="_blank"><i class="github fa-brands fa-github"></i></a></span>
                <span><a href="https://www.linkedin.com/in/jordan-hickling-6567a9215/" target="_blank"><i class="linkedin fa-brands fa-linkedin"></i></a></span>  <!-- Social media Font Awsome logos. -->
            </div>
        </nav>  
        <div class="sidebar-navigation">
            <button class="close-btn"><i class="fa-solid fa-xmark"></i></button>
                <li><a href="index.html"><h1 class="sidebar-initials">JH</h1></a></li>
                <div class="navigation-seperator"></div>
                <li><a href="about.html">About me</a></li>
                <div class="navigation-seperator"></div>
                <li><a href="index.html#card-link">My Portfolio</a></li>
                <div class="navigation-seperator"></div>
                <li><a href="coding.html">Coding Examples</a></li>
                <div class="navigation-seperator"></div>
                <li><a href="scs.html">SCS Software</a></li>
                <div class="navigation-seperator"></div>
                <li><a href="index.html#link">Contact Me</a></li>
                <div class="navigation-seperator"></div>
                <div class="social-media">
                    <span><a href="https://github.com/JordanHicklingNetMatters" target="_blank"><i class="sidebar-github fa-brands fa-github"></i></a></span>
                    <span><a href="https://www.linkedin.com/in/jordan-hickling-6567a9215/" target="_blank"><i class="sidebar-linkedin fa-brands fa-linkedin"></i></a></span>  <!-- Social media Font Awsome logos. -->
                </div><!-- Social media Font Awsome logos. -->
        </div> 
            <div id="banner"> <!-- This is the start of the banner section -->
                <button class="hamburger-btn xs"><i class="hamburger-logo fa-solid fa-bars"></i></button>  
                <div class="banner-content">
                    <h1 id="typewriter">My Name is Jordan Hickling</h1>
                    <p id="p-typewriter">I'm a Web Developer</p>
                    <a href="#card-link"><span>Scroll Down<br>
                        <br>
                        <span id="down-arrow"><i class="fa-solid fa-arrow-down"></i></span>
                    </span></a>
                </div>
            </div> <!-- This is the end of the banner section -->
        <div class="container">
            <div class="project-heading">
                <h2 id="card-link">My Projects</h2>
            </div>
            <div class="cards">
                <div class="card-one">
                    <a href="http://netmatters.jordan-hickling.netmatters-scs.co.uk/" target="_blank">
                        <img src="imgs/netmatters-page.jpg" alt="A picture of a project">
                    <div class="project-information">
                        <strong id="header-without-hover">Netmatters</strong>
                        <strong id="header-whilst-hovering">HTML/CSS/JS</strong>
                        <br>
                        view project <span><i class="fa-solid fa-eye"></i></span>
                    </div>
                </a>
                </div>
                <div class="card-two">
                    <img src="imgs/projects.png" alt="A picture of a project">
                    <div class="project-information">
                        <strong>Name Of Project</strong>
                        <br>
                        view project <span><i class="fa-solid fa-eye"></i></span>
                    </div>
                </div>
                <div class="card-three">
                    <img src="imgs/projects.png" alt="A picture of a project">
                    <div class="project-information">
                        <strong>Name Of Project</strong>
                        <br>
                        view project <span><i class="fa-solid fa-eye"></i></span>
                    </div>
                </div>
                <div class="card-four">
                    <img src="imgs/projects.png" alt="A picture of a project">
                    <div class="project-information">
                        <strong>Name Of Project</strong>
                        <br>
                        view project <span><i class="fa-solid fa-eye"></i></span>
                    </div>
                </div>
                <div class="card-five">
                    <img src="imgs/projects.png" alt="A picture of a project">
                    <div class="project-information">
                        <strong>Name Of Project</strong>
                        <br>
                        view project <span><i class="fa-solid fa-eye"></i></span>
                    </div>
                </div>
                <div class="card-six">
                    <img src="imgs/projects.png" alt="A picture of a project">
                    <div class="project-information">
                        <strong>Name Of Project</strong>
                        <br>
                        view project <span><i class="fa-solid fa-eye"></i></span>
                    </div>
                </div>
            </div>
        </div>
        <div id="popup-container">
            <p id="success-popup">You have successfully sent the form!</p>
            <button id="close-popup-button" type="button">x</button>
        </div>
            <div class="get-in-touch">
                <div id="link"></div>
                    <div class="contact-text">
                        <h2>Get In Touch</h2>
                        <p>If you would like to know more about me, any projects I am working on or have any comments/questions on my work please contact below:</p>
                        <span class="phone-span"><i class="phone fa-solid fa-phone"></i><a href="tel:07565 646669"> 07565 646669 </a></span>
                        <br>
                        <span class="envelope-span"><i class="envelope fa-solid fa-envelope"></i><a href="mailto:jordanhickling2000@gmail.com?subject=subject text">jordanhickling2000@gmail.com</a></span>
                        <p>Alternatively, you can contact me by completing the form.</p>
                    </div>
                        <div class="form">
                            <form id="contact-form" action="inc/contactForm.php" method="POST">
                                <div class="name">
                                    <input type="text" id="fname" name="fname" placeholder="First Name:" >
                                    <input type="text" id="sname" name="sname" placeholder="Last Name:" >
                                </div>
                                <p id="warning-form-fname"><span><i class="form-cross fa-sharp fa-solid fa-circle-xmark"></i> Please put in your first name! </span></p>
                                <p id="warning-form-sname"><span><i class="form-cross fa-sharp fa-solid fa-circle-xmark"></i> Please put in your last name! </span></p>


                                <input type="email" id="email" name="email" placeholder="Email:" >
                                <p id="warning-form-email"><span><br><i class="form-cross fa-sharp fa-solid fa-circle-xmark"></i> Please put in your email! </span></p>
                                <p id="warning-form-regex"><span><br><i class="form-cross fa-sharp fa-solid fa-circle-xmark"></i> Please make sure you are using the correct email! </span></p>
                                
                                
                                
                                <input type="text" id="subject" name="subject" placeholder="Subject:" >
                                <p id="warning-form-subject"><span><br><i class="form-cross fa-sharp fa-solid fa-circle-xmark"></i> Please make sure you enter a subject! </span></p>

                                
                                <textarea type="text" id="message" name="message" placeholder="Message:"></textarea>
                                <p id="warning-form-message"><span><br><i class="form-cross fa-sharp fa-solid fa-circle-xmark"></i> Please put in a message! </span></p>
                                <br><button class="submit-btn" type="submit" name="submit">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
                <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
                <script src="https://kit.fontawesome.com/fc2f3a0d11.js" crossorigin="anonymous"></script>
                <script src="js/index.js"></script> 
                <script src="js/main.js"></script>
            </body>
        </html>