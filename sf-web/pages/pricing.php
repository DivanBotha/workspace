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
            <h1>Affordable, Transparent Pricing for Every Farm</h1>
            <p class="lead">One annual license fee for multiple products.</p>
        </div>
    </section>

    <!-- How It Works Section -->
    <section class="py-5 bg-light">
        <div class="container narrow-container my-5">
            <h2 class="mb-5 text-center">How It Works</h2>

            <!-- Step 1 -->
            <div class="row mb-4 shadow rounded">
                <!-- Step Card -->
                <div class="col-md-3 d-flex align-items-center justify-content-center bg-secondary rounded p-3">
                    <h4>Step 1</h4>
                </div>
                <!-- Description Card -->
                <div class="col-md-6 d-flex align-items-center">
                    <p class="mb-0 p-3">
                        Explore our products by downloading a trial version for the software you are interested in. 
                        Get hands-on experience with the features before committing.
                    </p>
                </div>
                <!-- Button Card -->
                <div class="col-md-3 d-flex align-items-center justify-content-center my-3">
                    <a href="../pages/downloads.php" class="btn btn-primary w-75">Download Trial</a>
                </div>
            </div>

            <!-- Step 2 -->
            <div class="row mb-4 shadow rounded">
                <!-- Step Card -->
                <div class="col-md-3 d-flex align-items-center justify-content-center bg-secondary rounded p-3">
                    <h4>Step 2</h4>
                </div>
                <!-- Description Card -->
                <div class="col-md-6 d-flex align-items-center">
                    <p class="mb-0 p-3">
                        Sign up for a Software Farm account for an annual fee of R4632.00. 
                        This fee includes updates and support for all products linked to your account.
                    </p>
                </div>
                <!-- Button Card -->
                <div class="col-md-3 d-flex align-items-center justify-content-center my-3">
                    <a href="../pages/contact.php" class="btn btn-primary w-75">Contact Us</a>
                </div>
            </div>

            <!-- Step 3 -->
            <div class="row mb-4 shadow rounded">
                <!-- Step Card -->
                <div class="col-md-3 d-flex align-items-center justify-content-center bg-secondary rounded p-3">
                    <h4>Step 3</h4>
                </div>
                <!-- Description Card -->
                <div class="col-md-6 d-flex align-items-center">
                    <p class="mb-0 p-3">
                        Expand your account by adding the software products you need. 
                        Each product is available at a once-off cost tailored to its functionality.
                    </p>
                </div>
                <!-- Button Card -->
                <div class="col-md-3 d-flex align-items-center justify-content-center my-3">
                    <a href="../pages/contact.php" class="btn btn-primary w-75">Contact Us</a>
                </div>
            </div>

            <!-- Step 4 -->
            <div class="row mb-4 shadow rounded">
                <!-- Step Card -->
                <div class="col-md-3 d-flex align-items-center justify-content-center bg-secondary rounded p-3">
                    <h4>Step 4</h4>
                </div>
                <!-- Description Card -->
                <div class="col-md-6 d-flex align-items-center">
                    <p class="mb-0 p-3">
                        Enhance your software license by adding additional network points (devices) 
                        or data sets (companies) to meet the demands of your operations.
                    </p>
                </div>
                <!-- Button Card -->
                <div class="col-md-3 d-flex align-items-center justify-content-center my-3">
                    <a href="../pages/contact.php" class="btn btn-primary w-75">Contact Us</a>
                </div>
            </div>
            <div class="text-center my-5">
                <a href="../pages/License.php" class="btn btn-primary">View the License Agreement</a>
            </div>
        </div>
    </section>

    <!-- Pricing Section -->
     <section>
        <h2 class="text-center m-5">Price List</h2>
        <div class="container-fluid narrow-container">
            <div class="row align-items-center bg-primary text-light py-2 rounded-top g-0">
                <h4 class="text-center">SimFini</h4>
            </div>
            <div class="row border-bottom rounded bg-light g-0 pb-2">
                <div class="col-md text-center">
                    <h5 class="bg-secondary p-2">License</h5>
                    <h6>1 Network Point</h6>
                    <h6>2 Data Sets</h6>
                </div>
                <div class="col-md text-center">
                    <h5 class="bg-secondary p-2">Once-Off Cost</h5>
                    <h6><span class="price">R 7367-00</span></h6>
                </div>
                <div class="col-md text-center">
                    <h5 class="bg-secondary p-2">Add On</h5>
                    <h6>Network Point: <span class="price">R 736.70</span></h6>
                    <h6>Data Set: <span class="price">R 736.70</span></h6>
                    <h6>Transaction Transfers Module: <span class="price">R 736.70</span></h6>
                    <h6>Data Merge Module: <span class="price">R 477.70</span></h6>
                </div>
            </div>
        </div>
     </section>

    <!-- Pricing Section -->
    <section class="py-5">
        <div class="container narrow-container">
            <h2 class="text-center m-5">Price List</h2>
            <div class="table-responsive">
                <table class="table table-striped">
                    <!-- Table Headers -->
                    <thead>
                        <tr>
                            <th>Product</th>
                            <th>License</th>
                            <th>Once-off</th>
                            <th class="text-center">Add On</th>
                        </tr>
                    </thead>
                    <!-- Table Rows -->
                    <tbody>
                        <!-- SimFini -->
                        <tr>
                            <td>SimFini</td>
                            <td>
                                1 Network Point<br>
                                2 Data Sets
                            </td>
                            <td>
                                <span class="price">R 7367.00</span>
                            </td>
                            <td class="text-end">
                                Add a network point: <span class="price">R 736.70</span><br>
                                Add a data set: <span class="price">R 736.70</span><br>
                                Add the Transaction Transfers Module: <span class="price">R 736.70</span><br>
                                Add the Data Merge Module: <span class="price">R 477.70</span>
                            </td>
                        </tr>
                        <!-- SimJunior -->
                        <tr>
                            <td>SimJunior</td>
                            <td>
                                1 Network Point<br>
                                2 Data Sets
                            </td>
                            <td>
                                <span class="price">R 4632.00</span>
                            </td>
                            <td class="text-end">
                                Add a network point: <span class="price">R 0.00</span><br>
                                Add a data set: <span class="price">R 0.00</span>
                            </td>
                        </tr>
                        <!-- Point of Sale -->
                        <tr>
                            <td>Point of Sale</td>
                            <td>
                                1 Network Point<br>
                                2 Data Sets
                            </td>
                            <td>
                                <span class="price">R 2196.00</span>
                            </td>
                            <td class="text-end">
                                Add a network point: <span class="price">R 0.00</span><br>
                                Add a data set: <span class="price">R 0.00</span>
                            </td>
                        </tr>
                        <!-- Accord -->
                        <tr>
                            <td>Accord</td>
                            <td>
                                1 Network Point<br>
                                2 Data Sets
                            </td>
                            <td>
                                <span class="price">R 7355.00</span>
                            </td>
                            <td class="text-end">
                                Add a network point: <span class="price">R 735.50</span><br>
                                Add a data set: <span class="price">R 735.50</span>
                            </td>
                        </tr>
                        <!-- AgriMilk -->
                        <tr>
                            <td>AgriMilk</td>
                            <td>
                                1 Network Point<br>
                                2 Data Sets
                            </td>
                            <td>
                                <span class="price">R 7738.00</span>
                            </td>
                            <td class="text-end">
                                Add a network point: <span class="price">R 773.80</span><br>
                                Add a data set: <span class="price">R 773.80</span>
                            </td>
                        </tr>
                        <!-- AgriBeef -->
                        <tr>
                            <td>AgriBeef</td>
                            <td>
                                1 Network Point<br>
                                2 Data Sets
                            </td>
                            <td>
                                <span class="price">R 7393.00</span>
                            </td>
                            <td class="text-end">
                                Add a network point: <span class="price">R 739.30</span><br>
                                Add a data set: <span class="price">R 739.30</span>
                            </td>
                        </tr>
                        <!-- Feedlot -->
                        <tr>
                            <td>Feedlot</td>
                            <td>
                                1 Network Point<br>
                                2 Data Sets
                            </td>
                            <td>
                                <span class="price">R 5840.00</span>
                            </td>
                            <td class="text-end">
                                Add a network point: <span class="price">R 584.00</span><br>
                                Add a data set: <span class="price">R 584.00</span>
                            </td>
                        </tr>
                        <!-- Duet -->
                        <tr>
                            <td>Duet</td>
                            <td>
                                1 Network Point<br>
                                2 Data Sets
                            </td>
                            <td>
                                <span class="price">R 6390.00</span>
                            </td>
                            <td class="text-end">
                                Add a network point: <span class="price">R 639.00</span><br>
                                Add a data set: <span class="price">R 639.00</span>
                            </td>
                        </tr>
                        <!-- Saaiplan -->
                        <tr>
                            <td>Saaiplan</td>
                            <td>
                                1 Network Point<br>
                                2 Data Sets
                            </td>
                            <td>
                                <span class="price">R 6390.00</span>
                            </td>
                            <td class="text-end">
                                Add a network point: <span class="price">R 639.00</span><br>
                                Add a data set: <span class="price">R 639.00</span>
                            </td>
                        </tr>
                        <!-- Vehicle Cost -->
                        <tr>
                            <td>Vehicle Cost</td>
                            <td>
                                1 Network Point<br>
                                2 Data Sets
                            </td>
                            <td>
                                <span class="price">R 1665.00</span>
                            </td>
                            <td class="text-end">
                                Add a network point: <span class="price">R 166.50</span><br>
                                Add a data set: <span class="price">R 166.50</span>
                            </td>
                        </tr>
                        <!-- RainStat -->
                        <tr>
                            <td>RainStat</td>
                            <td>
                                1 Network Point<br>
                                2 Data Sets
                            </td>
                            <td>
                                <span class="price">R 2540.00</span>
                            </td>
                            <td class="text-end">
                                Add a network point: <span class="price">R 254.00</span><br>
                                Add a data set: <span class="price">R 254.00</span>
                            </td>
                        </tr>
                        <!-- Hand -->
                        <tr>
                            <td>Hand</td>
                            <td>
                                1 Network Point<br>
                                2 Data Sets
                            </td>
                            <td>
                                <span class="price">R 575.00</span>
                            </td>
                            <td class="text-end">
                                Add a network point: <span class="price">R 0.00</span><br>
                                Add a data set: <span class="price">R 0.00</span>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="container mb-5 mt-5">
                <h4>Prices do not include the compulsory annual license fee of R 4632.00</h4>
                <ul>
                    <li>Prices are subject to change without prior notice.</li>
                    <li>VAT is included and calculated at 15%.</li>
                    <li>Prices do not include the dealer's traveling and installation cost.</li>
                    <li>Prices do not include training.</li>
                    <li>If you use more than one software product, the annual license fee remains R 4632.00.</li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Include Footer -->
    <?php include("../includes/footer.php"); ?>
    
    <!-- Bootstrap Core Javascript -->
    <script src="../assets/js/bootstrap.bundle.min.js"></script>

</body>