<?php
// Current file name without query string
$current_page = basename($_SERVER['PHP_SELF']);
?>

<nav class="navbar navbar-expand-lg bg-body-tertiary pt-5 shadow fixed-top">
  <div class="container">
    <a class="navbar-brand d-flex align-items-center gap-2" href="/index.php">
      <img class="logo" src="../assets/images/sflogo.png" style="max-height: 40px;">
      Software Farm
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link" href="/index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/pages/about.php">About Us</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="/pages/products.php" id="productsDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Products
          </a>
          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-scroll p-3" aria-labelledby="productsDropdown">
            <div class="d-lg-flex flex-lg-row flex-column p-3" style="width: 600px;">
              <!-- Column 1 -->
              <div class="col-lg-4">
                <h6 class="dropdown-header text-primary">Financial Management</h6>
                <li><a class="dropdown-item" href="../pages/simfini.php" data-bs-toggle="tooltip" title="Financial management for medium to large businesses.">SimFini</a></li>
                <li><a class="dropdown-item" href="../pages/simjunior.php" data-bs-toggle="tooltip" title="Financial management for small to medium businesses.">SimJunior</a></li>
                <li><a class="dropdown-item" href="../pages/pointofsale.php" data-bs-toggle="tooltip" title="Point of Sale system for small businesses.">Point of Sale</a></li>
                <div class="pt-3"></div>
                <h6 class="dropdown-header text-primary">Employee Management</h6>
                <li><a class="dropdown-item" href="../pages/accord.php" data-bs-toggle="tooltip" title="Point of Sale system for small businesses.">Accord</a></li>
                <div class="dropdown-divider"></div>
              </div>
              <!-- Column 2 -->
              <div class="col-lg-4">
                <h6 class="dropdown-header text-primary">Livestock Management</h6>
                <li><a class="dropdown-item" href="../pages/agrimilk.php" data-bs-toggle="tooltip" title="Point of Sale system for small businesses.">AgriMilk</a></li>
                <li><a class="dropdown-item" href="../pages/agribeef.php" data-bs-toggle="tooltip" title="Point of Sale system for small businesses.">AgriBeef</a></li>
                <li><a class="dropdown-item" href="../pages/feedlot.php" data-bs-toggle="tooltip" title="Point of Sale system for small businesses.">Feedlot</a></li>
                <div class="pt-3"></div>
                <h6 class="dropdown-header text-primary">Vehicle Management</h6>
                <li><a class="dropdown-item" href="../pages/vehiclecost.php" data-bs-toggle="tooltip" title="Point of Sale system for small businesses.">Vehicle Cost</a></li>
                <div class="dropdown-divider"></div>
              </div>
              <!-- Column 3 -->
              <div class="col-lg-4">
                <h6 class="dropdown-header text-primary">Crops and Marketable Produce</h6>
                <li><a class="dropdown-item" href="../pages/duet.php" data-bs-toggle="tooltip" title="Point of Sale system for small businesses.">Duet</a></li>
                <li><a class="dropdown-item" href="../pages/saaiplan.php" data-bs-toggle="tooltip" title="Point of Sale system for small businesses.">Saaiplan</a></li>
                <div class="pt-3"></div>
                <h6 class="dropdown-header text-primary">Other Software</h6>
                <li><a class="dropdown-item" href="../pages/rainstat.php" data-bs-toggle="tooltip" title="Point of Sale system for small businesses.">RainStat</a></li>
                <li><a class="dropdown-item" href="../pages/hand.php" data-bs-toggle="tooltip" title="Point of Sale system for small businesses.">Hand</a></li>
                <div class="dropdown-divider"></div>
                 <!-- View all products row -->
                <li><a class="dropdown-header text-primary fw-bold" href="/pages/products.php">View All Products</a></li>
              </div>
            </div>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/pages/dealers.php">Dealers</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/pages/pricing.php">Pricing</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/pages/training.php">Training</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/pages/downloads.php">Downloads</a></li>
        <li class="nav-item">
          <a class="nav-link" href="/pages/FAQs.php">FAQ's</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/pages/contact.php">Contact Us</a>
        </li>
      </ul>
    </div>
  </div>
</nav>