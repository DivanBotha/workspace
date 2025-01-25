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
            <h1>Let's Get in Touch</h1>
            <p class="lead">Whether you need support or want to learn more about our products, we&apos;re here to help.</p>
        </div>
    </section>

    <!-- Contact Information Section -->
    <section class="container narrow-container my-5">
        <h2>Contact Us</h2>
        <p>If you need to get in touch with us, please complete the form below:</p>

        <form action="../helpers/process_contact.php" method="POST">
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email Address</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="mb-3">
                <label for="phone" class="form-label">Phone Number</label>
                <input type="tel" class="form-control" id="phone" name="phone">
            </div>
            <div class="mb-3">
                <label for="currentProduct" class="form-label">Do you currently use one of our products?</label>
                <select class="form-select" id="currentProduct" name="currentProduct" required>
                    <option value="">Select an option</option>
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                </select>
            </div>
            <div class="mb-3" id="serialNumberContainer" style="display: none;">
                <label for="serialNumber" class="form-label">If yes, please enter the software serial number</label>
                <input type="text" class="form-control" id="serialNumber" name="serialNumber">
            </div>
            <div class="mb-3">
                <label for="subject" class="form-label">Subject</label>
                <select class="form-select" id="subject" name="subject" required>
                    <option value="">Select a subject</option>
                    <option value="Support">Support</option>
                    <option value="Sales">Sales</option>
                    <option value="Other">Other</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="message" class="form-label">Message</label>
                <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Send</button>
        </form>
    </section>

    <!-- Include Footer -->
    <?php include("../includes/footer.php"); ?>

    <!-- Bootstrap Core Javascript -->
    <script src="../assets/js/bootstrap.bundle.min.js"></script>

    <!-- JavaScript to Toggle Serial Number Field -->
    <script>
        document.getElementById('currentProduct').addEventListener('change', function() {
            const serialNumberContainer = document.getElementById('serialNumberContainer');
            if (this.value === 'Yes') {
                serialNumberContainer.style.display = 'block';
            } else {
                serialNumberContainer.style.display = 'none';
            }
        });
    </script>
</body>
</html>
