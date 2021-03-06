<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Tutor Management System | Registration</title>
  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="styles/bootstrap.min.css">
</head>

<body class="bg-light">

  <div class="container">
    <div class="py-5 text-center">
      <h2>Tutor Management System</h2>
      <p class="lead">Student Registration</p>
      <?php if(isset($_COOKIE['error']))echo "<span class='text-danger'>".$_COOKIE['error']."</span>";
      ?>
    </div>

    <div class="row justify-content-center">
      <div class="col-md-8 order-md-1">

        <!-- <h4 class="mb-3">Billing address</h4> -->
        <form class="needs-validation" method="post" action="../controllers/AuthController.php" novalidate>
          <div class="mb-3">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" placeholder="Name" value="<?php if(isset($_COOKIE['name'])) echo $_COOKIE['name'];?>" name="name" required>
            <div class="invalid-feedback">
              Valid Name is required.
            </div>
          </div>

          <div class="mb-3">
            <label for="username">Username</label>
            <input type="text" class="form-control" id="username" placeholder="Username" value="<?php if(isset($_COOKIE['username'])) echo $_COOKIE['username'];?>" name="username" required>
            <div class="invalid-feedback <?php if(isset($_COOKIE['error_username'])) echo 'd-block';?>">
              Unique username is required.
            </div>
          </div>

          <div class="mb-3">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" placeholder="you@gmail.com" name="email" value="<?php if(isset($_COOKIE['email'])) echo $_COOKIE['email'];?>" required>
            <div class="invalid-feedback <?php if(isset($_COOKIE['error_email'])) echo 'd-block';?>">
              Please enter a valid email address.
            </div>
          </div>


          <div class="mb-3">
            <label for="phone">Phone</label>
            <input type="number" class="form-control" id="phone" placeholder="01XXXXXXXXX" value="<?php if(isset($_COOKIE['phone'])) echo $_COOKIE['phone'];?>" name="phone" required>
            <div class="invalid-feedback">
              Valid Phone number is required.
            </div>
          </div>

          <div class="mb-3">
            <label for="address">Address</label>
            <input type="text" class="form-control" id="address" name="address" value="<?php if(isset($_COOKIE['address'])) echo $_COOKIE['address'];?>" required>
            <div class="invalid-feedback">
              Please enter your address.
            </div>
          </div>

          <div class="row">
            <div class="col-md-5 mb-3">
              <label for="gender">Gender</label>
              
              <select class="custom-select d-block w-100" id="gender" name="gender" required>
                <option value="1">Male</option>
                <option value="2">Female</option>
              </select>

              <div class="invalid-feedback">
                Please select your gender.
              </div>
            </div>
            <div class="col-md-4 mb-3">
              <label for="group">Group</label>
              <select class="custom-select d-block w-100" id="group" name="group" required>
                <option value="1">Science</option>
                <option value="2">Arts</option>
                <option value="3">Commerce</option>
                <option value="4">None</option>
              </select>
              <div class="invalid-feedback">
                Please provide your group.
              </div>
            </div>
            <div class="col-md-3 mb-3">
              <label for="medium">Medium</label>
              <select class="custom-select d-block w-100" name="medium" id="medium" required>
                <option value="1">Bangla</option>
                <option value="2">English</option>
                <option value="3">English Medium</option>
              </select>
              <div class="invalid-feedback">
                Please provide your Medium.
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-3 mb-3">
              <label for="class">Class</label>
              <input type="number" class="form-control" id="class" name="class" value="<?php if(isset($_COOKIE['class'])) echo $_COOKIE['class'];?>" required>
              <div class="invalid-feedback">
                Class is required.
              </div>
            </div>
            <div class="col-md-9 mb-3">
              <label for="institution">Institution</label>
              <input type="text" class="form-control" id="firinstitutionstName" name="institution" value="<?php if(isset($_COOKIE['institution'])) echo $_COOKIE['institution'];?>" required>
              <div class="invalid-feedback">
                Institution name is required.
              </div>
            </div>
          </div>

          <hr class="mb-4">

          <div class="mb-3">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" name="password" required>
            <div class="invalid-feedback">
              Please enter your password.
            </div>
          </div>
          <input type="hidden" name="type" value="STUDENT">
          <button class="btn btn-primary btn-lg btn-block" type="submit" name="submit" value="register">Register</button>
        </form>
      </div>
    </div>

    <footer class="my-5 pt-5 text-muted text-center text-small">
      <div class="row justify-content-center">
        <div class="mb-3">
          <a class="btn btn-primary btn-block" href="index.php">< Back to Login</a>
        </div>
      </div>

    </footer>
  </div>

      <script>
      (function() {
        'use strict';

        window.addEventListener('load', function() {
          // Fetch all the forms we want to apply custom Bootstrap validation styles to
          var forms = document.getElementsByClassName('needs-validation');

          // Loop over them and prevent submission
          var validation = Array.prototype.filter.call(forms, function(form) {
            form.addEventListener('submit', function(event) {
              if (form.checkValidity() === false) {
                event.preventDefault();
                event.stopPropagation();
              }
              form.classList.add('was-validated');
            }, false);
          });
        }, false);
      })();
    </script>
  </body>
  </html>
