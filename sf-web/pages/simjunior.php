<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Software Farm develops farm management software for agricultural operations">
    <meta name="author" content="">

    <title>SimJunior | Software Farm</title>

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
            <h1>SimJunior</h1>
            <p class="lead">The perfect financial program for small farmers and small businesses.</p>
        </div>
    </section>

    <!-- Key Features Section -->
    <section class="py-5 bg-white">
        <div class="container narrow-container my-5">
            <h2 class="text-center my-5">Key Features</h2>
            <div class="row text-center">
                <div class="col-md-4 mb-4">
                    <i class="bi bi-journal-bookmark-fill display-4 text-primary"></i>
                    <h5>Comprehensive Ledger</h5>
                    <p>Manage general ledgers, creditors, and debtors effortlessly.</p>
                </div>
                <div class="col-md-4 mb-4">
                    <i class="bi bi-stack display-4 text-success"></i>
                    <h5>Unlimited Accounts</h5>
                    <p>Create unlimited accounts, sub-accounts, and enterprises for flexibility.</p>
                </div>
                <div class="col-md-4 mb-4">
                    <i class="bi bi-calendar-check display-4 text-warning"></i>
                    <h5>Period Closings</h5>
                    <p>Perform VAT and month-end period closings with ease.</p>
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
                    <p>Seamlessly import external data such as creditor accounts and Duet sales.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Reports Section -->
    <section class="py-5">
        <div class="container narrow-container my-5">
            <h2 class="text-center my-5">Detailed Reporting</h2>
            <p class="text-center">Generate customizable reports for better business insights.</p>
            <div class="row text-center">
                <div class="col-md-4">
                    <i class="bi bi-graph-up display-4 text-primary"></i>
                    <h5>Income Statements</h5>
                </div>
                <div class="col-md-4">
                    <i class="bi bi-bar-chart-line display-4 text-success"></i>
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
            <h2>Ready to Simplify Your Small Business Finances?</h2>
            <p>Streamline your financial operations with SimJunior today.</p>
            <a href="../pages/downloads.php" class="btn btn-secondary btn-lg mt-3">Download a Demo</a>
        </div>
    </section>

    <!-- Include Footer -->
    <?php include("../includes/footer.php"); ?>
    
    <!-- Bootstrap Core Javascript -->
    <script src="../assets/js/bootstrap.bundle.min.js"></script>

</body>