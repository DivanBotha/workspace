<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Software Farm develops farm management software for agricultural operations">
    <meta name="author" content="">

    <title>Accord | Software Farm</title>

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
            <h1>Accord</h1>
            <p class="lead">A complete labour management solution for modern agricultural operations.</p>
        </div>
    </section>

    <!-- Key Features Section -->
    <section class="py-5 bg-white">
        <div class="container narrow-container my-5">
            <h2 class="text-center my-5">Key Features</h2>
            <div class="row text-center">
                <div class="col-md-4 mb-4">
                    <i class="bi bi-person-check display-4 text-primary"></i>
                    <h5>Comprehensive Employee Records</h5>
                    <p>Maintain complete employee profiles, including transactions, personal details, and employment data.</p>
                </div>
                <div class="col-md-4 mb-4">
                    <i class="bi bi-calculator display-4 text-success"></i>
                    <h5>Accurate Payroll Management</h5>
                    <p>Calculate UIF, SDL, PAYE, and other deductions effortlessly.</p>
                </div>
                <div class="col-md-4 mb-4">
                    <i class="bi bi-clock display-4 text-warning"></i>
                    <h5>Flexible Payment Options</h5>
                    <p>Support various payment methods, including cash and electronic transfers.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Forms & Reports Section -->
    <section class="py-5 bg-light">
        <div class="container narrow-container my-5">
            <h2 class="text-center my-5">Forms & Reports</h2>
            <div class="row">
                <div class="col-md-6">
                    <h5>Employee Forms</h5>
                    <p>Generate leave applications, service certificates, and more.</p>
                </div>
                <div class="col-md-6">
                    <h5>Detailed Reports</h5>
                    <p>Print payslips, savings balances, loan balances, and other time-based reports.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Integration & Customization Section -->
    <section class="py-5">
        <div class="container narrow-container my-5">
            <h2 class="text-center my-5">Integration & Customization</h2>
            <p class="text-center">Easily integrate with other systems like AfriClock, TMS, and SimFini for seamless operations.</p>
            <div class="row text-center">
                <div class="col-md-4">
                    <i class="bi bi-arrow-left-right display-4 text-primary"></i>
                    <h5>System Transfers</h5>
                    <p>Import data from external systems with ease.</p>
                </div>
                <div class="col-md-4">
                    <i class="bi bi-gem display-4 text-success"></i>
                    <h5>Custom Benefits</h5>
                    <p>Set up fringe benefits, pensions, and medical aids tailored to your needs.</p>
                </div>
                <div class="col-md-4">
                    <i class="bi bi-sliders display-4 text-warning"></i>
                    <h5>Custom Deductions</h5>
                    <p>Design deductions that match your business requirements.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Call-to-Action Section -->
    <section class="py-5 bg-primary text-white text-center">
        <div class="container narrow-container my-5">
            <h2>Ready to Optimize Your Labour Management?</h2>
            <p>Discover how Accord can streamline your operations today.</p>
            <a href="../pages/downloads.php" class="btn btn-secondary btn-lg mt-3">Download a Demo</a>
        </div>
    </section>

    <!-- Include Footer -->
    <?php include("../includes/footer.php"); ?>
    
    <!-- Bootstrap Core Javascript -->
    <script src="../assets/js/bootstrap.bundle.min.js"></script>

</body>