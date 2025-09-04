
<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Dimple Star Transport</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="icon" href="images/icon.ico" type="image/x-icon">
  <style>
    :root{
      --brand:#20c997;
      --brand-700:#17b089;
      --brand-100:#e6fff6;
      --ink:#0f2e1f;
    }
    body{ background-color:#f3fff9; color:var(--ink); }
    .navbar-brand img{ height:48px; }
    .page-header{ padding:56px 0 16px; background:linear-gradient(180deg, rgba(32,201,151,.12), rgba(32,201,151,0)); }
    .brand-btn{ background:var(--brand); border-color:var(--brand); color:#0b2a1e; }
    .brand-btn:hover{ background:var(--brand-700); border-color:var(--brand-700); color:#0b2a1e; }
    .card-rounded{ border-radius:1rem; border:1px solid rgba(23,176,137,.2); }
    .badge-soft{ background:var(--brand-100); color:#0b2a1e; border:1px solid rgba(23,176,137,.35); }
    .table thead th{ background:#eafff6; }
  </style>
</head>
<body>
<?php include 'php_includes/navbar.php'; ?>

<section class="container page-header">
  <h1 class="fw-bold">Account</h1>
  <p class="text-muted mb-0">Login or create an account to manage your bookings.</p>
</section>

<section class="container my-4">
  <div class="row g-4">
    <div class="col-lg-6">
      <div class="card card-rounded shadow-sm h-100">
        <div class="card-body">
          <h5 class="fw-semibold mb-3">Login</h5>
          <form method="post" action="login.php" class="row g-3">
            <div class="col-12">
              <label class="form-label">Email</label>
              <input type="email" class="form-control" name="email" required>
            </div>
            <div class="col-12">
              <label class="form-label">Password</label>
              <input type="password" class="form-control" name="password" required>
            </div>
            <div class="col-12 d-flex justify-content-end">
              <button type="submit" class="btn brand-btn">Login</button>
            </div>
          </form>
        </div>
      </div>
    </div>

    <div class="col-lg-6">
      <div class="card card-rounded shadow-sm h-100">
        <div class="card-body">
          <h5 class="fw-semibold mb-3">Sign Up</h5>
          <form method="post" action="register.php" class="row g-3">
            <div class="col-md-6">
              <label class="form-label">First Name</label>
              <input type="text" class="form-control" name="first_name" required>
            </div>
            <div class="col-md-6">
              <label class="form-label">Last Name</label>
              <input type="text" class="form-control" name="last_name" required>
            </div>
            <div class="col-12">
              <label class="form-label">Email</label>
              <input type="email" class="form-control" name="email" required>
            </div>
            <div class="col-md-6">
              <label class="form-label">Password</label>
              <input type="password" class="form-control" name="password" required>
            </div>
            <div class="col-md-6">
              <label class="form-label">Confirm Password</label>
              <input type="password" class="form-control" name="confirm_password" required>
            </div>
            <div class="col-12 form-check">
              <input class="form-check-input" type="checkbox" id="terms" required>
              <label class="form-check-label" for="terms">
                I agree to the Terms & Privacy Policy
              </label>
            </div>
            <div class="col-12 d-flex justify-content-end">
              <button type="submit" class="btn brand-btn">Create Account</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>

<?php include 'php_includes/footer.php'; ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
