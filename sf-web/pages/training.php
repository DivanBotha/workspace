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

    <!-- Hero Section -->
    <section class="hero bg-secondary text-center py-5">
        <div class="container narrow-container my-5">
            <h1>Empowering Your Team</h1>
        </div>
    </section>

    <!-- Training -->
    <section class="container narrow-container my-5">
        <div class="row align-items-center pb-5">
            <div class="col-md-6">
                <img src="../assets/images/imageplaceholder.jpg" class="img-fluid" alt="SimFini"> <!-- Image on the left -->
            </div>
            <div class="col-md-6">
                <h3>Book a Training Session</h3>
                <p>Software Farm offers comprehensive training to ensure that you and your team can fully leverage our software solutions. With step-by-step guidance and ongoing 
                    support, we ensure that your operations run smoothly from day one..</p>
                <ul class="list-unstyled py-4">
                    <li><i class="bi bi-check-circle-fill icon-secondary me-2"></i>Personalised training sessions</li>
                    <li><i class="bi bi-check-circle-fill icon-secondary me-2"></i>Tailored to your needs</li>
                    <li><i class="bi bi-check-circle-fill icon-secondary me-2"></i>Expert trainers available</li>
                </ul>
                <div class="text-end">
                    <a href="../assets/forms/training-booking-form.pdf" class="btn btn-primary"><i class="bi bi-download me-2"></i>Download Booking Form</a>
                </div>
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