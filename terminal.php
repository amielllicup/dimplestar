
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
  <h1 class="fw-bold">Terminals</h1>
  <p class="text-muted mb-0">Find the nearest Dimple Star terminal.</p>
</section>

<section class="container my-4">
  <div class="table-responsive shadow-sm rounded bg-white p-2">
    <table class="table align-middle mb-0">
      <thead>
        <tr>
          <th>City / Province</th>
          <th>Address</th>
          <th>Contact</th>
          <th>Hours</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Quezon City</td>
          <td>Block 1 Lot 10, Southpoint Subd., Brgy Baesa</td>
          <td>0929 209 0712</td>
          <td>6:00 AM – 10:00 PM</td>
        </tr>
        <tr>
          <td>Manila</td>
          <td>Taft Ave. corner Sen. Gil Puyat Ave.</td>
          <td>(02) 1234 5678</td>
          <td>6:00 AM – 10:00 PM</td>
        </tr>
        <tr>
          <td>Batangas</td>
          <td>Barangay Halang, Lipa City</td>
          <td>0917 222 3333</td>
          <td>5:00 AM – 9:00 PM</td>
        </tr>
      </tbody>
    </table>
  </div>
</section>

<?php include 'php_includes/footer.php'; ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
