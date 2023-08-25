<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>RON</title>
  <link rel="icon" type="image/x-icon" href="src/favicon/favicon1.png">
  <link rel="stylesheet" href="style/style.css">
</head>

<body style="display: block;">
  <div id="preloader"></div>
  <div class="home">

    <div class="menu-bar">

      <div class="logo"><img src="src/index/logo.jpeg" height="50px" width="50px" /></div>
      <div class="logo-name">RON<span>
          <p>Reach Out Now</p>
        </span></div>
      <span>
        <ul>

          <li><a href="#">Home</a></li>
          <li><a href="#">About us</a></li>
          <li><a href="#">Pages</a></li>
          <li><a href="#">Map</a></li>
          <li><a href="#">Contact Us</a></li>

          <button><a href="php/login.php">Login</button>
          <button><a href="php/register.php">SignUp</button>


        </ul>
      </span>

    </div>


    <!--Cover Image-->
    <div class="homecontainer">
      <div class="cover"><img src="src/index/cover.jpg" width="100%"></div>
      <button class="register"><a href="php/register.php">Register</a></button>
    </div>
    <center>
      <div class="main-scroll-div">

        <div class="cover-scroll">
          <div class="scroll-images">
            <div class="icon"><img class="arrow" src="src/index/a1.png"></div>

            <div class="child"><a href="#"></a><img class="child-img" src="src/index/pic1.jpg" alt=""></a></div>
            <div class="child"><a href="#"></a><img class="child-img" src="src/index/pic1.jpg" alt=""></a></div>
            <div class="child"><a href="#"></a><img class="child-img" src="src/index/pic1.jpg" alt=""></a></div>
            <div class="child"><a href="#"></a><img class="child-img" src="src/index/pic1.jpg" alt=""></a></div>
            <div class="child"><a href="#"></a><img class="child-img" src="src/index/pic1.jpg" alt=""></a></div>

            <div class="icon"><img class="arrow" src="src/index/a2.png"></div>

          </div>

        </div>
    </center>

    <!-- About Us -->
    <section class="hero">
      <div class="heading">
        <h1>About Us</h1>
      </div>
      <div class="content">
        <div class="hero-content">
          <h2>Welcome to website</h2>
          <p>When you apply styles, your headings change to match the new theme.
            Save time in Word with new buttons that show up where you need them.
            To change the way a picture fits in your document, click it and a
            button for layout options appears next to it.Save time in Word with
            new buttons that show up where you need them. To change the way a
            picture fits in your document, click it and a button for layout
            options appears next to it. </p>
        </div>
        <div class="hero-image">
          <img class="about" src="src/index/image.jpg">
        </div>
      </div>
    </section>

    <!-- Content -->
    <center>
      <div class="test">

        <div class="card">
          <div class="img-box">
            <a href="#"><img src="src/index/img1.jpg"></a>
            <h2>Heading 01</h2>
            <p>To make your document look professionally produced, Word provides
              header, footer, cover page, and text box designs that complement
              each other. For example, you can add a matching cover page, header,
              and sidebar</p>
          </div>
        </div>

        <div class="card">
          <div class="img-box">
            <a href="#"><img src="src/index/img2.jpg"></a>
            <h2>Heading 02</h2>
            <p>To make your document look professionally produced, Word provides
              header, footer, cover page, and text box designs that complement
              each other. For example, you can add a matching cover page, header,
              and sidebar</p>
          </div>
        </div>

        <div class="card">
          <div class="img-box">
            <a href="#"><img src="src/index/img3.jpg"></a>
            <h2>Heading 03</h2>
            <p>To make your document look professionally produced, Word provides
              header, footer, cover page, and text box designs that complement
              each other. For example, you can add a matching cover page, header,
              and sidebar</p>
          </div>
        </div>

      </div>
    </center>
    <!-- footer -->
    <footer>
      <div class="row">
        <div class="col">
          <div class="logo-name2">RON</div>
          <br>
          <p>Video provides a powerful way to help you prove your point.
            When you click Online Video, you can paste in the embed code
            for the video you want to add. You can also type a keyword to
            search online for the video that best fits your document.
            To make your document look professionally produced, Word
            provides header, footer, cover page, and text box designs
            that complement each other.</p>
        </div>
        <div class="col">
          <h3>Office <div class="underline"><span></span></div>
          </h3>
          <p>67 Road</p>
          <p>Whitefield,Colombo</p>
          <p>Karnataka, PIN 560066, Sri Lanka</p>
          <p class="email-id">reachoutnow@gmail.com</p>
          <h4>+94-07656430</h4>
        </div>
        <div class="col">
          <h3>Links<div class="underline"><span></span></div>
          </h3>

          <p><a href="#">Home</a></p>
          <p><a href="#">About us</a></p>
          <p><a href="#">Pages</a></p>
          <p><a href="#">Map</a></p>
          <p><a href="#">Contact Us</a></p>

        </div>
        <div class="col">
          <h3>Social Accounts<div class="underline"><span></span></div>
          </h3>


          <p><img src="src/index/1.png">logo1</p>
          <p><img src="src/index/1.png">logo2</p>
          <p><img src="src/index/1.png">logo3</p>
          <p><img src="src/index/1.png">logo4</p>
          <p><img src="src/index/1.png">logo5</p>



        </div>
      </div>
      <hr>
      <p class="copyright">@2023 Department of computer Science All Rights Reserved <b>UNIVERSITY OF JAFFNA</b></p>
    </footer>
  </div>

  <script>
    var loader = document.getElementById("preloader");
    window.addEventListener("load", function() {
      loader.style.display = "none";
    })
  </script>

</body>

</html>