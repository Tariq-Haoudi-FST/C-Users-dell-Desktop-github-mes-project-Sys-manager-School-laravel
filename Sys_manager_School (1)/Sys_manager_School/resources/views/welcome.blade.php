<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title>Welcome Page</title>

    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

<STYLE>
  
::selection {
  background: #0071f8;
  color: #fff;
}

::-moz-selection {
  background: #0071f8;
  color: #fff;
}

.section {
  margin-top: 120px;
}

.section-heading {
  margin-bottom: 70px;
}

.section-heading h2 {
  font-size: 36px;
  font-weight: 700;
  text-transform: capitalize;
  margin-top: 20px;
  line-height: 44px;
}

.section-heading h2 em {
  font-style: normal;
  color: #0071f8;
}

.section-heading h6 {
  color: #ee626b;
  font-size: 15px;
  text-transform: uppercase;
  font-weight: 700;
}

.main-button a {
  display: inline-block;
  background-color: #ee626b;
  text-transform: uppercase;
  color: #fff;
  font-size: 14px;
  font-weight: 600;
  height: 50px;
  line-height: 50px;
  padding: 0px 30px;
  border-radius: 25px;
  transition: all .3s;
}

.main-button a:hover {
  background-color: #0071f8;
  color: #fff;
}


.background-header {
  background-color: #0071f8 !important;
  border-radius: 0px 0px 25px 25px;
  height: 80px!important;
  position: fixed!important;
  top: 0!important;
  left: 0;
  right: 0;
  box-shadow: 0px 0px 10px rgba(0,0,0,0.15)!important;
  -webkit-transition: all .5s ease 0s;
  -moz-transition: all .5s ease 0s;
  -o-transition: all .5s ease 0s;
  transition: all .5s ease 0s;
}

.background-header .logo img {
  max-width: 110px;
}

.header-area {
  position: absolute;
  background-color: transparent;
  top: 40px;
  left: 0;
  right: 0;
  z-index: 100;
  -webkit-transition: all .5s ease 0s;
  -moz-transition: all .5s ease 0s;
  -o-transition: all .5s ease 0s;
  transition: all .5s ease 0s;
}

.header-area .main-nav {
  background: transparent;
  display: flex;
}

.header-area .main-nav .logo {
  -webkit-transition: all 0.3s ease 0s;
  -moz-transition: all 0.3s ease 0s;
  -o-transition: all 0.3s ease 0s;
  transition: all 0.3s ease 0s;
  display: inline-block;
}

.header-area .main-nav .logo h1 {
  font-size: 36px;
  text-transform: uppercase;
  color: #fff;
  font-weight: 600;
  margin-right: 30px;
  padding-right: 30px;
  border-right: 1px solid rgba(250, 250, 250, 0.3);
}

.background-header .main-nav .logo{
  margin-top: 18px;
}

.header-area .main-nav ul.nav {
  border-radius: 0px 0px 25px 25px;
  flex-basis: 100%;
  margin-top: 10px;
  justify-content: right;
  -webkit-transition: all 0.3s ease 0s;
  -moz-transition: all 0.3s ease 0s;
  -o-transition: all 0.3s ease 0s;
  transition: all 0.3s ease 0s;
  position: relative;
  z-index: 999;
}

.header-area .main-nav .nav li:last-child {
  padding-right: 0px;
}

.header-area .main-nav .nav li {
  padding-left: 10px;
  padding-right: 10px;
  height: 40px;
  line-height: 40px;
}



.header-area .main-nav .nav li:last-child a {
  background-color: #ee626b;
  text-transform: uppercase;
  font-weight: 500;
}

.header-area .main-nav .nav li:last-child:hover a {
  background-color: #ee626b;
}

.header-area .main-nav .nav li:hover a {
  background-color: rgba(255, 255, 255, 0.10);
}

.header-area .main-nav .nav li a.active {
  color: #fff;
  background-color: rgba(255, 255, 255, 0.10);
}

.background-header .main-nav .nav li a.active {
  color: #fff;
  background-color: rgba(255, 255, 255, 0.10);
}

.header-area .main-nav .menu-trigger {
  cursor: pointer;
  position: absolute;
  top: 33px;
  width: 32px;
  height: 40px;
  text-indent: -9999em;
  z-index: 99;
  right: 20px;
  display: none;
}

.background-header .main-nav .menu-trigger {
  top: 22px;
}


.header-area .main-nav .menu-trigger span {
  top: 16px;
}


.header-area .main-nav .menu-trigger.active span:after {
  -moz-transform: translateY(-6px) translateX(1px) rotate(-45deg);
  -ms-transform: translateY(-6px) translateX(1px) rotate(-45deg);
  -webkit-transform: translateY(-6px) translateX(1px) rotate(-45deg);
  transform: translateY(-6px) translateX(1px) rotate(-45deg);
  background-color: #fff;
}

