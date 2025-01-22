<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Software Farm develops farm management software for agricultural operations">
    <meta name="author" content="">

    <title>SimFini | Software Farm</title>

    <link rel="icon" type="image/x-icon" href="../assets/images/favicon.ico" />

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="../assets/css/styles.css">

    <!-- Google Font Link -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">


</head>

<body>   
    <!-- Include Navbar -->
    <?php include("../includes/navbar.php"); ?>
    
    <!-- Include Header -->
    <?php include("../includes/header.php"); ?>

    <!-- Hero Section -->
    <section class="hero bg-light text-center py-5">
        <div class="container narrow-container my-5">
            <h1>SimFini</h1>
            <p class="lead">The ultimate financial management solution for modern farmers and agricultural businesses.</p>
        </div>
    </section>

    <!-- Key Features Section -->
    <section class="py-5 bg-white">
        <div class="container narrow-container my-5">
            <h2 class="text-center my-5">Key Features</h2>
            <div class="row text-center">
                <div class="col-md-4 mb-4">
                    <i class="bi bi-bookmark-check display-4 text-primary"></i>
                    <h5>Comprehensive Financial Management</h5>
                    <p>Manage ledgers, creditors, debtors, and more with ease.</p>
                </div>
                <div class="col-md-4 mb-4">
                    <i class="bi bi-graph-up-arrow display-4 text-success"></i>
                    <h5>5-Year Budgeting</h5>
                    <p>Plan ahead with powerful budgeting tools for long-term success.</p>
                </div>
                <div class="col-md-4 mb-4">
                    <i class="bi bi-box display-4 text-warning"></i>
                    <h5>Inventory & Livestock Management</h5>
                    <p>Streamline inventory control and track livestock efficiently.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Optional Modules Section -->
    <section class="py-5 bg-light">
        <div class="container narrow-container my-5">
            <h2 class="text-center my-5">Optional Modules</h2>
            <div class="row">
                <div class="col-md-6">
                    <h5>Data Importing</h5>
                    <p>Import external data like creditor accounts and sales information effortlessly.</p>
                </div>
                <div class="col-md-6">
                    <h5>Data Merge</h5>
                    <p>Combine multiple datasets into one for a comprehensive overview.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Reports Section -->
    <section class="py-5">
        <div class="container narrow-container my-5">
            <h2 class="text-center my-5">Detailed Reporting</h2>
            <p class="text-center">Generate customizable, date-defined reports to gain insights into your business performance.</p>
            <div class="row text-center">
                <div class="col-md-4">
                    <i class="bi bi-bar-chart-line display-4 text-primary"></i>
                    <h5>Income Statements</h5>
                </div>
                <div class="col-md-4">
                    <i class="bi bi-file-earmark-bar-graph display-4 text-success"></i>
                    <h5>Balance Sheets</h5>
                </div>
                <div class="col-md-4">
                    <i class="bi bi-receipt display-4 text-warning"></i>
                    <h5>VAT Reports</h5>
                </div>
            </div>
        </div>
    </section>

    <!-- Backup & Security Section -->
    <section class="py-5 bg-light">
        <div class="container narrow-container text-center my-5">
            <h2 class="my-5">Backup & Security</h2>
            <p>Secure your data with flexible backup options: save to CD, USB, network, or hard drive.</p>
        </div>
    </section>

    <!-- Call-to-Action Section -->
    <section class="py-5 bg-primary text-white text-center">
        <div class="container narrow-container my-5">
            <h2>Ready to Simplify Your Farm's Financial Management?</h2>
            <p>Take control of your operations with SimFini today.</p>
            <a href="../pages/downloads.php" class="btn btn-secondary btn-lg mt-3">Download a Demo</a>
        </div>
    </section>

    <!-- Include Footer -->
    <?php include("../includes/footer.php"); ?>
    
    <!-- Bootstrap Core Javascript -->
    <script src="../assets/js/bootstrap.bundle.min.js"></script>

</body>