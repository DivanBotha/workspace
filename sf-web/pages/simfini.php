<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Software Farm develops farm management software for agricultural operations">
    <meta name="author" content="">

    <title>SimFini | Software Farm</title>

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
            <h1>SimFini</h1>
            <p class="lead">The financial management solution for farmers and agricultural businesses.</p>
        </div>
    </section>

    <!-- Core Accounting & Financial Management -->
    <section class="py-5 bg-white">
        <div class="container narrow-container my-5">
            <h2 class="text-center mb-5">Core Accounting & Financial Management</h2>
            <div class="row row-cols-1 row-cols-md-2 g-4">
                <!-- 1 -->
                <div class="col">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body text-center">
                            <i class="bi bi-book display-4 text-primary mb-3"></i>
                            <h5 class="card-title">Full General Ledger</h5>
                            <p class="card-text">
                                Manage creditors, debtors, and maintain an asset register.
                            </p>
                        </div>
                    </div>
                </div>
                <!-- 2 -->
                <div class="col">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body text-center">
                            <!-- "bi-egg-fill" is available in Bootstrap Icons 1.8+; if you don't have it, pick another icon -->
                            <i class="bi bi-egg-fill display-4 text-primary mb-3"></i>
                            <h5 class="card-title">Livestock Table</h5>
                            <p class="card-text">
                                Track and manage agricultural assets with a specialized livestock table.
                            </p>
                        </div>
                    </div>
                </div>
                <!-- 3 -->
                <div class="col">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body text-center">
                            <i class="bi bi-file-earmark-text display-4 text-primary mb-3"></i>
                            <h5 class="card-title">Invoices &amp; Receipts</h5>
                            <p class="card-text">
                                Easily issue invoices and receipts to debtors.
                            </p>
                        </div>
                    </div>
                </div>
                <!-- 4 -->
                <div class="col">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body text-center">
                            <i class="bi bi-tools display-4 text-primary mb-3"></i>
                            <h5 class="card-title">Inventory &amp; Manufacturing</h5>
                            <p class="card-text">
                                Transform existing inventory into new items while maintaining stock levels.
                            </p>
                        </div>
                    </div>
                </div>
                <!-- 5 -->
                <div class="col">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body text-center">
                            <i class="bi bi-calendar-check display-4 text-primary mb-3"></i>
                            <h5 class="card-title">Long-Term Budgeting</h5>
                            <p class="card-text">
                                Plan your finances up to 5 years in advance.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Advanced Accounting Capabilities -->
    <section class="py-5 bg-light">
        <div class="container narrow-container my-5">
            <h2 class="text-center mb-5">Advanced Accounting Capabilities</h2>
            <div class="row row-cols-1 row-cols-md-2 g-4">
                <!-- 1 -->
                <div class="col">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body text-center">
                            <i class="bi bi-layers display-4 text-success mb-3"></i>
                            <h5 class="card-title">Unlimited Accounts</h5>
                            <p class="card-text">
                                Create sub-accounts, enterprises, and consolidation groups.
                            </p>
                        </div>
                    </div>
                </div>
                <!-- 2 -->
                <div class="col">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body text-center">
                            <i class="bi bi-clock-history display-4 text-success mb-3"></i>
                            <h5 class="card-title">Year-End &amp; VAT Closings</h5>
                            <p class="card-text">
                                Close periods when desired, with the ability to recall closed years.
                            </p>
                        </div>
                    </div>
                </div>
                <!-- 3 -->
                <div class="col">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body text-center">
                            <i class="bi bi-file-bar-graph display-4 text-success mb-3"></i>
                            <h5 class="card-title">Date-Definable Reports</h5>
                            <p class="card-text">
                                Generate income statements, balance sheets, and VAT reports on any date range.
                            </p>
                        </div>
                    </div>
                </div>
                <!-- 4 -->
                <div class="col">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body text-center">
                            <i class="bi bi-unlock display-4 text-success mb-3"></i>
                            <h5 class="card-title">Opening Balance Adjustments</h5>
                            <p class="card-text">
                                Make adjustments anytime (except for closed years).
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Banking & Reconciliation -->
    <section class="py-5">
        <div class="container narrow-container my-5">
            <h2 class="text-center mb-5">Banking &amp; Reconciliation</h2>
            <div class="row row-cols-1 row-cols-md-2 g-4">
                <!-- 1 -->
                <div class="col">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body text-center">
                            <i class="bi bi-bank display-4 text-warning mb-3"></i>
                            <h5 class="card-title">Full Reconciliation</h5>
                            <p class="card-text">
                                Reconcile bank accounts, credit cards, debtors, and creditors with ease.
                            </p>
                        </div>
                    </div>
                </div>
                <!-- 2 -->
                <div class="col">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body text-center">
                            <i class="bi bi-file-earmark-arrow-up display-4 text-warning mb-3"></i>
                            <h5 class="card-title">Import Transactions</h5>
                            <p class="card-text">
                                Upload bank statements or CSV files to automate transaction recording.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Optional Modules -->
    <section class="py-5 bg-light">
        <div class="container narrow-container my-5">
            <h2 class="text-center mb-5">Optional Modules</h2>
            <div class="row row-cols-1 row-cols-md-2 g-4">
                <!-- 1 -->
                <div class="col">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body text-center">
                            <i class="bi bi-box-arrow-in-down display-4 text-info mb-3"></i>
                            <h5 class="card-title">Transaction Import Module</h5>
                            <p class="card-text">
                                Import sales and payments from Duet or your Agricultural Bureau.
                            </p>
                        </div>
                    </div>
                </div>
                <!-- 2 -->
                <div class="col">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body text-center">
                            <i class="bi bi-diagram-2 display-4 text-info mb-3"></i>
                            <h5 class="card-title">Data Merge Module</h5>
                            <p class="card-text">
                                Combine multiple data sets into a single, consolidated dataset.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Data & Security -->
    <section class="py-5">
        <div class="container narrow-container my-5">
            <h2 class="text-center mb-5">Data &amp; Security</h2>
            <div class="row row-cols-1 row-cols-md-2 g-4">
                <!-- 1 -->
                <div class="col">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body text-center">
                            <i class="bi bi-laptop display-4 text-danger mb-3"></i>
                            <h5 class="card-title">Local Data Storage</h5>
                            <p class="card-text">
                                SimFini is a desktop-based Windows application; all data remains on your device.
                            </p>
                        </div>
                    </div>
                </div>
                <!-- 2 -->
                <div class="col">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body text-center">
                            <i class="bi bi-hdd-stack display-4 text-danger mb-3"></i>
                            <h5 class="card-title">Backup &amp; Restore</h5>
                            <p class="card-text">
                                Easily create and store backups to safeguard your important information.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Call-to-Action -->
    <section class="py-5 bg-primary text-white text-center">
        <div class="container narrow-container my-5">
            <h2>Ready to Simplify Your Farm's Financial Management?</h2>
            <p>Take control of your operations with SimFini today.</p>
            <a href="../pages/downloads.php" class="btn btn-secondary btn-lg mt-3">Download a Demo</a>
        </div>
    </section>

    <!-- Include Footer -->
    <?php include("../includes/footer.php"); ?>
    
    <!-- Bootstrap Core Javascript -->
    <script src="../assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>
