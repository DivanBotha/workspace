<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Software Farm develops farm management software for agricultural operations">
    <meta name="author" content="">

    <title>AgriMilk | Software Farm</title>

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
            <h1>AgriMilk</h1>
            <p class="lead">The premier dairy-herd management software for commercial and stud dairy farmers.</p>
        </div>
    </section>

    <!-- Key Features Section -->
    <section class="py-5 bg-white">
        <div class="container narrow-container my-5">
            <h2 class="text-center my-5">Key Features</h2>
            <div class="row text-center">
                <div class="col-md-4 mb-4">
                    <i class="bi bi-droplet-fill display-4 text-primary"></i>
                    <h5>Milk Recording</h5>
                    <p>Approved by the official milk recording scheme for accurate and reliable data.</p>
                </div>
                <div class="col-md-4 mb-4">
                    <i class="bi bi-gender-male display-4 text-success"></i>
                    <h5>Complete Herd Management</h5>
                    <p>Manage cows, bulls, calves, and historical animals efficiently.</p>
                </div>
                <div class="col-md-4 mb-4">
                    <i class="bi bi-clipboard-pulse display-4 text-warning"></i>
                    <h5>Veterinary Section</h5>
                    <p>Track veterinary actions and manage health records with ease.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Advanced Features Section -->
    <section class="py-5 bg-light">
        <div class="container narrow-container my-5">
            <h2 class="text-center my-5">Advanced Features</h2>
            <div class="row">
                <div class="col-md-6">
                    <h5>Electronic Data Transfer</h5>
                    <p>Seamlessly transfer milk recordings, birth notifications, and more.</p>
                </div>
                <div class="col-md-6">
                    <h5>Unlimited Breeds & Herds</h5>
                    <p>Manage multiple herds and unlimited breeds within one dataset.</p>
                </div>
                <div class="col-md-6 mt-4">
                    <h5>AI & Breeding Records</h5>
                    <p>Comprehensive artificial insemination and breeding tracking capabilities.</p>
                </div>
                <div class="col-md-6 mt-4">
                    <h5>Feed & Ration Balancing</h5>
                    <p>Built-in tools for feed management and ration balancing.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Reporting Section -->
    <section class="py-5">
        <div class="container narrow-container my-5">
            <h2 class="text-center my-5">Detailed Reporting</h2>
            <p class="text-center">Generate insightful reports for milk recordings, calving records, animal lists, and more.</p>
            <div class="row text-center">
                <div class="col-md-4">
                    <i class="bi bi-bar-chart-line display-4 text-primary"></i>
                    <h5>Milk Production</h5>
                </div>
                <div class="col-md-4">
                    <i class="bi bi-journal-text display-4 text-success"></i>
                    <h5>Calving Records</h5>
                </div>
                <div class="col-md-4">
                    <i class="bi bi-card-checklist display-4 text-warning"></i>
                    <h5>Animal Lists</h5>
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
            <h2>Ready to Optimize Your Dairy Farm?</h2>
            <p>Take control of your herd management with AgriMilk today.</p>
            <a href="../pages/downloads.php" class="btn btn-secondary btn-lg mt-3">Download a Demo</a>
        </div>
    </section>
    <!-- Include Footer -->
    <?php include("../includes/footer.php"); ?>
    
    <!-- Bootstrap Core Javascript -->
    <script src="../assets/js/bootstrap.bundle.min.js"></script>

</body>