<?php
require("php/message.php");
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://fonts.googleapis.com/css?family=Fira+Sans:200,300,400,500"
      rel="stylesheet"
    />
    
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/icon?family=Material+Icons"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
    />
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
    <link href="css/styles.css" rel="stylesheet" />
    <title>Cupertino CSF</title>
  </head>
  <body>
    <header>
      <section class="navigation">
        <div class="nav-container">
          <div class="brand">
            <img
              class="official-logo"
              src="images/csf-official-logo.png"
              alt="logo"
              width="50"
              height="50"
            />
          </div>
          <div class="brand">
            <a href="home.html">CUPERTINO CSF</a>
          </div>
          <nav>
            <div class="nav-mobile">
              <a id="nav-toggle" href="#!"><span></span></a>
            </div>
            <ul class="nav-list">
              <li><a href="home.html">Home</a></li>
              <li><a href="member.html">Membership</a></li>
              <li>
                <a href="events.html">Events</a>
                <!-- <ul class="nav-dropdown">
                        <li><a href="#!">Web Design</a></li>
                        <li><a href="#!">Web Development</a></li>
                        <li><a href="#!">Graphic Design</a></li>
                      </ul> -->
              </li>
              <li><a href="credits.html">Credits</a></li>
              <li><a href="officers.html">Officers</a></li>
              <li>
                <a href="contact.html" href="#"><button>Contact Us</button></a>
              </li>
            </ul>
          </nav>
        </div>
      </section>
    </header>
    <form role="form" id="contactForm" class="contact-form" data-toggle="validator" class="shake">
        <div class="form-group">
          <div class="controls">
            <input type="text" id="name" class="form-control" placeholder="Name" required data-error="Please enter your name">
            <div class="help-block with-errors"></div>
          </div>
        </div>
        <div class="form-group">
          <div class="controls">
            <input type="email" class="email form-control" id="email" placeholder="Email" required data-error="Please enter your email">
            <div class="help-block with-errors"></div>
          </div>
        </div>
        <div class="form-group">
          <div class="controls">
            <input type="text" id="msg_subject" class="form-control" placeholder="Subject" required data-error="Please enter your message subject">
            <div class="help-block with-errors"></div>
          </div>
        </div>
        <div class="form-group">
          <div class="controls">
            <textarea id="message" rows="7" placeholder="Massage" class="form-control" required data-error="Write your message"></textarea>
            <div class="help-block with-errors"></div>
          </div>  
        </div>
      
        <button type="submit" id="submit" class="btn btn-effect"><i class="fa fa-check"></i> Send Message</button>
        <div id="msgSubmit" class="h3 text-center hidden"></div> 
        <div class="clearfix"></div>   
      
      </form>     
    <!-- <div class="wrapper">
        <header>Send us a Message</header>
        <form action="#">
          <div class="dbl-field">
            <div class="field">
              <input type="text" name="name" placeholder="Enter your name">
              <i class='fas fa-user'></i>
            </div>
            <div class="field">
              <input type="text" name="email" placeholder="Enter your email">
              <i class='fas fa-envelope'></i>
            </div>
          </div>
          <div class="dbl-field">
            <div class="field">
              <input type="text" name="phone" placeholder="Enter your phone">
              <i class='fas fa-phone-alt'></i>
            </div>
            <div class="field">
              <input type="text" name="website" placeholder="Enter your website">
              <i class='fas fa-globe'></i>
            </div>
          </div>
          <div class="message">
            <textarea placeholder="Write your message" name="message"></textarea>
            <i class="material-icons">message</i>
          </div>
          <div class="button-area">
            <button type="submit">Send Message</button>
            <span></span>
          </div>
        </form>
      </div> -->
    <footer>
      <div class="footer-content">
        <p>
          <a href="mailto: info.tinocsf@gmail.com" rel="noopener noreferrer"
            >info.tinocsf@gmail.com</a
          >
        </p>
        <ul class="socials">
          <li>
            <a
              href="https://www.facebook.com/CupertinoCSF"
              target="_blank"
              rel="noopener noreferrer"
              class="fa fa-facebook"
            ></a>
          </li>
          <li>
            <a
              href="https://www.instagram.com/tinocsf/"
              target="_blank"
              rel="noopener noreferrer"
              class="fa fa-instagram"
            ></a>
          </li>
          <li>
            <a
              href="mailto: info.tinocsf@gmail.com"
              rel="noopener noreferrer"
              class="fa fa-google"
            ></a>
          </li>
        </ul>
        <p>&copy;2022 Cupertino CSF</p>
      </div>
    </footer>
    <script type="text/javascript" src="js/jquery-3.6.0.min.js"></script>
    <script src="js/script.js"></script>
    <script src="js/test.js"></script>
  </body>
</html>
