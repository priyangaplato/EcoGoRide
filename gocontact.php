
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EcoGo Contact</title>
    <link rel="stylesheet" href="ss.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">

  </head>
  <body>

 
<div class="navbar">
            <img src="images/logo.png" class="logo">
            <nav>
                <ul>
                <li><a href="logout.php"> LOGOUT </a></li>
                
                <li><a class="active" href ="#gocontact">CONTACT</a></li>
                     <li><a  href ="About.php">ABOUT</a></li>                
                      
                          <li><a href ="Daily-Rentals.php">DAILY RENTALS</a></li>    
                    <li><a  href ="Home.php">HOME</a></li>
                </ul>
            </nav>
        </div>

    <!--contact section start-->
    <div class="contact-section">
      <div class="contact-info">
        <div><i class="fas fa-map-marker-alt"></i>Madurai, India</div>
        <div><i class="fas fa-envelope"></i>EcoGoRide@email.com</div>
        <div><i class="fas fa-phone"></i>+91 9124 911 234</div>
        <div><i class="fas fa-clock"></i>Mon - Sat 9:00 AM to 6:00 PM</div>
      </div>
      <div class="contact-form">
        <h2>Contact Us</h2>
        <form class="contact" action="contact_live.php" method="post">
          <input type="text" name="name" class="text-box" placeholder="Your Name" required>
          <input type="email" name="email" class="text-box" placeholder="Your Email" required>
          <textarea name="message" rows="5" placeholder="Your Message" required></textarea>
          <input type="submit" name="submit" class="send-btn" value="Send">
        </form>
      </div>
    </div>
    <!--contact section end-->
    <script type="text/javascript">
    if(window.history.replaceState){
      window.history.replaceState(null, null, window.location.href("sendemail.php"));
     
    }
    </script>

  </body>
</html>