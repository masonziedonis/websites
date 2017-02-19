<!--
    * Author: Mason Ziedonis
    * URL: www.masonziedonis.com
    * Email: mziedonis@berkeley.edu
    * Program Name: Mason Ziedonis's Personal Website
    * Date Started: Jan. 4, 2017
    * Date Last Updated: Feb. 19, 2017
    * Github: https://github.com/masonziedonis/websites/tree/masonziedonis
    *
    * Description: This is the page displaying all of my work and projects, similar to a curriculum vitae.
    *
    * Copyright (C) 2017 Mason Ziedonis
-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta property="og:description" content="Hey, I’m Mason. Here you'll find descriptions and accomplishments from all my work experiences and projects!">
    <title>Work &amp; Projects | Mason Ziedonis</title>
    <meta name="description" lang="en" content="Hey, I’m Mason. Here you'll find descriptions and accomplishments from all my work experiences and projects!">
    <meta name="keywords" lang="en" content="">
    <?php include "./content/head.php";?>
    <link rel="stylesheet" type="text/css" href="./css/jquery.fullPage.css" />
    <script type="text/javascript" src="./js/jquery.fullPage.min.js"></script>
    <script>
        $(document).ready(function() {
            $("#fullpage").fullpage({
                anchors:["mit-dlab-nih-section", "craving-to-quit-section", "peloton-web-design-section", "hector-reyes-house-section", "bedford-va-section", "bats-section", "umass-section"],
                menu: ".side-nav",
                scrollBar: true
            });
        });
    </script>
</head>
    
<body id="page-cv">
    <?php include "./content/header.php";?>
    
    <span id="resume"><a href="./downloads/resume/Mason%20Ziedonis%20Resume%20-%20012417.pdf" title="Download the latest version of my resume" download="Mason Ziedonis Resume - 012417.pdf" target="_blank">Grab a copy of my resume!</a></span>
    
    <ul class="side-nav">
        <li data-menuanchor="mit-dlab-nih-section" class="active"><a href="#mit-dlab-nih-section">MIT D-Lab</a></li>
        <li data-menuanchor="craving-to-quit-section"><a href="#craving-to-quit-section">Claritas MindSciences</a></li>
        <li data-menuanchor="peloton-web-design-section"><a href="#peloton-web-design-section">Peloton</a></li>
        <li data-menuanchor="hector-reyes-house-section"><a href="#hector-reyes-house-section">Hector Reyes House</a></li>
        <li data-menuanchor="bedford-va-section"><a href="#bedford-va-section">Bedford VA</a></li>
        <li data-menuanchor="bats-section"><a href="#bats-section">BATS</a></li>
        <li data-menuanchor="umass-section"><a href="#umass-section">UMass</a></li>
    </ul>
    
<!--
    <select class="side-nav" ONCHANGE="location = this.options[this.selectedIndex].value;"> 
        <option>Scroll Down or Navigate Here</option> 
        <option  value="#mit-dlab-nih">MIT D-Lab</option> 
        <option value="#craving-to-quit">Claritas MindSciences</option>
        <option  value="#peloton-web-design">Peloton</option>
        <option  value="#hector-reyes-house">Hector Reyes House</option>
        <option  value="#bedford-va">Bedford VA</option>
        <option  value="#bats">BATS</option>
        <option  value="#umass">UMass</option>
    </select> 