.background-header .main-nav .menu-trigger.active span:after {
  background-color: #fff;
}

.header-area.header-sticky .nav li a.active {
  color: #fff;
}

.visible{
  display:inline !important;
}

@media (max-width: 1200px) {
  .header-area .main-nav .nav li {
    padding-left: 5px;
    padding-right: 5px;
  }

}

footer {
  margin-top: 150px;
  background-color: #0071f8;
  background-repeat: no-repeat;
  background-size: cover;
  background-image: url(./assets/images/footer-bg.jpg);
  min-height: 150px;
  border-radius: 150px 150px 0px 0px;
}

footer p {
  text-align: center;
  line-height: 90px;
  color: #fff;
  font-size: 16px;
  font-weight: 400;
}

footer p a {
  color: #fff;
  transition: all .3s;
  position: relative;
  z-index: 3;
}

footer p a:hover {
  opacity: 0.75;
}


.page-heading {
  background-image: url(./assets/images/page-heading-bg.jpg);
  border-radius: 0px 0px 150px 150px;
  background-position: center bottom;
  background-repeat: no-repeat;
  background-size: cover;
  padding: 200px 0px 100px 0px;
  text-align: center;
}

.page-heading span {
  display: inline-block;
  font-size: 16px;
  color: #fff;
}

.page-heading span a {
  color: #fff;
}

.page-heading h3 {
  font-size: 48px;
  text-transform: uppercase;
  color: #fff;
  margin-top: 20px;
  position: relative;
  margin-bottom: 20px;
}


.contact-page .left-text {
  background-color: #f7f7f7;
  border-radius: 25px;
  padding: 60px;
}

.contact-page .left-text .section-heading {
  margin-bottom: 50px;
}

.contact-page .left-text p {
  margin-bottom: 50px;
}

.contact-page .left-text ul li {
  display: block;
  font-size: 16px;
  color: #aaaaaa;
  font-size: 300;
  margin-bottom: 30px;
}

.contact-page .left-text ul li:last-child {
  margin-bottom: 0px;
}

.contact-page .left-text ul li span {
  display: block;
  font-size: 14px;
  font-weight: 600;
  color: #4a4a4a;
  margin-bottom: 5px;
}

.contact-page .right-content {
  margin-left: 50px;
}

.contact-page .right-content #map {
  margin-bottom: 60px;
}

.contact-page .right-content form input {
  width: 100%;
  height: 50px;
  border-radius: 25px;
  padding: 0px 20px;
  background-color: #f7f7f7;
  border: 1px solid #e7e7e7;
  font-size: 14px;
  color: #4a4a4a;
  margin-bottom: 30px;
}

.contact-page .right-content form textarea {
  width: 100%;
  height: 130px;
  border-radius: 25px;
  padding: 20px 20px;
  background-color: #f7f7f7;
  border: 1px solid #e7e7e7;
  font-size: 14px;
  color: #4a4a4a;
  margin-bottom: 30px;
}

.contact-page .right-content form button {
  display: inline-block;
  height: 50px;
  line-height: 50px;
  background-color: #ee626b;
  color: #fff;
  font-size: 15px;
  text-transform: uppercase;
  font-weight: 500;
  padding: 0px 25px;
  border: none;
  border-radius: 25px;
  transition: all .3s;
}

.contact-page .right-content form button:hover {
  background-color: #0071f8;
}
  .clearfix:after {
  content: ".";
  display: block;
  clear: both;
  visibility: hidden;
  line-height: 0;
  height: 0;
}

.clearfix {
  display: inline-block;
}

html[xmlns] .clearfix {
  display: block;
}

* html .clearfix {
  height: 1%;
}

ul, li {
  padding: 0;
  margin: 0;
  list-style: none;
}

header, nav, section, article, aside, footer, hgroup {
  display: block;
}

* {
  box-sizing: border-box;
}

html, body {
  font-family: 'Poppins', sans-serif;
  -ms-text-size-adjust: 100%;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}

a {
  text-decoration: none !important;
}

h1, h2, h3, h4, h5, h6 {
  color: #1e1e1e;
  margin-top: 0px;
  margin-bottom: 0px;
  font-weight: 700;
}

ul {
  margin-bottom: 0px;
}

p {
  font-size: 14px;
  line-height: 28px;
  color: #4a4a4a;
}

img {
  width: 100%;
  overflow: hidden;
}

html, body {
  font-family: 'Poppins', sans-serif;
}

.main-banner {
  background-image: url(./assets/images/banner-bg.jpg);
  border-radius: 0px 0px 150px 150px;
  background-position: center bottom;
  background-repeat: no-repeat;
  background-size: cover;
  padding: 150px 0px;
}

.main-banner .caption h6 {
  font-size: 20px;
  text-transform: uppercase;
  color: #fff;
  font-weight: 500;
  letter-spacing: 0.5px;
}

