<?php if (session_status() === PHP_SESSION_NONE) { session_start(); } ?>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top shadow-sm border-0" style="background:linear-gradient(90deg,#0f5132,#198754);">
  <div class="container">
    <a class="navbar-brand d-flex align-items-center gap-2" href="/dimplestar/index.php">
      <img src="/dimplestar/images/logo.png" alt="Dimple Star" style="height:48px;">
      <span class="fw-semibold">Dimple Star Transport</span>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainnav">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="mainnav">
      <ul class="navbar-nav ms-auto align-items-lg-center">
        <li class="nav-item"><a class="nav-link" href="/dimplestar/index.php">HOME</a></li>
        <li class="nav-item"><a class="nav-link" href="/dimplestar/about.php">ABOUT</a></li>
        <li class="nav-item"><a class="nav-link" href="/dimplestar/terminal.php">TERMINALS</a></li>
        <li class="nav-item"><a class="nav-link" href="/dimplestar/routeschedule.php">ROUTES &amp; SCHEDULES</a></li>
        <li class="nav-item"><a class="nav-link" href="/dimplestar/contact.php">CONTACT</a></li>
        <li class="nav-item ms-lg-2 mb-2 mb-lg-0">
          <a class="btn btn-sm px-3 fw-semibold" href="/dimplestar/book.php" style="background:var(--brand);border-color:var(--brand);color:#0f2e1f;">Book Now</a>
        </li>
        <li class="nav-item dropdown ms-lg-2">
          <a class="nav-link dropdown-toggle" href="#" id="userMenu" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <?php echo isset($_SESSION['email']) ? htmlspecialchars($_SESSION['email']) : 'Account'; ?>
          </a>
          <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userMenu">
            <?php if(isset($_SESSION['email'])): ?>
              <li><a class="dropdown-item" href="/dimplestar/logout.php">LOGOUT</a></li>
            <?php else: ?>
              <li><a class="dropdown-item" href="/dimplestar/signlog.php">SIGN UP & LOGIN</a></li>
            <?php endif; ?>
          </ul>
        </li>
      </ul>
    </div>
  </div>
  <style>
    :root{ --brand:#20c997; --brand-600:#17b089; --ink:#0b2a1e; }
    .navbar .nav-link{ color:#e6fff4; }
    .navbar .nav-link:hover{ color:#c5ffea; }
  </style>
</nav>


