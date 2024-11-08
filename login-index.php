<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="loginindexstyle.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Tangerine"
    />
    <title>Login & Registration Form</title>
    <style>
      body {
        font-family: "Open Sans", sans-serif;
      }
    </style>
  </head>
  <body>
    <div class="header">
      <div class="back-arrow">
        <a href="index.html">
          <i class="fa-solid fa-arrow-left"></i>
        </a>
      </div>
      <div class="inner">
        <div class="logo">
          <div>
            <img src="bb-logo.png" alt="" />
          </div>
          <div>
            <span class="logo-text">BrainyBreakdown</span>
          </div>
        </div>
      </div>
    </div>
    <section class="main-section">
      <div class="login-container">
        <div class="curved-shape"></div>
        <div class="curved-shape2"></div>
        <div class="form-box Login">
          <h2 class="animation" style="--D: 0; --S: 21">Login</h2>
          <form method="post" action="register.php">
            <div class="input-box animation" style="--D: 1; --S: 22">
              <input placeholder="username" type="text" id="username" name="username" required />
              <i class="fas fa-user"></i>
              <label for="username"></label>
            </div>
            <div class="input-box animation" style="--D: 2; --S: 23">
              <input placeholder="password" type="password" id="password" name="password" required />
              <i class="fas fa-lock"></i>
              <label for="password"></label>
            </div>
            <div class="input-box animation" style="--D: 3; --S: 24">
              <button
                class="btn"
                type="submit"
                value="Sign in"
                name="signin"
              >
                Login
              </button>
            </div>
            <div class="regi-link animation" style="--D: 4; --S: 25">
              <p>
                Don't have an account?
                <a href="#" class="SignUpLink">Sign up</a>
              </p>
            </div>
          </form>
        </div>
        <div class="info-content Login">
          <h2 class="animation" style="--D: 0; --S: 20">WELCOME BACK!</h2>
          <p class="animation" style="--D: 1; --S: 21">
            BrainyBreakdown your one stop for reading news!
          </p>
        </div>

        <div class="form-box Register">
          <h2 class="animation" style="--li: 17; --S: 0">Register</h2>
          <form method="post" action="register.php">
            <div class="input-box animation" style="--li: 18; --S: 1">
              <input placeholder="username" type="text" id="username" name="username" required />
              <i class="fas fa-user"></i>
              <label for="username"></label>
            </div>

            <div class="input-box animation" style="--li: 18; --S: 1">
              <input placeholder="email" type="email" id="email" name="email" required />
              <i class="fa-solid fa-envelope"></i>
              <label for="email"></label>
            </div>

            <div class="input-box animation" style="--li: 19; --S: 2">
              <input placeholder="password" type="password" id="password" name="password" required />
              <i class="fas fa-lock"></i>
              <label for="password"></label>
            </div>
            <div class="input-box animation" style="--li: 20; --S: 3">
              <button
                class="btn"
                type="submit"
                value="sign up"
                name="signup"
              >
                Register
              </button>
            </div>
            <div class="regi-link animation" style="--li: 21; --S: 4">
              <p>
                Don't have an account?
                <a href="#" class="SignInLink">Sign in</a>
              </p>
            </div>
          </form>
        </div>
        <div class="info-content Register">
          <h2 class="animation" style="--li: 17; --S: 0">HEY WELCOME!</h2>
          <p class="animation" style="--li: 18; --S: 1">
            Let's register to the most engaging Online Newsletter!
          </p>
        </div>
      </div>
    </section>

    <!-- START OF FOOTER -->
    <div class="all-footer">
      <hr />
      <footer>
        <div class="footer-container">
          <div class="footer-section about">
            <h4>About us</h4>
            <p>
              Welcome to Brainy Breakdown (Online Email Newsletter), your
              ultimate destination for staying informed, engaged, and connected
              with the latest news and discussions that matter.
            </p>
          </div>

          <div class="footer-section links">
            <h4>Quick Links</h4>
            <ul>
              <li><a href="about.html">About Us</a></li>
              <li><a href="#features">Features</a></li>
              <li><a href="plans.html">Plans</a></li>
              <li><a href="contact.html">Contact Us</a></li>
            </ul>
          </div>

          <div class="footer-section social">
            <h4>Connect with Us</h4>
            <p>Call us at: 8448330721</p>
            <p>Mail us at:</p>
            <a href="mailto:BrainyBreakdown@gmail.com"
              >BrainyBreakdown@gmail.com</a
            >
          </div>
        </div>

        <div class="footer-bottom">
          <p>&copy; 2024 Brainy Breakdown | All Rights Reserved</p>
        </div>
      </footer>
    </div>

    <script src="loginindexscript.js" defer></script>
  </body>
</html>