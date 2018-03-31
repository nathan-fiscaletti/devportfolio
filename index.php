<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Nathan Fiscaletti</title>
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
	<link rel="icon" href="favicon.ico" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
    <link rel="stylesheet" href="libs/font-awesome/css/font-awesome.min.css">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">
</head>

<body>
    <div id="mobile-menu-open" class="shadow-large">
        <i class="fa fa-bars" aria-hidden="true"></i>
    </div>
    <!-- End #mobile-menu-toggle -->
    <header>
        <div id="mobile-menu-close">
            <span>Close</span> <i class="fa fa-times" aria-hidden="true"></i>
        </div>
        <ul id="menu" class="shadow">
            <li>
                <a href="#about">About</a>
            </li>
            <li>
                <a href="#experience">Experience</a>
            </li>
            <!--
            <li>
                <a href="#education">Education</a>
            </li>
            -->
            <li>
                <a href="#projects">Projects</a>
            </li>
            <li>
                <a href="#skills">Skills</a>
            </li>
            <li>
                <a href="#contact">Contact</a>
            </li>
        </ul>
    </header>
    <!-- End header -->

    <div id="lead">
        <div id="lead-content">
            <img src='./images/me.jpg' style='width: 256px;height: 256px;border-radius: 256px;margin-bottom: 100px;'/>
            <h1>Nathan Fiscaletti</h1>
            <h2>Software Engineer</h2>
            <a href="./downloads/Nathan-Fiscaleti-Resume-10.25.17.pdf" download="Nathan-Fiscaleti-Resume-10.25.17.pdf" class="btn-rounded-white" style='margin-top: 75px;'>Download Resume</a>
        </div>
        <!-- End #lead-content -->

        <div id="lead-overlay"></div>

        <div id="lead-down">
            <span>
                <i class="fa fa-chevron-down" aria-hidden="true"></i>
            </span>
        </div>
        <!-- End #lead-down -->
    </div>
    <!-- End #lead -->

    <div id="about">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h2 class="heading">About Me</h2>
                </div>
                <div class="col-md-8">
                    <p>
                        With eight years of professional experience, I am a highly motivated and fast learning Software Development Engineer. I have played an active role in the development of numerous applications including games, stand-alone applications and development libraries primarily in C#, Java, Objective C and PHP, but am always eager to expand my skill set into new and unfamiliar areas.
                    </p>
                    <br />
                    <p style='color: red;'>
                        I am not currently looking for work.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- End #about -->

    <div id="experience" class="background-alt">
        <h2 class="heading">Recent Experience</h2>
        <div id="experience-timeline">
            <div data-date="August 2016 – Present">
                <h3>Cyber Security Startup (Stealth)</h3>
                <h4>Software Engineer</h4>
                <p>
                    <ul>
                        <li>Engineered software relevant to VPN technologies applicable to IOT.</li>
                        <li>Engineered solutions for a global backbone infrastructure.</li>
                        <li>Primary developer for iOS, Android, .NET, and OSX.</li>
                    </ul>
                </p>
            </div>

            <div data-date="March 2016 - August 2016">
                <h3>StackPath / Staminus</h3>
                <h4>Software Developer</h4>
                <p>
                    <ul>
                        <li>Developed and maintained software relevant to DDOS Mitigation.</li>
                        <li>Installed, maintained and serviced data center level hardware.</li>
                    </ul>
                </p>
            </div>

            <div data-date="May 2015 - March 2016">
                <h3>Positive Technologies, Inc.</h3>
                <h4>Software Developer / Field Technician</h4>
                <p>
                    <ul>
                        <li>Developed software for Restaurant Manager back office system.</li>
                        <li>Installed and maintained multi-station Point Of Sale systems and networks.</li>
                        <li>Handled over-the-phone tech support for hundreds of clients.</li>
                    </ul>
                </p>
            </div>
        </div>
    </div>
    <!-- End #experience -->
    <!--
    <div id="education">
        <h2 class="heading">Education</h2>
        <div class="education-block">
            <h3>University of Ottawa</h3>
            <span class="education-date">Sept 2016 - Sept 2017</span>
            <h4>Bachelor of Science in Computer Science</h4>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur in iaculis ex. Etiam volutpat laoreet urna. Morbi ut tortor nec nulla commodo malesuada sit amet vel lacus. Fusce eget efficitur libero. Morbi dapibus porta quam laoreet placerat.
            </p>
        </div>
        <!-- End .education-block

        <div class="education-block">
            <h3>University of Ottawa</h3>
            <span class="education-date">Sept 2016 - Sept 2017</span>
            <h4>Bachelor of Science in Computer Science</h4>
            <ul>
                <li>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                </li>
                <li>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                </li>
                <li>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                </li>
            </ul>
        </div>
        <!-- End .education-block -->
    </div>
    <!-- End #education -->

    <div id="projects" class="background-alt">
        <h2 class="heading">Projects</h2>
        <div class="container">
            <div class="row">
                <?php  

                $projects = include_once 'project_list.php';

                $first_project = $projects[0];
                $second_project = $projects[1];

                ?>
                <div class="project shadow-large">
                    <div class="project-image">
                        <img src="<?php echo $first_project['image']; ?>" width="300" height="300" />
                    </div>
                    <!-- End .project-image -->
                    <div class="project-info">
                        <h3><?php echo $first_project['name']; ?></h3>
                        <p>
                            <?php echo $first_project['description']; ?>
                        </p>
                        <a href="<?php echo $first_project['http']; ?>" target="_blank">View Project</a>
                    </div>
                    <!-- End .project-info -->
                </div>
                <!-- End .project -->

                <div class="project shadow-large">
                    <div class="project-image">
                        <img src="<?php echo $second_project['image']; ?>" width="300" height="300" />
                    </div>
                    <!-- End .project-image -->
                    <div class="project-info">
                        <h3><?php echo $second_project['name']; ?></h3>
                        <p>
                            <?php echo $second_project['description']; ?>
                        </p>
                        <a href="<?php echo $second_project['http']; ?>" target="_blank">View Project</a>
                    </div>
                    <!-- End .project-info -->
                </div>
                <!-- End .project -->

                <span id='show-more-projects'>
                    <a onclick='document.getElementById("hidden-projects").style.display = "block";document.getElementById("show-more-projects").style.display = "none";'>Show More</a>
                </span> 

                <span id='hidden-projects' style='display: none;'>
                <?php

                for ($i=2;$i<count($projects);$i++) {
                    $project = $projects[$i];
                    ?>
                    <div class="project shadow-large">
                        <div class="project-image">
                            <img src="<?php echo $project['image']; ?>" width="300" height="300" />
                        </div>
                        <!-- End .project-image -->
                        <div class="project-info">
                            <h3><?php echo $project['name']; ?></h3>
                            <p>
                                <?php echo $project['description']; ?>
                            </p>
                            <a href="<?php echo $project['http']; ?>" target="_blank">View Project</a>
                        </div>
                        <!-- End .project-info -->
                    </div>
                    <!-- End .project -->
                    <?php
                }

                ?>
                <a onclick='document.getElementById("hidden-projects").style.display = "none";document.getElementById("show-more-projects").style.display = "block";document.getElementById("projects").scrollIntoView();'>Hide</a>
                </span>
            </div>
        </div>
    </div>
    <!-- End #projects -->

    <div id="skills">
        <h2 class="heading">Skills</h2>
        <ul>
            <li>PHP</li>
            <li>JavaScript</li>
            <li>Node.js</li>
            <li>jQuery</li>
            <li>AJAX</li>
            <li>Vagrant</li>
            <li>Docker</li>
            <li>Ansible</li>
            <li>Java / AWT</li>
            <li>C</li>
            <li>C#</li>
            <li>VB.NET</li>
            <li>Swift</li>
            <li>Objective-C</li>
            <li>Android Studio</li>
            <li>Laravel / Lumen</li>
            <li>Composer</li>
            <li>Unity 3D</li>
            <li>Unreal Engine 4</li>
        </ul>
    </div>
    <!-- End #skills -->

    <div id="contact">
        <h2>Get in Touch</h2>
        <div id="contact-form">
            <form method="POST" action="https://formspree.io/fisc510@gmail.com">
                <input type="hidden" name="_subject" value="Contact request from personal website" />
                <input type="email" name="_replyto" placeholder="Your email" required>
                <textarea name="message" placeholder="Your message" required></textarea>
                <button type="submit">Send</button>
            </form>
        </div>
        <!-- End #contact-form -->
    </div>
    <!-- End #contact -->

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-sm-5 copyright">
                    <p>
                        Copyright &copy; 2018 Nathan Fiscaletti
                    </p>
                </div>
                <div class="col-sm-2 top">
                    <span id="to-top">
                        <i class="fa fa-chevron-up" aria-hidden="true"></i>
                    </span>
                </div>
                <div class="col-sm-5 social">
                    <ul>
                        <li>
                            <a href="http://git.nathanf.tk/" target="_blank"><i class="fa fa-github" aria-hidden="true"></i></a>
                        </li>
                        <li>
                            <a href="http://www.linkedin.com/in/nathan-fiscaletti/" target="_blank"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a>
                        </li>
                        <!--
                        <li>
                            <a href="https://stackoverflow.com/" target="_blank"><i class="fa fa-stack-overflow" aria-hidden="true"></i></a>
                        </li>
                        <li>
                            <a href="https://www.facebook.com/" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                        </li>
                        <li>
                            <a href="https://twitter.com/" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                        </li>
                        <li>
                            <a href="https://plus.google.com/" target="_blank"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                        </li>
                        -->
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <!-- End footer -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/scripts.min.js"></script>
</body>

</html>