-->

    <section id="cv">
        <h2 style="display: none">Curriculum Vitae / Resume</h2>
        <div id="fullpage">
            <div class="section" id="mit-dlab-nih">
                <div class="slide" data-anchor="mit-dlab-nih-general">
                    <p class="title">Massachusetts Institute of Technology D-Lab</p>
                    <p class="location">Boston, MA</p> 
                    <p class="time">Summer 2016</p>
                    <p class="roll">Computer Science Intern</p>
                </div>
                <div class="slide" data-anchor="mit-dlab-nih-description">
                    <p class="description">I worked at the Massachusetts Institute of Technology D-Lab during the summer after my freshman year of college. I was supervised by MIT Computer Science faculty, Dr. Richard Fletcher. The National Institute of Health was in need of a mobile application for their study of alcohol’s effect on sleep. The study was designed so that case study participants would live in a research building with an open bar. The goal of our project was to create an app that would alert these participants at custom-specified intervals to stand in front of an infrared camera that was attached to an Android tablet next to the bar. The application would detect when a face was fully in its line-of-sight and then automatically take a picture. Facial recognition frameworks were used to automatically record body temperatures from different parts of the face and store this information for later analysis. This application was programmed in Java.</p>
                </div>
                <div class="slide" data-anchor="mit-dlab-nih-accomplishments">
                    <div class="accomplishments">
                        <span>Accomplishments</span>    
                        <ul>
                            <li>Developed a mobile application for an NIH-funded study of alcohol’s effect on sleep</li>
                            <li>Utilized infrared camera and facial recognition frameworks to automatically record body temperatures from different parts of the face and store this information in a database</li>
                        </ul>
                    </div>
                    <a href="./contact.php" title="Click here to gain access to the code written for this project" class="code" target="_blank">Code</a>
                </div>                
            </div>
            <div class="section" id="craving-to-quit">
                <div class="slide" data-anchor="-general">
                    <p class="title">Claritas MindSciences</p>
                    <p class="location">Shrewsbury, MA</p>
                    <p class="time">Summer 2015</p>
                    <p class="roll">Computer Science Intern</p>
                </div>
                <div class="slide" data-anchor="description">
                    <p class="description">I interned for Claritas MindSciences during the summer before my freshman year of college developing the app <a href="https://www.cravingtoquit.com/" title="Check out Craving to Quit's webpage">Craving to Quit</a>. The application is to designed to help cigarette smokers quit smoking by using mindfulness techniques tested and created at Yale University. My job was to create a hyper-creative atmosphere with fellow developers in order to generate engaging experiences for the end-users. I was able to help boost the app’s rating by working with users who left reviews on the Apple or Google Play store. Common complaints were resolved by improving the checks and balances that made sure relevant content was downloaded on the user’s phone, by ensuring the app’s data wouldn’t get corrupt if the user tried to switch to a different task in the middle of another one, and by creating new pages and functionalities. This application was created with Apache Cordova, or PhoneGap, which is an open source framework for building cross-platform mobile apps using HTML5, JavaScript, and CSS.</p>
                </div>
                <div class="slide" data-anchor="-accomplishments">
                    <div class="accomplishments">
                        <span>Accomplishments</span>    
                        <ul>
                            <li>Designed and delivered new pages for users to navigate content more fluidly and intuitively</li>
                            <li>Resolved user complaints to boost the app’s rating over 0.5 points</li>
                        </ul>
                    </div>
                    <a href="./contact.php" title="Click here to gain access to the code written for this project" class="code" target="_blank">Code</a>
                </div>        
            </div>
            <div class="section" id="peloton-web-design">
                <div class="slide" data-anchor="-general">
                    <p class="title">Peloton Web Design</p>
                    <p class="location">Westborough, MA</p>
                    <p class="time">2013 – 2017</p>
                    <p class="roll">Founder and Owner</p>
                </div>
                <div class="slide" data-anchor="description">
                    <p class="description"><a href="http://pelotonwebdesign.com/" title="Check out Peloton Web Design's webpage">Peloton Web Design</a> is my own web consulting company that I created my sophomore year of high school. I delivered search engine optimization, web design, web development, e-commerce, social media, advertising, and web hosting services. I have helped many small businesses and the large Veterans Affairs Health Care System start and grow their highly sophisticated online presence.</p>
                </div>
                <div class="slide" data-anchor="-accomplishments">
                    <div class="accomplishments">
                        <span>Accomplishments</span>    
                        <ul>
                            <li>Delivered search engine optimization, web development, web design, e-commerce, social media, Google advertising, and web hosting services.</li>
                            <li>Built web services for many small businesses and the Department of Veterans Affairs Health Care System.</li>
                        </ul>
                    </div>
                    <a href="./contact.php" title="Click here to gain access to the code written for this project" class="code" target="_blank">Code</a>
                </div>                
            </div>
            <div class="section" id="hector-reyes-house">
                <div class="slide" data-anchor="-general">
                    <p class="title">Hector Reyes House / Latino American Health Alliance</p>
                    <p class="location">Worcester, MA</p> 
                    <p class="time">2012 - 2015</p>
                    <p class="roll">Computer Science Intern</p>
                </div>
                <div class="slide" data-anchor="description">
                    <p class="description">The Hector Reyes House is a residential substance abuse treatment program for Latino men. The residents usually have either just been released from prison or are attending the program as a substitute for prison. They have many regular appointments outside of the house for physician check-ups and other counseling sessions. Administrators used to give the residents sticky notes to remind them of their appointments. It is difficult to keep track of sticky notes for long periods of time, so residents would often miss or show up late to their appointments. The goal of this project involved both software and hardware challenges. We developed a website, harnessing the database power of Drupal, so that administrators could be able to easily create new users and new appointments to assign to specific users. When an event is created, the resident would get an automatically generated text message to let them know that they have a new appointment. We integrated Voice over Internet Protocol (VoIP) and automated voice generation frameworks so that residents would get an automated personal phone call an hour before each appointment. In addition, the residents were given new identification badges with near field communication (NFC) technology in them. We installed an Android tablet with a NFC tag reader in the lobby of the house. A resident could then scan their ID card and see all of their upcoming appointments mapped out on the screen.</p>
                </div>
                <div class="slide" data-anchor="-accomplishments">
                    <div class="accomplishments">
                        <span>Accomplishments</span>    
                        <ul>
                            <li>Devised IT infrastructure that linked mobile phones and web-based server technology to improve patient scheduling</li>
                            <li>Developed a website for administrators to create new residents and appointments</li>
                            <li>Integrated VoIP and voice generation frameworks to automatically call residents before their appointment</li>
                            <li>Implemented NFC sensors to display scheduling information for a specific resident</li>
                            <li>Supervised by MIT Computer Science faculty, Dr. Richard Fletcher</li>
                        </ul>
                    </div>
                    <a href="./contact.php" title="Click here to gain access to the code written for this project" class="code" target="_blank">Code</a>
                </div>                 
            </div>
            <div class="section" id="bedford-va">
                <div class="slide" data-anchor="-general">
                    <p class="title">Bedford VA Research Corporation</p>
                    <p class="location">Bedford, MA</p> 
                    <p class="time">2012 - 2015</p>
                    <p class="roll">Intern</p>
                </div>
                <div class="slide" data-anchor="-accomplishments">
                    <div class="accomplishments">
                        <span>Accomplishments</span>    
                        <ul>
                            <li>Led a team on developing a website for the Center for Homelessness Amongst Veterans</li>
                            <li>Engaged medical faculty and staff in developing content.</li>
                            <li>Led focus study for research on the use of social media.</li>
                            <li>Developed website with PSA for a National Initiative to Reduce Stigma and Increase Awareness.</li>
                            <li>Ziedonis M. “Accessing Important Resources and New Information at the MISSION Model Website.” In Pinals D, Smelson D et al. <u>MISSION: Criminal Justice System Treatment Manual.</u> 320 [2014].</li>
                        </ul>
                    </div>
                    <a href="./contact.php" title="Click here to gain access to the code written for this project" class="code" target="_blank">Code</a>
                </div>
            </div>
            <div class="section" id="bats">
                <div class="slide" data-anchor="-general">
                    <p class="title">Westborough Basic Arbitrage Trading System</p>
                    <p class="location">Westborough, MA</p>
                    <p class="time">2013 – 2015</p>
                </div>
                <div class="slide" data-anchor="description">
                    <p class="description">This project was created to offer our high school business and investment classes a tool to practice trading in the stock market with no financial risk. Students were able to create new accounts that start with a set amount of money. We used Yahoo’s Finance API to update every account’s projected investment evaluation in real-time. Some applications for this project included seeing which student could come up with the most amount of money at the end of the semester.</p>
                </div>
                <div class="slide" data-anchor="-accomplishments">
                    <div class="accomplishments">
                        <span>Accomplishments</span>    
                        <ul>
                            <li>Co-led a team developing an online mock stock market system for students to gain experience managing stocks.</li>
                            <li>Programmed plug-in to pull real-time stock data for accurate representation of the market.</li>
                        </ul>
                    </div>
                    <a href="./contact.php" title="Click here to gain access to the code written for this project" class="code" target="_blank">Code</a>
                </div>
            </div>
            <div class="section" id="umass">
                <div class="slide" data-anchor="-general">
                    <p class="title">University of Massachusetts Medical School</p>
                    <p class="location">Worcester, MA</p> 
                    <p class="time">2011 – 2015</p>
                    <p class="roll">Intern</p>
                </div>
                <div class="slide" data-anchor="-accomplishments">
                    <div class="accomplishments">
                        <span>Accomplishments</span>    
                        <ul>
                            <li>Evaluated apps and social media strategies to educate patients and connect with their doctors.</li>
                            <li>Implemented new updates for www.umassmed.edu.</li>
                            <li>Created different neuroimaging computations to help with patient care and research.</li>
                        </ul>
                    </div>
                    <a href="./contact.php" title="Click here to gain access to the code written for this project" class="code" target="_blank">Code</a>
                </div>                
            </div>
        </div>
    </section>
    
    <div class="scroll-down"><span class="icon-down-arrow"></span></div>
    
    <?php include "./content/footer.php";?>
    
</body>
</html>
