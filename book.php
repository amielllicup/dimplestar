
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
  <h1 class="fw-bold">Book a Trip</h1>
  <p class="text-muted mb-0">Fill in your travel details to reserve a seat.</p>
</section>

<section class="container my-4">
  <div class="card card-rounded shadow-sm">
    <div class="card-body">
      <form method="post" action="process_booking.php" class="row g-3">
        <div class="col-md-4">
          <label class="form-label">Origin</label>
          <input type="text" class="form-control" name="origin" required>
        </div>
        <div class="col-md-4">
          <label class="form-label">Destination</label>
          <input type="text" class="form-control" name="destination" required>
        </div>
        <div class="col-md-4">
          <label class="form-label">Travel Date</label>
          <input type="date" class="form-control" name="date" required>
        </div>
        <div class="col-md-4">
          <label class="form-label">Departure Time</label>
          <input type="time" class="form-control" name="time" required>
        </div>
        <div class="col-md-4">
          <label class="form-label">Passengers</label>
          <input type="number" min="1" value="1" class="form-control" name="passengers" required>
        </div>
        <div class="col-md-4">
          <label class="form-label">Seat Preference</label>
          <select class="form-select" name="seat_pref">
            <option value="Any">Any</option>
            <option value="Window">Window</option>
            <option value="Aisle">Aisle</option>
          </select>
        </div>
        <div class="col-12 d-flex justify-content-end gap-2">
          <button type="reset" class="btn btn-outline-secondary">Clear</button>
          <button type="submit" class="btn brand-btn">Reserve Seat</button>
        </div>
      </form>
    </div>
  </div>
</section>

<?php include 'php_includes/footer.php'; ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
