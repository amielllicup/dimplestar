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

<header class="hero">
  <h1 class="display-5 fw-bold">DIMPLE STAR TRANSPORT BUS COMPANY</h1>
  <p class="lead mb-3">COMFORT - SAFETY - RELIABLE - AFFORDABLE</p>
  <?php if(!isset($_SESSION['email'])): ?>
    <a href="signlog.php" class="btn brand-btn btn-lg">SIGN UP & LOGIN</a>
  <?php else: ?>
    <a href="book.php" class="btn brand-btn btn-lg">Book a Trip</a>
  <?php endif; ?>
</header>

<section class="container my-5">
  <div class="row g-4">
    <div class="col-md-4">
      <div class="card card-rounded h-100 shadow-sm">
        <div class="card-body">
          <h5 class="card-title">Modern Fleet</h5>
          <p class="card-text">Air-conditioned buses with monitored maintenance for a smooth ride.</p>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card card-rounded h-100 shadow-sm">
        <div class="card-body">
          <h5 class="card-title">Nationwide Routes</h5>
          <p class="card-text">Convenient terminals and routes that connect key cities and provinces.</p>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card card-rounded h-100 shadow-sm">
        <div class="card-body">
          <h5 class="card-title">Easy Booking</h5>
          <p class="card-text">Reserve seats online and manage your trips with a few clicks.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<div id="mainCarousel" class="carousel slide container shadow-lg rounded" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active"><img src="slide/images/b1.png" class="d-block w-100 rounded" alt="Bus 1"></div>
    <div class="carousel-item"><img src="slide/images/b2.png" class="d-block w-100 rounded" alt="Bus 2"></div>
    <div class="carousel-item"><img src="slide/images/b3.png" class="d-block w-100 rounded" alt="Bus 3"></div>
    <div class="carousel-item"><img src="slide/images/b4.png" class="d-block w-100 rounded" alt="Bus 4"></div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#mainCarousel" data-bs-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#mainCarousel" data-bs-slide="next">
    <span class="carousel-control-next-icon"></span>
  </button>
</div>
<BR>
<?php include 'php_includes/footer.php'; ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
