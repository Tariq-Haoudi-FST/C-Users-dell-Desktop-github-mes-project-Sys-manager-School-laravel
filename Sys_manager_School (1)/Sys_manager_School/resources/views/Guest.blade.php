@extends('layouts.app')
@section('content')

<style>
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
  line-height: 2px;
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
  margin-bottom: 40px;
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
<br>
<br>
<br>
<br>
<br>
  <ul class="nav flex-column">
  <div class="features">
    <div class="container">
      <div class="row">
      <div class="col-lg-3 col-md-6">
          <a href="{{ url('/show-filiere-info') }}">
            <div class="item">
              <div class="image">
                <img src="assets/images/featured-04.png" alt="" style="max-width: 44px;">
              </div>
              <h4>Show Filieres</h4>
            </div>
          </a>
        </div>
        <div class="col-lg-3 col-md-6">
          <a href="{{ url('/view-departments-info') }}">
            <div class="item">
              <div class="image">
                <img src="assets/images/featured-04.png" alt="" style="max-width: 44px;">
              </div>  
              <h4>Show Departments</h4>
            </div>
          </a>
        </div>
        <div class="col-lg-3 col-md-6">
          <a   href="{{ url('/view-announcements-info') }}"> 
            <div class="item">
              <div class="image">
                <img src="assets/images/featured-04.png" alt="" style="max-width: 44px;">
              </div>
              <h4>Announcements </h4>
            </div>
          </a>
        </div>
      </div>
    </div>
  </div>
  <footer>
    <div class="container">
      <div class="col-lg-12">
        <p>Copyright © 2024 Your University. All rights reserved. &nbsp;&nbsp; </p>
      </div>
    </div>
  </footer>
  </body>

@endsection