.main-banner .caption h2 {
  font-size: 48px;
  color: #fff;
  margin-top: 20px;
  position: relative;
  padding-bottom: 5px;
  margin-bottom: 40px;
}

.main-banner .caption h2:after {
  position: absolute;
  background-image: url(./assets/images/caption-dec.png);
  width: 202px;
  height: 12px;
  content: '';
  left: 125px;
  bottom: 0;
}

.main-banner .caption p {
  color: #fff;
  margin-bottom: 70px;
}

.main-banner .caption form {
  position: relative;
  max-width: 450px;
}

.main-banner .caption form input {
  max-width: 450px;
  width: 100%;
  height: 50px;
  outline: none;
  border-radius: 25px;
  background-color: #fff;
  border: none;
  padding: 0px 25px;
  font-size: 14px;
  color: #7a7a7a;
}

.main-banner .caption form button {
  display: inline-block;
  height: 50px;
  line-height: 50px;
  background-color: #ee626b;
  color: #fff;
  font-size: 15px;
  text-transform: uppercase;
  font-weight: 500;
  padding: 0px 25px;
  border: none;
  border-radius: 25px;
  position: absolute;
  right: 0;
  top: 0;
  transition: all .3s;
}

.main-banner .caption form button:hover {
  background-color: #0071f8;
}

.main-banner .right-image {
  position: relative;
}

.main-banner .right-image img {
  border-radius: 25px;
}

.main-banner .right-image span.price {
  position: absolute;
  right: 20px;
  top: 20px;
  border-radius: 25px;
  background-color: #008af8;
  font-size: 22px;
  text-transform: uppercase;
  font-weight: 700;
  color: #fff;
  padding: 4px 15px;
}

.main-banner .right-image span.offer {
  position: absolute;
  left: -25px;
  bottom: -25px;
  border-radius: 50%;
  background-color: #ee626b;
  font-size: 28px;
  text-transform: uppercase;
  font-weight: 700;
  color: #fff;
  display: inline-block;
  width: 100px;
  height: 100px;
  text-align: center;
  line-height: 100px;
}


.features {
  margin-top: -80px;
}

.features .item {
  padding: 35px;
  box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.15);
  border-radius: 25px;
  background-color: #fff;
  text-align: center;
}

.features .item h4 {
  font-size: 17px;
  margin-top: 25px;
  text-transform: uppercase;
}

.features .item .image {
  width: 90px;
  height: 90px;
  display: inline-block;
  text-align: center;
  line-height: 90px;
  background-color: #0071f8;
  border-radius: 50%;
  transition: all .3s;
}

.features .item:hover .image {
  background-color: #ee626b;
}


footer {
  margin-top: 150px;
  background-color: #0071f8;
  background-repeat: no-repeat;
  background-size: cover;
  background-image: url(../images/footer-bg.jpg);
  min-height: 150px;
  border-radius: 150px 150px 0px 0px;
}

footer p {
  text-align: center;
  line-height: 90px;
  color: #fff;
  font-size: 16px;
  font-weight: 400;
}

footer p a {
  color: #fff;
  transition: all .3s;
  position: relative;
  z-index: 3;
}

footer p a:hover {
  opacity: 0.75;
}
</style>
  </head>

<body>
<header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">

                @if (Route::has('login'))
    <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block" style="background-color: #3498db; border-bottom: 1px solid #2980b9; position: fixed; top: 0; right: 0; padding: 10px;">
        @auth
            <a href="{{ url('/home') }}" class="text-sm text-white underline" style="float: right; margin-left: 10px;">Home</a>
        @else
            <a href="{{ route('login') }}" class="text-sm text-white underline" style="float: right; margin-left: 10px;">Log in</a>

            @if (Route::has('register'))
                <a href="{{ route('register') }}" class="ml-4 text-sm text-white underline" style="float: right; margin-left: 10px;">Register</a>
            @endif
        @endauth
    </div>
@endif


                </nav>
            </div>
        </div>
    </div>
  </header>
        
  <div class="main-banner">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 align-self-center">
          <div class="caption header-text">

              <h2>Welcome to the website of your university ! </h2>          
                  <div>
                      <h6>Your Information:</h6>
                      <p>More details</p>
                  </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <br>

  <h1 style="text-align: center;">Get  to   know   us  </h1>

  <br>
  <br>
  <br>
  <br>

  <div class="features">
    <div class="container">
      <div class="row">
          
        <div class="col-lg-3 col-md-6">
          <a href="#about">
            <div class="item">
              <h4>About Us</h4>
            </div>
          </a>
        </div>

        <div class="col-lg-3 col-md-6">
          <a href="#contact">
            <div class="item">
              <h4>Contacts Us</h4>
            </div>
          </a>
        </div>

      </div>
    </div>
  </div>

  <section id="about">

  <div class="page-heading header-text">
    <div class="container">
      <div class="row">
      <div class="col-lg-4 offset-lg-2">
          <div class="right-image" style=" text-align:center;">
            <img src="assets/images/banner-image5.jpg" style="max-width:900px; text-align:center;">
          </div>
        </div>
        <div class="col-lg-12">
          <h3>About Us</h3>
        </div>
      </div>
    </div>
  </div>


  <div class="contact-page section">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 align-self-center">
          <div class="left-text">
            <div class="section-heading">
              <h6>Who Are we?</h6>
              <h2>Say Hello to Your University!</h2>
            </div>
            <p>

