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

    <!-- Company Showcase -->
    <section class="text-center p-5">
        <div class="container narrow-container">
            <h2 class="mb-4">Over 30 years of experience!</h2>
            <p>At Software Farm, established in 1997 through the integration of Properdata and Tarragon Computing &apos;s agricultural software, we have built a legacy of providing 
               practical, reliable solutions tailored to the agricultural sector. Our operations are managed from Pretoria, with our software distributed through a trusted network of 
               dealers across South Africa to ensure accessibility and support for our clients. Guided by our mission to deliver user-friendly tools that simplify operations and 
               improve efficiency, we remain committed to enhancing our products to meet the needs of a dynamic, evolving market. Our vision is to empower agricultural businesses 
               with dependable software that supports their success and sustainability.
            </p>
        </div>
    </section>

    <!-- Product Showcase -->
    <section class="text-center p-5 bg-secondary text-light">
        <div class="container">
            <h2 class="mb-4">Our Software Products</h2> <!-- Added margin-bottom -->
            <p class="mb-4">Software farm boasts a range of 12 software products to help you manage different aspects of your agricultural business.</p>
            <div class="row row-cols-1 row-cols-md-3 g-4">
                <!-- SimFini Card -->
                <div class="col">
                    <div class="card bg-primary text-light h-100 shadow">
                        <img src="assets/images/imageplaceholder.jpg" class="card-img-top" alt="SimFini Software">
                        <div class="card-body">
                            <h3 class="card-title mb-3">SimFini</h3>
                            <p class="card-text">
                                Financial management software for the present-day farmer or agricultural business.
                            </p>
                            <a href="/pages/simfini.php" class="btn btn-secondary">Find out more</a>
                        </div>
                    </div>
                </div>
                <!-- Card 2 -->
                <div class="col">
                    <div class="card bg-primary text-light h-100 shadow">
                        <img src="assets/images/imageplaceholder.jpg" class="card-img-top" alt="Accord Software">
                        <div class="card-body">
                            <h3 class="card-title mb-3">Accord</h3>
                            <p class="card-text">
                                Labour management software for the present-day farmer or agricultural business.
                            </p>
                            <a href="/pages/accord.php" class="btn btn-secondary">Find out more</a>
                        </div>
                    </div>
                </div>
                <!-- Card 3 -->
                <div class="col">
                    <div class="card bg-primary text-light h-100 shadow">
                        <img src="assets/images/imageplaceholder.jpg" class="card-img-top" alt="Duet Software">
                        <div class="card-body">
                            <h3 class="card-title mb-3">Duet</h3>
                            <p class="card-text">
                                Marketable produce management software for the present-day farmer or agricultural business.
                            </p>
                            <a href="pages/duet.php" class="btn btn-secondary">Find out more</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-4">
                <a href="/pages/products.php" class="btn btn-primary">View all products</a>
            </div>
        </div>
    </section>

    <!-- Dealer Showcase -->
    <section class="text-center p-5">
        <div class="container">
            <h2 class="mb-4">Our Dealers</h2>
            <p>We have a network of independant dealers and agricultural bureau&apos;s across various provinces in South Africa.</p>
            <div id="dealerCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="4000">
                <div class="carousel-inner">
                    <?php 
                    // Example dealer logos array (using the placeholder)
                    $dealer_logos = [
                        'vkblogo.jpg', 'nwklogo.jpg', 'imageplaceholder.jpg',
                        'imageplaceholder.jpg', 'imageplaceholder.jpg', 'imageplaceholder.jpg',
                        'imageplaceholder.jpg', 'imageplaceholder.jpg', 'imageplaceholder.jpg', 'imageplaceholder.jpg'
                    ];

                    // Example dealer names array
                    $dealer_names = [
                        'VKB Landbou Edms Bpk', 'NWK Bpk', 'Overberg Agri Edms Bpk', 'Senwes Pty Ltd', 'Data Farm', 
                        'A van der Westhuizen', 'SteynCo Contracting Services', 'Johan Kapp', 'Malan Finansiele Dienste', 'PCM van Dyk'
                    ];

                    // Loop to create carousel items
                    for ($i = 0; $i < 10; $i += 5): ?>
                        <div class="carousel-item <?php echo $i == 0 ? 'active' : ''; ?>">
                            <div class="row justify-content-center">
                                <?php for ($j = 0; $j < 5 && $i + $j < 10; $j++): ?>
                                    <div class="col-2 d-flex flex-column align-items-center">
                                        <img src="assets/images/<?php echo $dealer_logos[$i + $j]; ?>" class="d-block w-100 mx-auto" alt="<?php echo $dealer_names[$i + $j]; ?>">
                                        <p class="mt-2"><?php echo $dealer_names[$i + $j]; ?></p>
                                    </div>
                                <?php endfor; ?>
                            </div>
                        </div>
                    <?php endfor; ?>
                </div>
            </div>

            <!-- View all dealers button -->
            <div class="mt-4">
                <a href="/pages/dealers.php" class="btn btn-primary">View All Dealers</a>
            </div>
        </div>
    </section>

    <!-- Include Footer -->
    <?php include("includes/footer.php"); ?>
    
    <!-- Bootstrap Core Javascript -->
    <script src="assets/js/bootstrap.bundle.min.js"></script>

</body>
</html>