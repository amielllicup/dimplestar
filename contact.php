
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
  <h1 class="fw-bold">Contact Us</h1>
  <p class="text-muted mb-0">We'd love to hear from you.</p>
</section>

<section class="container my-4">
  <div class="row g-4">
    <div class="col-lg-6">
      <div class="card card-rounded shadow-sm h-100">
        <div class="card-body">
          <form method="post" action="sendmessage.php">
            <div class="mb-3">
              <label class="form-label">Full Name</label>
              <input type="text" class="form-control" name="name" required>
            </div>
            <div class="mb-3">
              <label class="form-label">Email</label>
              <input type="email" class="form-control" name="email" required>
            </div>
            <div class="mb-3">
              <label class="form-label">Message</label>
              <textarea class="form-control" name="message" rows="5" required></textarea>
            </div>
            <button type="submit" class="btn brand-btn">Send Message</button>
          </form>
        </div>
      </div>
    </div>
    <div class="col-lg-6">
      <div class="card card-rounded shadow-sm h-100">
        <div class="card-body">
          <h5 class="fw-semibold">Head Office</h5>
          <p class="mb-1">Block 1 Lot 10, Southpoint Subd., Brgy Baesa, Quezon City</p>
          <p class="mb-1">📞 0929 209 0712</p>
          <p class="mb-0">✉️ support@dimplestar.example</p>
          <hr>
          <h6 class="fw-semibold">Hours</h6>
          <p class="mb-0">Mon–Sun: 6:00 AM – 10:00 PM</p>
        </div>
      </div>
    </div>
  </div>
</section>

<?php include 'php_includes/footer.php'; ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
