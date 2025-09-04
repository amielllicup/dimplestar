
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
    .hero{ background:linear-gradient(rgba(23,176,137,.8),rgba(15,81,50,.85)), url('slide/images/b2.png') center/cover no-repeat; color:#fff; padding:96px 20px; text-align:center; }
    .page-header{ padding:56px 0 16px; background:linear-gradient(180deg, rgba(32,201,151,.12), rgba(32,201,151,0)); }
    .brand-btn{ background:var(--brand); border-color:var(--brand); color:#0b2a1e; }
    .brand-btn:hover{ background:var(--brand-700); border-color:var(--brand-700); color:#0b2a1e; }
    .card-rounded{ border-radius:1rem; border:1px solid rgba(23,176,137,.2); }
    .badge-soft{ background:var(--brand-100); color:#0b2a1e; border:1px solid rgba(23,176,137,.35); }
    .table thead th{ background:#eafff6; }
    .icon-pill{ width:40px; height:40px; border-radius:999px; display:inline-flex; align-items:center; justify-content:center; background:var(--brand-100); border:1px solid rgba(23,176,137,.35); color:#0b2a1e; }
  </style>
</head>
<body>
<?php include 'php_includes/navbar.php'; ?>

<section class="hero">
  <div class="container">
    <span class="badge badge-soft text-uppercase mb-3">Who we are</span>
    <h1 class="fw-bold mb-2">About Dimple Star Transport</h1>
    <p class="mb-0">Safe, reliable, and comfortable rides connecting communities across the Philippines.</p>
    <div class="mt-4">
      <a href="book.php" class="btn brand-btn btn-lg px-4">Book Your Trip</a>
    </div>
  </div>
  </section>

<section class="container my-4">
  <div class="card card-rounded shadow-sm">
    <div class="card-body p-4">
      <div class="row g-4 align-items-center">
        <div class="col-lg-7">
          <p>Dimple Star Transport has served commuters across the Philippines with dependable, comfortable, and affordable bus services. Our mission is to connect communities while prioritizing passenger safety and convenience.</p>
          <p>We continuously improve our fleet, routes, and customer support to make every trip hassle‑free—from booking to arrival.</p>
          <ul class="mb-0">
            <li>Professional drivers and support staff</li>
            <li>Regular vehicle maintenance and safety checks</li>
            <li>Expanding terminals and route coverage</li>
          </ul>
        </div>
        <div class="col-lg-5">
          <div class="row g-3">
            <div class="col-6">
              <div class="p-3 border rounded-4 text-center" style="background:#ffffffb3;">
                <div class="icon-pill mb-2">🚌</div>
                <div class="fw-bold h5 mb-0">80+</div>
                <div class="small text-muted">Buses in fleet</div>
              </div>
            </div>
            <div class="col-6">
              <div class="p-3 border rounded-4 text-center" style="background:#ffffffb3;">
                <div class="icon-pill mb-2">🕒</div>
                <div class="fw-bold h5 mb-0">24/7</div>
                <div class="small text-muted">Support</div>
              </div>
            </div>
            <div class="col-6">
              <div class="p-3 border rounded-4 text-center" style="background:#ffffffb3;">
                <div class="icon-pill mb-2">📍</div>
                <div class="fw-bold h5 mb-0">40+</div>
                <div class="small text-muted">Terminals</div>
              </div>
            </div>
            <div class="col-6">
              <div class="p-3 border rounded-4 text-center" style="background:#ffffffb3;">
                <div class="icon-pill mb-2">⭐</div>
                <div class="fw-bold h5 mb-0">4.8</div>
                <div class="small text-muted">Avg. rating</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php include 'php_includes/footer.php'; ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
