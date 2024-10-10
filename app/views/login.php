<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Form</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
  <style>
      body {
        background: linear-gradient(135deg, #e3f2fd, #fce4ec);
        display: flex;
        align-items: center;
        justify-content: center;
        height: 100vh;
        font-family: 'Poppins', sans-serif;
        margin: 0;
      }

      .login-container {
        background-color: #ffffff;
        padding: 40px;
        border-radius: 15px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15);
        max-width: 400px;
        width: 100%;
        transition: all 0.3s ease;
      }

      .login-container:hover {
        box-shadow: 0 15px 40px rgba(0, 0, 0, 0.25);
      }

      .form-control, .input-group-text {
        border-radius: 50px;
        padding: 14px;
        border: 2px solid #dee2e6;
      }

      .form-control {
        box-shadow: none;
        transition: border-color 0.3s ease;
      }

      .form-control:focus {
        border-color: #ff6f61;
        box-shadow: none;
      }

      .btn-primary {
        background-color: #ff6f61;
        border-color: #ff6f61;
        border-radius: 50px;
        padding: 12px;
        font-size: 16px;
        transition: background-color 0.3s ease, border-color 0.3s ease;
      }

      .btn-primary:hover {
        background-color: #e64a19;
        border-color: #e64a19;
      }

      a {
        color: #ff6f61;
        text-decoration: none;
      }

      a:hover {
        color: #e64a19;
      }

      .input-group-text {
        background-color: #f1f3f5;
        border: none;
      }

      h3 {
        font-weight: 700;
        color: #333;
        margin-bottom: 30px;
      }

      p {
        margin-top: 20px;
        font-size: 14px;
        color: #666;
      }

      @media (max-width: 576px) {
        .login-container {
          padding: 30px;
        }

        .btn-primary {
          padding: 10px;
        }

        .form-control, .input-group-text {
          padding: 12px;
        }
      }
    </style>
</head>
<body>

  <div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-md-4">
        <div class="login-container">
          <?php flash_alert(); ?>
          <h3 class="text-center mb-4">Login Page</h3>
          <form action="<?= site_url('/login') ?>" method="post">
            <!-- Username Field -->
            <div class="form-group mb-3">
              <label for="username" class="form-label">Username</label>
              <div class="input-group">
                <span class="input-group-text">
                  <i class="fas fa-user"></i>
                </span>
                <input type="text" class="form-control" id="username" name="username" placeholder="Enter your username">
              </div>
            </div>

            <!-- Password Field -->
            <div class="form-group mb-3">
              <label for="password" class="form-label">Password</label>
              <div class="input-group">
                <span class="input-group-text">
                  <i class="fas fa-lock"></i>
                </span>
                <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password">
              </div>
            </div>

            <!-- Login Button -->
            <button type="submit" class="btn btn-primary w-100">Login</button>
          </form>

          <!-- "Don't have an account yet?" message -->
          <div class="text-center mt-3">
            <p>Don't have an account yet? 
              <a href="<?= site_url('/register') ?>">Register here</a>
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
