<!--
    * Author: Mason Ziedonis
    * URL: www.masonziedonis.com
    * Email: mziedonis@berkeley.edu
    * Program Name: Mason Ziedonis's Personal Website
    * Date Started: Jan. 4, 2017
    * Date Last Updated: Feb. 19, 2017
    * Github: https://github.com/masonziedonis/websites/tree/masonziedonis
    *
    * Description: This is a contact page to send a direct message to my email via a form.
    *
    * Copyright (C) 2017 Mason Ziedonis
-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta property="og:description" content="Hey, I’m Mason! This is the place to go for contacting me directly. I look forward to hearing from you!">
    <title>Contact | Mason Ziedonis</title>
    <meta name="description" lang="en" content="Hey, I’m Mason! This is the place to go for contacting me directly. I look forward to hearing from you!">
    <meta name="keywords" lang="en" content="">
    <?php include "./content/head.php";?>
    <script>
        <?php
        $name = $_POST["name"];
        $email = $_POST["email"];
        $phone = $_POST["phone"];
        $message = $_POST["message"];
        $from = "From: MasonZiedonis.com"; 
        $to = "masonziedonis@gmail.com"; 
        $subject = "*New Message* from MasonZiedonis.com";

        $body = "From: $name\nE-Mail: $email\nPhone: $phone\nMessage: $message";

        if ($_POST["submit"]) {                 
            if (mail ($to, $subject, $body, $from)) { 
                echo("Your message has been sent!");
            } else { 
                echo("Something went wrong, please go back and try again!");  
            }
        }
        ?>
	</script>
</head>
    
<body id="page-contact">
    <?php include "./content/header.php";?>
       
    <section id="contact">
        <h2 class="title">Let's connect!</h2>
        <form method="post" action="contact.php">    
            <label>Name<sup>*</sup></label>
            <input name="name" placeholder="First Last">

            <label>Email<sup>*</sup></label>
            <input name="email" type="email" placeholder="example@website.com">

            <label>Phone</label>
            <input name="phone" type="tel" placeholder="### - ### - ####">

            <label>What's up?<sup>*</sup></label>
            <textarea name="message" placeholder="Message"></textarea>

            <input id="submit" name="submit" type="submit" value="Send!">            
        </form>
        <div class="social-media-container">
            <p>Don't forget to be social!</p>
            <a href="https://www.linkedin.com/in/masonziedonis" title="Check out my LinkedIn profile" target="_blank"><span class="icon-linkedin-circular"></span></a>
            <a href="https://github.com/masonziedonis" title="Check out my GitHub profile" target="_blank"><span class="icon-github-circular"></span></a>
            <a href="https://www.facebook.com/masonziedonis" title="Check out my Facebook profile" target="_blank"><span class="icon-facebook-circular"></span></a>
            <a href="https://twitter.com/masonziedonis" title="Check out my Twitter profile" target="_blank"><span class="icon-twitter-circular"></span></a>
            <a href="https://www.instagram.com/masonziedonis/" title="Check out my Instagram profile" target="_blank"><span class="icon-instagram-circular"></span></a>
            <a href="https://soundcloud.com/brohesive" title="Check out my SoundCloud profile" target="_blank"><span class="icon-soundcloud"></span></a>
        </div>
    </section>
    
    <?php include "./content/footer.php";?>
    
</body>
</html>
