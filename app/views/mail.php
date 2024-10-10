<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Send Email</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
  <style>
  body {
    background: linear-gradient(135deg, #e3f2fd, #fce4ec);
    font-family: 'Poppins', sans-serif;
    margin: 0;
    padding: 20px;
  }

  .email-form {
    background-color: #ffffff;
    border-radius: 15px;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15);
    padding: 40px;
    max-width: 600px;
    margin: 0 auto;
    transition: all 0.3s ease;
  }

  .email-form:hover {
    box-shadow: 0 15px 40px rgba(0, 0, 0, 0.25);
  }

  .email-form h3 {
    color: #333;
    font-weight: 700;
    margin-bottom: 30px;
  }

  .form-group label {
    color: #666;
    font-size: 14px;
    font-weight: 500;
    margin-bottom: 10px;
    display: block;
  }

  .form-control {
    border-radius: 50px;
    padding: 14px;
    border: 2px solid #dee2e6;
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
    padding: 12px 20px;
    font-size: 16px;
    font-weight: 600;
    transition: background-color 0.3s ease, border-color 0.3s ease;
  }

  .btn-primary:hover {
    background-color: #e64a19;
    border-color: #e64a19;
  }

  @media (max-width: 576px) {
    .email-form {
      padding: 30px;
    }

    .btn-primary {
      padding: 10px;
    }

    .form-control {
      padding: 12px;
    }
  }
</style>

</head>
<body>

  <div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="email-form">
          <h3 class="text-center mb-4">Emailing Page</h3>
          <form action=<?= site_url("/send-mail") ?> method="post" enctype="multipart/form-data">
            
            <div class="form-group mb-3">
              <label for="sender-name" class="form-label">Sender Name</label>
              <div class="input-group">
                <span class="input-group-text">
                  <i class="fas fa-user"></i>
                </span>
                <input type="text" class="form-control" id="sender-name" name="sender-name" placeholder="Enter your name">
              </div>
            </div>

            <div class="form-group mb-3">
              <label for="sender-email" class="form-label">Sender Email</label>
              <div class="input-group">
                <span class="input-group-text">
                  <i class="fas fa-envelope"></i>
                </span>
                <input type="email" class="form-control" id="sender-email" name="sender-email" placeholder="Enter your email">
              </div>
            </div>

            <div class="form-group mb-3">
              <label for="recipient-email" class="form-label">Recipient Email</label>
              <div class="input-group">
                <span class="input-group-text">
                  <i class="fas fa-user-plus"></i>
                </span>
                <input type="email" class="form-control" id="recipient-email" name="recipient-email" placeholder="Enter recipient's email">
              </div>
            </div>

            <div class="form-group mb-3">
              <label for="subject" class="form-label">Subject</label>
              <div class="input-group">
                <span class="input-group-text">
                  <i class="fas fa-heading"></i>
                </span>
                <input type="text" class="form-control" id="subject" name="subject" placeholder="Enter email subject">
              </div>
            </div>

            <div class="form-group mb-3">
              <label for="email-content" class="form-label">Email Content</label>
              <div class="input-group">
                <span class="input-group-text">
                  <i class="fas fa-edit"></i>
                </span>
                <textarea class="form-control" id="email-content" name="email-content" rows="5" placeholder="Enter your message"></textarea>
              </div>
            </div>

            <div class="form-group mb-3">
              <label for="attachment" class="form-label">Attachment</label>
              <div class="input-group">
                <span class="input-group-text">
                  <i class="fas fa-paperclip"></i>
                </span>
                <input type="file" class="form-control" id="attachment" name="attachment" size="20">
              </div>
            </div>

            <button type="submit" class="btn btn-primary w-100">Send Email</button>
          </form>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
