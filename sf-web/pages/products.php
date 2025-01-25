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
            <h1>Tools for Agricultural Success</h1>
        </div>
    </section>
    
    <!-- Financial Management Section -->
    <section>
        <div class="container narrow-container mt-5">
            <h2 class="text-center p-5">Financial Management</h2>

            <!-- SimFini Product -->
            <div class="row align-items-center pb-5">
                <div class="col-md-6">
                    <img src="../assets/images/imageplaceholder.jpg" class="img-fluid" alt="SimFini"> <!-- Image on the left -->
                </div>
                <div class="col-md-6">
                    <h3>SimFini</h3>
                    <p>SimFini is a comprehensive farm management software that helps farmers efficiently manage their financials, track expenses, and optimize profits.</p>
                    <ul class="list-unstyled py-4">
                        <li><i class="bi bi-check-circle-fill icon-secondary me-2"></i>Manage financial transactions</li>
                        <li><i class="bi bi-check-circle-fill icon-secondary me-2"></i>Track income and expenses</li>
                        <li><i class="bi bi-check-circle-fill icon-secondary me-2"></i>Generate detailed reports</li>
                        <li><i class="bi bi-check-circle-fill icon-secondary me-2"></i>Integrate with banking systems</li>
                        <li><i class="bi bi-check-circle-fill icon-secondary me-2"></i>Multi-user access for team collaboration</li>
                    </ul>
                    <div class="text-end">
                        <a href="../pages/simfini.php" class="btn btn-primary">Find out more</a>
                    </div>
                </div>
            </div>

            <div class="row py-5">
                <hr>
            </div>

            <!-- SimJunior Product -->
            <div class="row align-items-center">
                <div class="col-md-6">
                    <h3>SimJunior</h3>
                    <p>SimJunior is a simplified version of SimFini, designed specifically for smaller farms or farmers new to digital financial management.</p>
                    <ul class="list-unstyled py-4">
                        <li><i class="bi bi-check-circle-fill icon-secondary me-2"></i>Simple and intuitive interface</li>
                        <li><i class="bi bi-check-circle-fill icon-secondary me-2"></i>Track income and expenses</li>
                        <li><i class="bi bi-check-circle-fill icon-secondary me-2"></i>Generate basic reports</li>
                        <li><i class="bi bi-check-circle-fill icon-secondary me-2"></i>Ideal for small to medium farms</li>
                        <li><i class="bi bi-check-circle-fill icon-secondary me-2"></i>Easy setup and user-friendly</li>
                    </ul>
                    <div class="text-start">
                        <a href="../pages/simjunior.php" class="btn btn-primary">Find out more</a>
                    </div>
                </div>
                <div class="col-md-6 text-end">
                    <img src="../assets/images/imageplaceholder.jpg" class="img-fluid" alt="SimJunior">
                </div>
            </div>

            <div class="row py-5">
                <hr>
            </div>

            <!-- Point of Sale Product -->
            <div class="row align-items-center my-5">
                <div class="col-md-6">
                    <img src="../assets/images/imageplaceholder.jpg" class="img-fluid" alt="Point of Sale">
                </div>
                <div class="col-md-6">
                    <h3>Point of Sale</h3>
                    <p>Point of Sale (POS) is a seamless solution for farm-based transactions, enabling efficient sales management, invoicing, and inventory tracking.</p>
                    <ul class="list-unstyled py-4">
                        <li><i class="bi bi-check-circle-fill icon-secondary me-2"></i>Real-time inventory tracking</li>
                        <li><i class="bi bi-check-circle-fill icon-secondary me-2"></i>Fast and secure transactions</li>
                        <li><i class="bi bi-check-circle-fill icon-secondary me-2"></i>Generate invoices and receipts</li>
                        <li><i class="bi bi-check-circle-fill icon-secondary me-2"></i>Integrates with financial software</li>
                        <li><i class="bi bi-check-circle-fill icon-secondary me-2"></i>Supports multiple payment methods</li>
                    </ul>
                    <div class="text-end">
                        <a href="../pages/pointofsale.php" class="btn btn-primary">Find out more</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Employee Management Section -->
    <section class="bg-light">
        <div class="container narrow-container mt-5 pb-5">
            <h2 class="text-center p-5">Employee Management</h2>

            <!-- Accord Product -->
            <div class="row align-items-center mb-5">
                <div class="col-md-6">
                    <img src="../assets/images/imageplaceholder.jpg" class="img-fluid" alt="Accord"> <!-- Image on the left -->
                </div>
                <div class="col-md-6">
                    <h3>Accord</h3>
                    <p>Accord is a software solution designed to manage farm employees, track working hours, payroll, and other HR functions.</p>
                    <ul class="list-unstyled py-4">
                        <li><i class="bi bi-check-circle-fill me-2"></i>Track employee hours</li>
                        <li><i class="bi bi-check-circle-fill me-2"></i>Generate payroll and reports</li>
                        <li><i class="bi bi-check-circle-fill me-2"></i>Manage job roles and responsibilities</li>
                        <li><i class="bi bi-check-circle-fill me-2"></i>Employee performance tracking</li>
                        <li><i class="bi bi-check-circle-fill me-2"></i>Integration with financial systems</li>
                    </ul>
                    <div class="text-end">
                        <a href="../pages/accord.php" class="btn btn-primary">Find out more</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Livestock Management Section -->
    <section>
        <div class="container narrow-container mt-5 pb-5">
            <h2 class="text-center p-5">Livestock Management</h2>

            <!-- AgriMilk Product -->
            <div class="row align-items-center mb-5">
                <div class="col-md-6">
                    <img src="../assets/images/imageplaceholder.jpg" class="img-fluid" alt="AgriMilk"> <!-- Image on the left -->
                </div>
                <div class="col-md-6">
                    <h3>AgriMilk</h3>
                    <p>AgriMilk is a software solution for dairy farmers, designed to track milk production, livestock health, and farm profitability.</p>
                    <ul class="list-unstyled py-4">
                        <li><i class="bi bi-check-circle-fill icon-secondary me-2"></i>Monitor milk production levels</li>
                        <li><i class="bi bi-check-circle-fill icon-secondary me-2"></i>Track livestock health and growth</li>
                        <li><i class="bi bi-check-circle-fill icon-secondary me-2"></i>Generate detailed production reports</li>
                        <li><i class="bi bi-check-circle-fill icon-secondary me-2"></i>Manage inventory of dairy supplies</li>
                        <li><i class="bi bi-check-circle-fill icon-secondary me-2"></i>Optimize farm profitability</li>
                    </ul>
                    <div class="text-end">
                        <a href="../pages/agrimilk.php" class="btn btn-primary">Find out more</a>
                    </div>
                </div>
            </div>

            <div class="row py-5">
                <hr>
            </div>

            <!-- AgriBeef Product -->
            <div class="row align-items-center mb-5">
                <div class="col-md-6 order-md-2">
                    <img src="../assets/images/imageplaceholder.jpg" class="img-fluid" alt="AgriBeef"> <!-- Image on the left -->
                </div>
                <div class="col-md-6">
                    <h3>AgriBeef</h3>
                    <p>AgriBeef is tailored for beef cattle farmers, helping track livestock performance, breeding, and sales data.</p>
                    <ul class="list-unstyled py-4">
                        <li><i class="bi bi-check-circle-fill icon-secondary me-2"></i>Track cattle performance and growth</li>
                        <li><i class="bi bi-check-circle-fill icon-secondary me-2"></i>Manage breeding schedules</li>
                        <li><i class="bi bi-check-circle-fill icon-secondary me-2"></i>Monitor weight and health data</li>
                        <li><i class="bi bi-check-circle-fill icon-secondary me-2"></i>Generate detailed sales and profit reports</li>
                        <li><i class="bi bi-check-circle-fill icon-secondary me-2"></i>Integrate with financial and inventory systems</li>
                    </ul>
                    <div class="text-start">
                        <a href="../pages/agribeef.php" class="btn btn-primary">Find out more</a>
                    </div>
                </div>
            </div>

            <div class="row py-5">
                <hr>
            </div>

            <!-- Feedlot Product -->
            <div class="row align-items-center mb-5">
                <div class="col-md-6">
                    <img src="../assets/images/imageplaceholder.jpg" class="img-fluid" alt="Feedlot"> <!-- Image on the left -->
                </div>
                <div class="col-md-6">
                    <h3>Feedlot</h3>
                    <p>Feedlot is a comprehensive software solution for managing feedlot operations, monitoring cattle growth, and optimizing feed usage.</p>
                    <ul class="list-unstyled py-4">
                        <li><i class="bi bi-check-circle-fill icon-secondary me-2"></i>Track feed consumption and growth</li>
                        <li><i class="bi bi-check-circle-fill icon-secondary me-2"></i>Manage feedlot capacity and costs</li>
                        <li><i class="bi bi-check-circle-fill icon-secondary me-2"></i>Monitor cattle health and performance</li>
                        <li><i class="bi bi-check-circle-fill icon-secondary me-2"></i>Generate profit and cost reports</li>
                        <li><i class="bi bi-check-circle-fill icon-secondary me-2"></i>Integrate with livestock and financial systems</li>
                    </ul>
                    <div class="text-end">
                        <a href="../pages/feedlot.php" class="btn btn-primary">Find out more</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Crops and Marketable Produce Section -->
    <section class="bg-light">
        <div class="container narrow-container mt-5 pb-5">
            <h2 class="text-center p-5">Crops and Marketable Produce</h2>

            <!-- Saaiplan Product -->
            <div class="row align-items-center mb-5">
                <div class="col-md-6">
                    <img src="../assets/images/imageplaceholder.jpg" class="img-fluid" alt="Saaiplan"> <!-- Image on the left -->
                </div>
                <div class="col-md-6">
                    <h3>Saaiplan</h3>
                    <p>Saaiplan is a crop management software designed to assist farmers in planning, planting, and managing crop cycles efficiently.</p>
                    <ul class="list-unstyled py-4">
                        <li><i class="bi bi-check-circle-fill me-2"></i>Plan and schedule crop planting</li>
                        <li><i class="bi bi-check-circle-fill me-2"></i>Monitor soil health and conditions</li>
                        <li><i class="bi bi-check-circle-fill me-2"></i>Track crop performance and yield</li>
                        <li><i class="bi bi-check-circle-fill me-2"></i>Optimize irrigation and resource usage</li>
                        <li><i class="bi bi-check-circle-fill me-2"></i>Generate detailed crop reports</li>
                    </ul>
                    <div class="text-end">
                        <a href="../pages/saaiplan.php" class="btn btn-primary">Find out more</a>
                    </div>
                </div>
            </div>

            <div class="row py-5">
                <hr>
            </div>

            <!-- Duet Product -->
            <div class="row align-items-center mb-5">
                <div class="col-md-6 order-md-2">
                    <img src="../assets/images/imageplaceholder.jpg" class="img-fluid" alt="Duet"> <!-- Image on the left -->
                </div>
                <div class="col-md-6">
                    <h3>Duet</h3>
                    <p>Duet is an advanced crop and farm management software for larger agricultural operations focused on maximizing yield and efficiency.</p>
                    <ul class="list-unstyled py-4">
                        <li><i class="bi bi-check-circle-fill me-2"></i>Track and manage multiple crops</li>
                        <li><i class="bi bi-check-circle-fill me-2"></i>Optimize resource usage and crop yield</li>
                        <li><i class="bi bi-check-circle-fill me-2"></i>Real-time farm management updates</li>
                        <li><i class="bi bi-check-circle-fill me-2"></i>Comprehensive data analytics</li>
                        <li><i class="bi bi-check-circle-fill me-2"></i>Easy integration with other farm management systems</li>
                    </ul>
                    <div class="text-start">
                        <a href="../pages/duet.php" class="btn btn-primary">Find out more</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Vehicle Management Section -->
    <section>
        <div class="container narrow-container mt-5 pb-5">
            <h2 class="text-center p-5">Vehicle Management</h2>

            <!-- Vehicle Cost Product -->
            <div class="row align-items-center mb-5">
                <div class="col-md-6">
                    <img src="../assets/images/imageplaceholder.jpg" class="img-fluid" alt="Vehicle Cost"> <!-- Image on the left -->
                </div>
                <div class="col-md-6">
                    <h3>Vehicle Cost</h3>
                    <p>Vehicle Cost helps manage the maintenance and operational costs associated with farming vehicles and machinery.</p>
                    <ul class="list-unstyled py-4">
                        <li><i class="bi bi-check-circle-fill icon-secondary me-2"></i>Track vehicle maintenance schedules</li>
                        <li><i class="bi bi-check-circle-fill icon-secondary me-2"></i>Calculate fuel and operational costs</li>
                        <li><i class="bi bi-check-circle-fill icon-secondary me-2"></i>Manage vehicle usage and performance</li>
                        <li><i class="bi bi-check-circle-fill icon-secondary me-2"></i>Generate cost analysis reports</li>
                        <li><i class="bi bi-check-circle-fill icon-secondary me-2"></i>Optimize fleet management</li>
                    </ul>
                    <div class="text-end">
                        <a href="../pages/vehiclecost.php" class="btn btn-primary">Find out more</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Other Section -->
    <section class="bg-light">
        <div class="container narrow-container mt-5 pb-5">
            <h2 class="text-center p-5">Other</h2>

            <!-- RainStat Product -->
            <div class="row align-items-center mb-5">
                <div class="col-md-6">
                    <img src="../assets/images/imageplaceholder.jpg" class="img-fluid" alt="RainStat"> <!-- Image on the left -->
                </div>
                <div class="col-md-6">
                    <h3>RainStat</h3>
                    <p>RainStat is a weather and rain tracking software designed to help farmers monitor weather patterns and optimize irrigation.</p>
                    <ul class="list-unstyled py-4">
                        <li><i class="bi bi-check-circle-fill me-2"></i>Track rainfall and weather data</li>
                        <li><i class="bi bi-check-circle-fill me-2"></i>Optimize irrigation schedules</li>
                        <li><i class="bi bi-check-circle-fill me-2"></i>Receive weather forecasts and alerts</li>
                        <li><i class="bi bi-check-circle-fill me-2"></i>Integrate with crop and resource management systems</li>
                        <li><i class="bi bi-check-circle-fill me-2"></i>Generate weather-related reports</li>
                    </ul>
                    <div class="text-end">
                        <a href="../pages/rainstat.php" class="btn btn-primary">Find out more</a>
                    </div>
                </div>
            </div>

            <div class="row py-5">
                <hr>
            </div>

            <!-- Hand Product -->
            <div class="row align-items-center mb-5">
                <div class="col-md-6 order-md-2">
                    <img src="../assets/images/imageplaceholder.jpg" class="img-fluid" alt="Hand"> <!-- Image on the left -->
                </div>
                <div class="col-md-6">
                    <h3>Hand</h3>
                    <p>Hand is a mobile app that allows farmers to manage their daily tasks, track activities, and collaborate with team members.</p>
                    <ul class="list-unstyled py-4">
                        <li><i class="bi bi-check-circle-fill me-2"></i>Track daily tasks and activities</li>
                        <li><i class="bi bi-check-circle-fill me-2"></i>Collaborate with team members in real-time</li>
                        <li><i class="bi bi-check-circle-fill me-2"></i>Manage farm chores efficiently</li>
                        <li><i class="bi bi-check-circle-fill me-2"></i>Set reminders and alerts for tasks</li>
                        <li><i class="bi bi-check-circle-fill me-2"></i>Easy-to-use mobile interface</li>
                    </ul>
                    <div class="text-start">
                        <a href="../pages/hand.php" class="btn btn-primary">Find out more</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Include Footer -->
    <?php include("../includes/footer.php"); ?>
    
    <!-- Bootstrap Core Javascript -->
    <script src="../assets/js/bootstrap.bundle.min.js"></script>

</body>