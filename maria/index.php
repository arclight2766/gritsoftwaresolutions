<?php

if ($_POST['submit']) {

  if (!$_POST['name']) {
    $error = "<br/>- Please enter your name";
  }
  if (!$_POST['email']) {
    $error .= "<br/>- Please enter your email";
  }
  if (!$_POST['message']) {
    $error .= "<br/>- Please enter a message";
  }
  if (!$_POST['check']) {
    $error .= "<br/>- Please confirm you are human";
  }

  if ($error) {
    $result = '<div class="alert alert-danger" role="alert"><strong>Whoops, there is an error</strong>. Please correct the following: ' . $error . '</div>';
  } else {
    mail("jch2766@yahoo.com", "Contact message", "Name: " . $_POST['name'] . "
		Email: " . $_POST['name'] . "
		Message: " . $_POST['message']); {
      $result = '<div class="alert alert-success" role="alert">Thank you, I\'ll be in touch shortly</div>';
    }
  }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family
    =Vollkorn:400,400i,600,700,900&display=swap" />
    <link rel="stylesheet" href="style.css" />
    <title>Maria Paul</title>
</head>

<body>
    <div class="container">
        <!--Navbar-->
        <div class="open-navbar-icon navbar-icon center">
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
        </div>
        <div class="navbar-wrapper">
            <div class="navbar">
                <div class="close-navbar-icon navbar-icon center">
                    <div class="line line-1"></div>
                    <div class="line line-2"></div>
                </div>
                <div class="nav-list">
                    <a href="#" class="nav-link">Home</a>
                    <a href="#" class="nav-link">Skill Set</a>
                    <a href="#" class="nav-link">About Me</a>
                </div>
            </div>
        </div>
        <!--End of Navbar-->
        <!--Header-->
        <header class="header center">
            <div class="header-text">
                <h1 class="heading">Maria Paul</h1>
                <p class="header-paragraph">
                    Administrative Assistant
                </p>
            </div>
            <img src="images/air-balloon.png" alt="Header Image" class="header-image" />
            <div class="logo">
                <h1>
                    <span class="center">M</span>
                    <span class="center">a</span>
                    <span class="center">r</span>
                    <span class="center">i</span>
                    <span class="center">a</span>
                </h1>
            </div>
        </header>
        <!--End of Header-->
        <!--Popular Tours-->
        <section class="popular-tours">
            <h1 class="popular-tours-heading">My Skill Set</h1>
            <div class="cards-wrapper">
                <div class="card">
                    <div class="front-side">
                        <img src="images/Microsoft_logo.jpeg" alt="Microsoft" class="card-image" />
                        <h1 class="tour-name">Microsoft Products</h1>
                        <ul class="card-list">
                            <li class="card-list-item">Windows 7-10</li>
                            <li class="card-list-item">Microsoft Word</li>
                            <li class="card-list-item">Microsoft Excel</li>
                            <li class="card-list-item">Microsoft PowerPoint</li>
                            <li class="card-list-item">Skil Set: Expert</li>
                        </ul>


                    </div>

                </div>
                <div class="card">
                    <div class="front-side">
                        <img src="images/sql.png" alt="Sql" class="card-image" />
                        <h1 class="tour-name">Along the river</h1>
                        <ul class="card-list">
                            <li class="card-list-item">Database Queries</li>
                            <li class="card-list-item">ajfaj</li>
                            <li class="card-list-item">afjaja</li>
                            <li class="card-list-item">adfmafa</li>
                            <li class="card-list-item">Skill Set: Advanced</li>
                        </ul>

                    </div>

                </div>
                <div class="card">
                    <div class="front-side">
                        <img src="images/sea.jpg" alt="Sea" class="card-image" />
                        <h1 class="tour-name">afaasad</h1>
                        <ul class="card-list">
                            <li class="card-list-item">afdadasd</li>
                            <li class="card-list-item">adfafa</li>
                            <li class="card-list-item">rtdsaardfaf</li>
                            <li class="card-list-item">adfaser</li>
                            <li class="card-list-item">Skil Set: Advanced</li>
                        </ul>

                    </div>


                </div>
            </div>
        </section>
        <!--End of Popular Tours-->

        <!--Stories-->
        <section class="stories">
            <div class="video-container">
                <video class="bg-video" autoplay muted loop>
                    <source src="images/video.mp4" type="video/mp4" />
                </video>
            </div>
            <div class="stories-wrapper">
                <div class="story-bg">
                    <div class="story">
                        <img src="images/story-img-1.jpg" alt="Customer image" class="story-image" />
                        <div class="story-text">
                            <h1 class="story-heading">
                                Hi, I am Maria Paul, this is my story
                            </h1>
                            <p class="story-paragraph">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Architecto quas, repudiandae veritatis nam mollitia cumque
                                distinctio, quia aperiam aliquid at consequuntur libero
                                quisquam facilis laborum inventore repellat perspiciatis vel
                                fugiat molestias recusandae eum necessitatibus quo possimus
                                aspernatur? Nobis, architecto eaque.
                            </p>
                        </div>
                    </div>
                </div>


            </div>
        </section>
        <!--End of Stories-->

        <!--Contact-->
        <section class="contact">
        <h1 class="contact-heading">Contact Me</h1>
        <form class="contact-form center">
          <div class="input-group">
            <label>Full Name *</label>
            <input
              type="text"
              class="contact-input"
              placeholder="Enter Your Name"
              value = "<?php echo $_POST['fullname']; ?>"
            />
          </div>
          <div class="input-groups">
            <div class="input-group">
              <label>Email *</label>
              <input
                type="email"
                class="contact-input"
                placeholder="Enter Your Email"
                value = "<?php echo $_POST['email']; ?>"
              />
            </div>
            <div class="input-group">
              <label>Phone</label>
              <input
                type="text"
                class="contact-input"
                placeholder="Enter Phone Number"
                value= "<?php echo $_POST['phone']; ?>"
              />
            </div>
          </div>
          <div class="input-group">
            <label>Message</label>
            <textarea
              class="form-textarea"
              placeholder="Your Message Here..."
            ><?php echo $_POST['message']; ?></textarea>
          </div>
          <input type="submit" value="Submit" class="form-btn" />
        </form>
      </section>
        <!--End of Contact-->

        <!--Footer-->
        <footer class="footer">
            <div class="footer-list">
                <a href="#home" class="footer-link">Home</a>
                <a href="#skill set" class="footer-link">Skill Set</a>
                <a href="#about me" class="footer-link">About Me</a>
            </div>
            <p class="footer-paragraph">
                Copyright &copy;Grit Software Solutions All Rights Reserved
            </p>
        </footer>
        <!--End of Footer-->
    </div>
    <script src="script.js"></script>
</body>

</html>