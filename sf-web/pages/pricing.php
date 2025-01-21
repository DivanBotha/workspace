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

    <!-- How pricing works -->
    <section class="bg-secondary text-light py-5">
        <div class="container narrow-container">
            <h2 class="text-center">How it Works</h2>
            
            <!-- Annual License Fee Section -->
            <div class="my-5">
                <h3 class="text-center">The Annual License Fee</h3>
                <p class="text-center mt-3">
                    The annual license fee covers the support and updates for our software products. 
                    You only pay one annual license fee, regardless of how many of our software products you use.
                </p>
                <div class="row text-center g-4">
                    <!-- Card 1 -->
                    <div class="col-md-6">
                        <div class="card bg-primary text-light h-100 shadow">
                            <div class="card-body">
                                <h4 class="card-title">One License Fee</h4>
                            </div>
                        </div>
                    </div>
                    <!-- Card 2 -->
                    <div class="col-md-6">
                        <div class="card bg-primary text-light h-100 shadow">
                            <div class="card-body">
                                <h4 class="card-title">Many Products</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Standard License Section -->
            <div class="my-5">
                <h3 class="text-center">The Standard License</h3>
                <p class="text-center mt-3">
                    The standard license for any of our software products includes one (1) network point 
                    and two (2) data sets. Additional network points and data sets can be added for a one-time fee.
                </p>
                <div class="row text-center g-4">
                    <!-- Card 1 -->
                    <div class="col-md-6">
                        <div class="card bg-primary text-light h-100 shadow">
                            <div class="card-body">
                                <h4 class="card-title">1 Network Point</h4>
                            </div>
                        </div>
                    </div>
                    <!-- Card 2 -->
                    <div class="col-md-6">
                        <div class="card bg-primary text-light h-100 shadow">
                            <div class="card-body">
                                <h4 class="card-title">2 Data Sets</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- License Agreement -->
            <div class="mt-5 d-flex justify-content-between align-items-center">
                <h3>What do I get for an annual license fee?</h3>
                <a href="../pages/License.php" class="btn btn-primary" target="_blank">View License Agreement</a>
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