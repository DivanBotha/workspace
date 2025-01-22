<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Software Farm develops farm management software for agricultural operations">
    <meta name="author" content="">

    <title>AgriBeef | Software Farm</title>

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
            <h1>AgriBeef</h1>
            <p class="lead">The management program for commercial and stud herds.</p>
        </div>
    </section>

    <!-- Key Features Section -->
    <section class="py-5 bg-white">
        <div class="container narrow-container my-5">
            <h2 class="text-center my-5">Key Features</h2>
            <div class="row text-center">
                <div class="col-md-4 mb-4">
                    <i class="bi bi-diagram-3 display-4 text-primary"></i>
                    <h5>Combined Data Sets</h5>
                    <p>Manage commercial and stud herds in one comprehensive dataset.</p>
                </div>
                <div class="col-md-4 mb-4">
                    <i class="bi bi-scales display-4 text-success"></i>
                    <h5>LMI-Scale Integration</h5>
                    <p>Transfer electronic scale weights seamlessly into AgriBeef V3.</p>
                </div>
                <div class="col-md-4 mb-4">
                    <i class="bi bi-upload display-4 text-warning"></i>
                    <h5>Data Transfers</h5>
                    <p>Connect with Intergis and BreedPlan for easy electronic data transfer.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Additional Features Section -->
    <section class="py-5 bg-light">
        <div class="container narrow-container my-5">
            <h2 class="text-center my-5">Additional Features</h2>
            <div class="row">
                <div class="col-md-6">
                    <h5>Breeding Society Approval</h5>
                    <p>Recognized by most breeding societies, ensuring compliance and accuracy.</p>
                </div>
                <div class="col-md-6">
                    <h5>Veterinary Management</h5>
                    <p>A complete veterinary section with provisions for management actions.</p>
                </div>
                <div class="col-md-6">
                    <h5>AI and Breeding</h5>
                    <p>Handle all artificial insemination and breeding processes efficiently.</p>
                </div>
                <div class="col-md-6">
                    <h5>Performance Testing</h5>
                    <p>Track and evaluate herd performance with robust testing features.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Reports Section -->
    <section class="py-5">
        <div class="container narrow-container my-5">
            <h2 class="text-center my-5">Detailed Reporting</h2>
            <p class="text-center">Access insightful reports, including animal generations and family trees, to make data-driven decisions for your herds.</p>
            <div class="row text-center">
                <div class="col-md-4">
                    <i class="bi bi-diagram-2 display-4 text-primary"></i>
                    <h5>Animal Generations</h5>
                </div>
                <div class="col-md-4">
                    <i class="bi bi-people display-4 text-success"></i>
                    <h5>Family Trees</h5>
                </div>
                <div class="col-md-4">
                    <i class="bi bi-bar-chart display-4 text-warning"></i>
                    <h5>Performance Metrics</h5>
                </div>
            </div>
        </div>
    </section>

    <!-- Call-to-Action Section -->
    <section class="py-5 bg-primary text-white text-center">
        <div class="container narrow-container my-5">
            <h2>Streamline Your Herd Management with AgriBeef</h2>
            <p>Experience the power and flexibility of AgriBeef today.</p>
            <a href="../pages/downloads.php" class="btn btn-secondary btn-lg mt-3">Download a Demo</a>
        </div>
    </section>

    <!-- Include Footer -->
    <?php include("../includes/footer.php"); ?>
    
    <!-- Bootstrap Core Javascript -->
    <script src="../assets/js/bootstrap.bundle.min.js"></script>

</body>