
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
  <h1 class="fw-bold">Routes & Schedules</h1>
  <p class="text-muted mb-0">Plan your trip with our daily departures.</p>
</section>

<section class="container my-4">
  <div class="card card-rounded shadow-sm mb-3">
    <div class="card-body">
      <form class="row g-3">
        <div class="col-md-4">
          <label class="form-label">Origin</label>
          <input type="text" class="form-control" placeholder="e.g., Quezon City">
        </div>
        <div class="col-md-4">
          <label class="form-label">Destination</label>
          <input type="text" class="form-control" placeholder="e.g., Batangas">
        </div>
        <div class="col-md-3">
          <label class="form-label">Date</label>
          <input type="date" class="form-control">
        </div>
        <div class="col-md-1 d-grid">
          <label class="form-label invisible">Search</label>
          <button type="button" class="btn brand-btn">Search</button>
        </div>
      </form>
    </div>
  </div>

  <div class="table-responsive shadow-sm rounded bg-white p-2">
    <table class="table align-middle mb-0">
      <thead>
        <tr>
          <th>Route</th>
          <th>Departure</th>
          <th>Arrival</th>
          <th>Fare</th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Quezon City → Batangas</td>
          <td>07:00</td>
          <td>10:00</td>
          <td>₱280</td>
          <td><a href="book.php" class="btn btn-sm brand-btn">Book</a></td>
        </tr>
        <tr>
          <td>Manila → Lipa</td>
          <td>09:00</td>
          <td>12:00</td>
          <td>₱260</td>
          <td><a href="book.php" class="btn btn-sm brand-btn">Book</a></td>
        </tr>
        <tr>
          <td>Quezon City → Manila</td>
          <td>11:00</td>
          <td>12:30</td>
          <td>₱120</td>
          <td><a href="book.php" class="btn btn-sm brand-btn">Book</a></td>
        </tr>
      </tbody>
    </table>
  </div>
</section>

<?php include 'php_includes/footer.php'; ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
