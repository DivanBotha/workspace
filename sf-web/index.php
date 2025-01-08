<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Software Farm develops farm management software for agricultural operations">
    <meta name="author" content="">

    <title>Software Farm</title>

    <link rel="icon" type="image/x-icon" href="assets/images/favicon.ico" />

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/styles.css">

    <!-- Google Font Link -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">


</head>

<body>
    <!-- Include Header -->
    <?php include("includes/header.php"); ?>

    <!-- Include Navbar -->
    <?php include("includes/navbar.php"); ?>
    
    <!-- Banner -->
    <section class="bg-dark text-light p-0 text-center position-relative">
        <div class="container-fluid px-0"> <!-- Full width container without padding -->
            <div class="position-relative">
                <!-- Overlay to darken the image -->
                <div class="position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-75"></div> <!-- Dark overlay with opacity -->
                <img src="/assets/images/bannerbg.jpg" class="img-fluid w-100 d-block" alt="Banner Image" style="max-height: 400px; object-fit: cover;">
            </div>
            <div class="position-absolute top-50 start-50 translate-middle text-center w-100">
                <h1>Welcome to Software Farm</h1>
                <p class="lead">
                    Software for Agricultural Management
                </p>
            </div>
        </div>
    </section>

    <!-- Product Showcase -->
    <section class="text-center p-5">
        <div class="container">
            <h2 class="mb-4">Our Software Products</h2> <!-- Added margin-bottom -->
            <div class="row row-cols-1 row-cols-md-3 g-4">
                <!-- Card 1 -->
                <div class="col">
                    <div class="card bg-primary text-light h-100">
                        <div class="card-body">
                            <h3 class="card-title mb-3">SimFini</h3>
                            <p class="card-text">
                                Financial management software for the present-day farmer or agricultural business.
                            </p>
                            <a href="/pages/SimFini.php" class="btn btn-secondary">Read More</a>
                        </div>
                    </div>
                </div>
                <!-- Card 2 -->
                <div class="col">
                    <div class="card bg-primary text-light h-100">
                        <div class="card-body">
                            <h3 class="card-title mb-3">Accord</h3>
                            <p class="card-text">
                                Labour management software for the present-day farmer or agricultural business.
                            </p>
                            <a href="#" class="btn btn-secondary">Read More</a>
                        </div>
                    </div>
                </div>
                <!-- Card 3 -->
                <div class="col">
                    <div class="card bg-primary text-light h-100">
                        <div class="card-body">
                            <h3 class="card-title mb-3">Duet</h3>
                            <p class="card-text">
                                Marketable produce management for the present-day farmer or agricultural business.
                            </p>
                            <a href="#" class="btn btn-secondary">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Dealer Showcase -->
    <Section class="text-center p-5">
        <div class="container">
            <h2 class="mb-4">Our Dealers</h2>
        </div>
    </Section>

    <!-- Include Footer -->
    <?php include("includes/footer.php"); ?>
    
    <!-- Bootstrap Core Javascript -->
    <script src="assets/js/bootstrap.bundle.min.js"></script>

</body>
</html>