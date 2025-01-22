<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Software Farm develops farm management software for agricultural operations">
    <meta name="author" content="">

    <title>Software Farm</title>

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

    <!-- Normal Training -->
    <section class="py-5">
    <div class="container d-flex align-items-center">
            <!-- Left Side: Image -->
            <div class="col-md-6 text-center">
                <img src="../assets/images/training.jpg" alt="Training Session" class="img-fluid rounded">
            </div>

            <!-- Right Side: Text -->
            <div class="col-md-6">
                <h2>Book Your Training Session</h2>
                <ul class="list-unstyled">
                    <li><i class="bi bi-check-circle-fill icon-secondary me-2"></i> Personalized training sessions</li>
                    <li><i class="bi bi-check-circle-fill icon-secondary me-2"></i> Tailored to your needs</li>
                    <li><i class="bi bi-check-circle-fill icon-secondary me-2"></i> Expert trainers available</li>
                </ul>
                <a href="../assets/forms/training-booking-form.pdf" download class="btn btn-primary mt-3">
                    <i class="bi bi-download me-2"></i>Download Booking Form
                </a>
            </div>
        </div>
    </section>

    <!-- Training Events -->
    <section class="text-center py-5">
        <div class="container narrow-container">
            <h2>Training Events</h2>
        </div>
     </section>

    <!-- Include Footer -->
    <?php include("../includes/footer.php"); ?>
    
    <!-- Bootstrap Core Javascript -->
    <script src="../assets/js/bootstrap.bundle.min.js"></script>

</body>