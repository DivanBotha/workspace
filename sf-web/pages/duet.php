<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Software Farm develops farm management software for agricultural operations">
    <meta name="author" content="">

    <title>Duet | Software Farm</title>

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
            <h1>Duet</h1>
            <p class="lead">Comprehensive management software for marketable produce and farming operations.</p>
        </div>
    </section>

    <!-- Key Features Section -->
    <section class="py-5 bg-white">
        <div class="container narrow-container my-5">
            <h2 class="text-center my-5">Key Features</h2>
            <div class="row text-center">
                <div class="col-md-4 mb-4">
                    <i class="bi bi-grid-3x3-gap display-4 text-primary"></i>
                    <h5>Production Unit Management</h5>
                    <p>Track produce delivery linked to lands or blocks.</p>
                </div>
                <div class="col-md-4 mb-4">
                    <i class="bi bi-arrow-repeat display-4 text-success"></i>
                    <h5>Technofresh Integration</h5>
                    <p>Seamlessly import market sales electronically.</p>
                </div>
                <div class="col-md-4 mb-4">
                    <i class="bi bi-clipboard-data display-4 text-warning"></i>
                    <h5>Unlimited Customization</h5>
                    <p>Set up unlimited lands, crops, grades, and packaging.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Cost & Inventory Section -->
    <section class="py-5 bg-light">
        <div class="container narrow-container my-5">
            <h2 class="text-center my-5">Cost & Inventory Management</h2>
            <div class="row">
                <div class="col-md-6">
                    <h5>Cost Tracking</h5>
                    <p>Enter transport and packaging costs for each crop.</p>
                </div>
                <div class="col-md-6">
                    <h5>Inventory Monitoring</h5>
                    <p>Keep detailed records of all packaging materials.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Reporting Section -->
    <section class="py-5">
        <div class="container narrow-container my-5">
            <h2 class="text-center my-5">Detailed Reporting</h2>
            <p class="text-center">Access reports on lands, crops, markets, agents, and much more for comprehensive insights.</p>
            <div class="row text-center">
                <div class="col-md-4">
                    <i class="bi bi-bar-chart-line display-4 text-primary"></i>
                    <h5>Market Performance</h5>
                </div>
                <div class="col-md-4">
                    <i class="bi bi-journal-check display-4 text-success"></i>
                    <h5>Agent Evaluation</h5>
                </div>
                <div class="col-md-4">
                    <i class="bi bi-file-earmark-text display-4 text-warning"></i>
                    <h5>Seasonal Summaries</h5>
                </div>
            </div>
        </div>
    </section>

    <!-- Harvest & Payment Section -->
    <section class="py-5 bg-light">
        <div class="container narrow-container my-5">
            <h2 class="text-center my-5">Harvest & Payment Tracking</h2>
            <p>Record harvester details, payments, and delivery notes efficiently for better operational control.</p>
        </div>
    </section>

    <!-- Call-to-Action Section -->
    <section class="py-5 bg-primary text-white text-center">
        <div class="container narrow-container my-5">
            <h2>Ready to Optimize Your Produce Management?</h2>
            <p>Maximize your productivity with Duet today.</p>
            <a href="../pages/downloads.php" class="btn btn-secondary btn-lg mt-3">Download a Demo</a>
        </div>
    </section>

    <!-- Include Footer -->
    <?php include("../includes/footer.php"); ?>
    
    <!-- Bootstrap Core Javascript -->
    <script src="../assets/js/bootstrap.bundle.min.js"></script>

</body>