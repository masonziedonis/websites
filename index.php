<!--
    * Author: Mason Ziedonis
    * URL: www.masonziedonis.com
    * Email: mziedonis@berkeley.edu
    * Program Name: Mason Ziedonis's Personal Website
    * Date Started: Jan. 4, 2017
    * Date Last Updated: Feb. 19, 2017
    * Github: https://github.com/masonziedonis/websites/tree/masonziedonis
    *
    * Description: This is the landing page and about me page for my personal website.
    *
    * Copyright (C) 2017 Mason Ziedonis
-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta property="og:description" content="Hey, I’m Mason! As a 2nd-year at UC-Berkeley, I have a passion for creating innovative things as intuitively and user-friendly as possible. Come find out more!">
    <title>Mason Ziedonis</title>
    <meta name="description" lang="en" content="Hey, I’m Mason! As a 2nd-year at UC-Berkeley, I have a passion for creating innovative things as intuitively and user-friendly as possible. Come find out more!">
    <?php include "./content/head.php";?>
</head>
    
<body id="page-home">
    <?php include "./content/header.php";?>
       
    <section id="home">
        
        <h2 id="webpage-title">
            <span>Mason</span>
            <span>Ziedonis</span>    
        </h2>

        <h2 class="tagline">Software Engineer</h2>
        <h2 class="tagline">Entrepreneur</h2>
        <h2 class="tagline">Innovator</h2>    

    </section>
        
    <section id="about">
        
        <div>
            
            <h2 style="display: none">About Me</h2>
    
            <p>
                Hey! I’m Mason.
            </p>
            <p>
                I have a passion for creating innovative things as intuitively and user-friendly as possible. No day goes by without conceiving a new algorithm, idea, or implementation for current and future projects alike. It does not suit me to blend in with the rest of the crowd – I work on ideas that I know can help more people than just myself.
            </p>
            
        </div>
        
        <div class="picture-break" id="about-me-in-snow">
            <p class="icon icon-calendar" id="current-age">20 years old</p>
            <p class="icon icon-mortar-board">2nd-year Computer Science Major at UC-Berkeley</p>
            <p class="icon icon-location">Berkeley, CA</p>
            <p class="icon icon-mobile">508 - 439 - 3919</p>
            <p class="icon icon-mail-read"><a href="./contact.php" title="Contact me!" target="_blank">mziedonis (at) berkeley (dot) edu</a></p>
        </div>
        
        <div>
            
            <p>
               I am currently a sophomore at the University of California, Berkeley where I am pursuing a degree in computer science. How did I begin down this path? Well, I have always been a curious thinker, enthusiastic learner, and a highly-motivated individual. I attended multiple computer science summer camps during my middle school and high school studies. Doing what almost all adolescents love to do, I started my education with game development (<a href="https://www.unrealengine.com/what-is-unreal-engine-4" title="Unreal Engine 4">Unreal Engine</a>). Though fun, I soon learned that I would not get far as a middle schooler - without any knowledge of computer science fundamentals - trying to create blockbuster computer games by myself.
            </p>
            <p>
                I then hopped over to <a href="http://referrals.trhou.se/masonz" title="Learn everything you need to learn at Team Treehouse">Team Treehouse</a> to learn languages that I could write and release finished products with all by myself – HTML, CSS, and JavaScript. I started to reach out to local small businesses who had outdated websites or no online presence at all. Learning how to pitch my service, work with the ever-changing needs of my clients, and launch products for happy business owners - all as a high schooler - was a process that was very rewarding to me both emotionally and professionally.
            </p>
            <p>
                Through my good work and fast growing network, I began to acquire more and more opportunities to challenge my technical skills; almost every project resulted in a referral to a colleague who was either in need of my help or who was willing to mentor me throughout a project. Please visit my <a href="./cv.php" title="Check out my work and projects">work and projects page</a> to read full descriptions of everything I have worked on.
            </p>             
            <p>
                These extracurricular activities helped me acquire adept interpersonal, leadership, and technical skills that continue to grow stronger every day. I would love to hear from you! If you would like to connect for any reason at all, please send me a message on any of my social media accounts or on my <a href="./contact.php" title="Send me a message!">contact page</a>. 
            </p>
        
        </div>
        
    </section>
    
    <?php include "./content/footer.php";?>
    
</body>
</html>
