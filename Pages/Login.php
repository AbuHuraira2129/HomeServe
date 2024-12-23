<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>HomeServe - Login</title>
    <link rel="stylesheet" href="../Styles/Login.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
    />
  </head>
  <body>
    <?php include('C:/xampp/htdocs/Service Link/includes/header.php'); ?>

    <main>
      <section class="login-section">
        <div class="login-container">
          <div class="login-image">
            <img
              src="../Images/LoginSupportingImg.png"
              alt="Professional Worker"
            />
          </div>
          <div class="login-form">
            <h2>Welcome Back! Log in to <span>HomeServe</span>.</h2>
            <form action="#" novalidate>
              <label for="email">Email Address</label>
              <input
                type="email"
                id="email"
                placeholder="Enter your Email"
                required
              />
              <label class="PasswordLabel" for="password"
                ><p>Password</p>
                <a href="#">Forgot Password?</a></label
              >
              <input
                type="password"
                id="password"
                placeholder="Enter your password"
                required
              />
              <button type="submit" class="btn-primary">Login</button>
            </form>
            <p class="orLoginWith">Or login with</p>
            <div class="social-login">
              <button class="btn-google">
                Google
                <img
                  width="24px"
                  src="../Images/devicon_google.png"
                  alt="Google"
                />
              </button>
              <button class="btn-facebook">
                Facebook
                <img
                  width="24px"
                  src="../Images/logos_facebook.png"
                  alt="Facebook"
                />
              </button>
            </div>
            <hr class="divider" />
            <p>First time here? <a href="#">Sign up</a></p>
          </div>
        </div>
      </section>
    </main>

    <footer>
      <div class="footer-main">
        <div class="footer-container">
          <div class="footer-brand">
            <h3>Home<span>Serve</span></h3>
            <p>
              Connecting you with skilled professionals for trusted home
              services. Convenient, reliable, and secure.
            </p>
          </div>
          <div class="footerLinks">
            <div class="footer-links">
              <h4>Quick Links</h4>
              <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="#">About Us</a></li>
                <li><a href="#">Contact</a></li>
              </ul>
            </div>
            <div class="footer-links">
              <h4><br /></h4>
              <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="#">About Us</a></li>
                <li><a href="#">Contact</a></li>
              </ul>
            </div>
          </div>
          <div class="footer-newsletter">
            <h4>Newsletter</h4>
            <p>
              Connecting you with skilled professionals for trusted home
              services. Convenient, reliable, and secure.
            </p>
            <form>
              <input type="email" placeholder="Enter your Email" />
              <button class="NewsletterSubmitButton" type="submit">✔</button>
            </form>
          </div>
        </div>
        <div class="footer-bottom">
          <p>© 2024 <span>HomeServe</span>. All rights reserved.</p>
          <p>+92-303-922-1000 • info@HomeServe.com</p>
        </div>
      </div>
    </footer>

    <script>
      document.addEventListener("DOMContentLoaded", () => {
        const form = document.querySelector("form");
        const emailInput = document.getElementById("email");
        const passwordInput = document.getElementById("password");

        form.addEventListener("submit", (e) => {
          let isValid = true;

          // Clear previous error messages
          clearErrors();

          // Validate Email
          if (!validateEmail(emailInput.value)) {
            showError(emailInput, "Please enter a valid email address.");
            isValid = false;
          }

          // Validate Password
          if (passwordInput.value.length < 8) {
            showError(
              passwordInput,
              "Password must be at least 8 characters long."
            );
            isValid = false;
          }

          // Prevent submission if any validation fails
          if (!isValid) {
            e.preventDefault();
          }
        });

        // Helper Functions
        function validateEmail(email) {
          const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
          return emailRegex.test(email);
        }

        function showError(input, message) {
          const errorDiv = document.createElement("div");
          errorDiv.className = "error-message";
          errorDiv.textContent = message;
          input.parentElement.appendChild(errorDiv);
          input.classList.add("input-error");
        }

        function clearErrors() {
          const errorMessages = document.querySelectorAll(".error-message");
          errorMessages.forEach((error) => error.remove());
          const inputs = document.querySelectorAll(".input-error");
          inputs.forEach((input) => input.classList.remove("input-error"));
        }
      });
    </script>
  </body>
</html>
