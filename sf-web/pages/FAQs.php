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
            <h1>Frequently Asked Questions</h1>
        </div>
    </section>

    <!-- Include FAQ Function -->
    <?php include("../helpers/faqs_function.php"); ?>    

    <!-- FAQ Section -->
    <section class="container narrow-container my-5 py-5">
        <div class="accordion" id="faqAccordion">
            <?php foreach ($faqs as $index => $faq): ?>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="heading<?php echo $index; ?>">
                        <button class="accordion-button <?php echo $index !== 0 ? 'collapsed' : ''; ?>" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?php echo $index; ?>" aria-expanded="<?php echo $index === 0 ? 'true' : 'false'; ?>" aria-controls="collapse<?php echo $index; ?>">
                            <?php echo $faq['question']; ?>
                        </button>
                    </h2>
                    <div id="collapse<?php echo $index; ?>" class="accordion-collapse collapse <?php echo $index === 0 ? 'show' : ''; ?>" aria-labelledby="heading<?php echo $index; ?>" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            <?php echo $faq['answer']; ?>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </section>

    <!-- Include Footer -->
    <?php include("../includes/footer.php"); ?>
    
    <!-- Bootstrap Core Javascript -->
    <script src="../assets/js/bootstrap.bundle.min.js"></script>

</body>