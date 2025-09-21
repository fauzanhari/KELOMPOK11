<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sign Up</title>
    <link rel="stylesheet" href="../assets/css/styleup.css" />
    <!-- CSS akan disimpan di file terpisah -->
  </head>
  <body>
    <div class="logo">Logo</div>

    <div class="container">
      <!-- Logo -->

      <!-- Form Sign Up -->
      <div class="form-container">
        <h1>Sign Up</h1>
        <p>Silahkan daftar akun terlebih dahulu.</p>

        <form id="signup-form">
          <div class="form-group">
            <label for="name">Nama*</label>
            <input type="text" id="name" name="name" required />
          </div>

          <div class="form-group">
            <label for="email">Email*</label>
            <input type="email" id="email" name="email" required />
          </div>

          <div class="form-group">
            <label for="Umur">Umur*</label>
            <input type="text" id="Umur" name="umur" required />
          </div>

          <div class="form-group">
            <label for="password">Password*</label>
            <input type="password" id="password" name="password" required />
          </div>

          <button type="submit" class="btn-primary">Sign up</button>

          <button type="button" class="btn-google">
            <img
              src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/53/Google_%22G%22_Logo.svg/2048px-Google_%22G%22_Logo.svg.png"
              alt="Google"
              width="20"
              height="20" />
            Sign up with Google
          </button>

          <p class="login-link">
            Already have an account? <a href="login.html">Log In</a>
          </p>
        </form>
      </div>

      <!-- Footer -->
      <footer class="footer">&copy; 2025 NamaKelompok</footer>
    </div>

    <script src="script.js"></script>
    <!-- JavaScript opsional -->
  </body>
</html>