Welcome to Your University, where academic excellence meets boundless possibilities. Established with a vision to inspire and empower future leaders, Your University stands at the forefront of higher education, dedicated to nurturing intellectual curiosity, fostering innovation, and shaping the leaders of tomorrow.

Our illustrious journey began in Year of Establishment with a commitment to providing a transformative educational experience that goes beyond traditional boundaries. Your University has since evolved into a dynamic hub of learning, research, and community engagement, cultivating a vibrant atmosphere that encourages students to explore, question, and excel.

At the heart of our institution is a world-class faculty comprised of distinguished scholars, researchers, and industry experts. They are not just educators but mentors, guiding students on a journey of intellectual discovery and personal growth. Our comprehensive range of undergraduate, graduate, and professional programs spans across various disciplines, ensuring a well-rounded education that prepares students for the challenges and opportunities of the global landscape.

The Your University campus is a melting pot of cultures, ideas, and perspectives. We celebrate diversity and inclusivity, fostering an environment where students from different backgrounds come together to learn, collaborate, and build lifelong connections. Our state-of-the-art facilities, including cutting-edge laboratories, libraries, and recreational spaces, provide students with the resources they need to thrive academically and socially.

As a research-driven institution, Your University is at the forefront of groundbreaking discoveries and innovations. Our commitment to pushing the boundaries of knowledge extends beyond the classroom, contributing to advancements in science, technology, arts, and humanities. Students have the opportunity to engage in meaningful research projects, gaining hands-on experience that prepares them for a rapidly changing world.

Beyond academics, Your University is deeply invested in community service and social responsibility. Our students are encouraged to apply their skills and knowledge to make a positive impact on society. Whether through community outreach programs, volunteer opportunities, or partnerships with local organizations, we instill a sense of civic responsibility that extends far beyond graduation.

At Your University, we believe in the power of education to transform lives and shape a better future. Our alumni, scattered across the globe, are a testament to the impact of a Your University education. They are leaders, innovators, and changemakers, making a difference in their respective fields and contributing to the betterment of society.

Join us at Your University and embark on a journey of academic excellence, personal growth, and endless possibilities. Together, we are shaping the future and creating a legacy that lasts a lifetime.</p>

          </div>
        </div>
      </div></div></div></section>
  <section id="contact">


  <div class="page-heading header-text">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h3>Contact Us</h3>
        </div>
      </div>
    </div>
  </div>


  <div class="contact-page section">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 align-self-center">
          <div class="left-text">
            <div class="section-heading">
              <h6>Would you like to reach us out?</h6>
              <h2>Say Hello!</h2>
            </div>
            <p>Feel free to get in touch with us! The Your University team is here to assist you. Whether you have questions about admissions, programs, or general inquiries, our friendly staff is ready to provide the information you need. Connect with us through the following channels:</p>

          </div>
        </div>
        <div class="col-lg-6">
          <div class="right-content">
            <div class="row">
 
              <div class="col-lg-12">
                <form id="contact-form" action="" method="post">
                  <div class="row">
                    <div class="col-lg-6">
                        <input type="name" name="name" id="name" placeholder="Your Name..." autocomplete="on" required>
                    </div>
                    <div class="col-lg-6">
                        <input type="surname" name="surname" id="surname" placeholder="Your Surname..." autocomplete="on" required>
                    </div>
                    <div class="col-lg-6">
                        <input type="text" name="email" id="email" pattern="[^ @]*@[^ @]*" placeholder="Your E-mail..." required="">
                    </div>
                    <div class="col-lg-6">
                        <input type="subject" name="subject" id="subject" placeholder="Subject..." autocomplete="on" >
                    </div>
                    <div class="col-lg-12">
                        <textarea name="message" id="message" placeholder="Your Message"></textarea>
                    </div>
                    <div class="col-lg-12">
                        <button type="submit" id="form-submit" class="orange-button">Send Message Now</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>  
  </section>
 

  <footer>
    <div class="container">
      <div class="col-lg-12">
        <p>Copyright © 2024 Your University. All rights reserved. &nbsp;&nbsp; </p>
      </div>
    </div>
  </footer>


  </body>
</html>