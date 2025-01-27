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

    <!-- Notification Section -->
    <section class="text-center p-5">
        <div class="container narrow-container mt-5">
            <h1>Software Downloads</h1>
            <p>Please note that thes products are subject to a yearly fee of R 4632.00. If you are not on a yearly fee please contact us.</p>
        </div>
    </section>

    <!-- Table Replacement -->
    <section class="py-5">
        <div class="container narrow-container pb-5">

            <!-- Include helper Program -->
            <?php include("../helpers/program.php"); ?>
            <?php 
                $simfini = new program("SimFini"); 
                $accord = new program("Accord"); 
                $simjunior = new program("SimJunior"); 
                $duet = new program("Duet"); 
                $agribeef = new program("Agribeef"); 
                $agrimilk = new program("Agrimilk"); 
                $feedlot = new program("Feedlot"); 
                $hand = new program("Hand"); 
                $pos = new program("POS"); 
                $rainstat = new program("Rainstat"); 
                $saaiplan = new program("Saaiplan"); 
                $vehicle = new program("Vehicle"); 
            ?>

            <!-- SimFini -->
            <div class="row p-3 align-items-center border-bottom">
                <div class="col-md-2 mb-2">
                    <h5>SimFini</h5>
                </div>
                <div class="col-md-4 mb-2">
                    <h6><i class="bi bi-clipboard2-check me-2"></i>Version: <span class="price"><?php echo $simfini->version; ?></span></h6>
                    <h6><i class="bi bi-calendar me-2"></i>Last update: <span class="price"><?php echo date("d F Y", $simfini->releasedate); ?></span></h6>
                    <h6><i class="bi bi-file-earmark-font me-2"></i>File Size: <span class="price"><?php echo number_format($simfini->filesize / 1024 / 1024, 2); ?> MB</span></h6> <!-- Added file size -->
                </div>
                <div class="col-md-3 text-md-end text-start mb-2">
                    <a class="btn btn-primary w-100 w-md-auto" href="<?php echo $simfini->fullname; ?>">Trial</a>
                </div>
                <div class="col-md-3 text-md-end text-start mb-2">
                    <a class="btn btn-secondary w-100 w-md-auto" href="<?php echo $simfini->fullname; ?>">
                        <i class="bi bi-download me-2"></i><?php echo $simfini->program; ?>
                    </a>
                </div>
            </div>

            <!-- SimJunior -->
            <div class="row p-3 align-items-center border-bottom">
                <div class="col-md-2 mb-2">
                    <h5>SimJunior</h5>
                </div>
                <div class="col-md-4 mb-2">
                    <h6><i class="bi bi-clipboard2-check me-2"></i>Version: <span class="price"><?php echo $simjunior->version; ?></span></h6>
                    <h6><i class="bi bi-calendar me-2"></i>Last update: <span class="price"><?php echo date("d F Y", $simjunior->releasedate); ?></span></h6>
                    <h6><i class="bi bi-file-earmark-font me-2"></i>File Size: <span class="price"><?php echo number_format($simjunior->filesize / 1024 / 1024, 2); ?> MB</span></h6> <!-- Added file size -->
                </div>
                <div class="col-md-3 text-md-end text-start mb-2">
                    <a class="btn btn-primary w-100 w-md-auto" href="<?php echo $simjunior->fullname; ?>">Trial</a>
                </div>
                <div class="col-md-3 text-md-end text-start mb-2">
                    <a class="btn btn-secondary w-100 w-md-auto" href="<?php echo $simjunior->fullname; ?>">
                        <i class="bi bi-download me-2"></i><?php echo $simjunior->program; ?>
                    </a>
                </div>
            </div>

            <!-- Point of Sale -->
            <div class="row p-3 align-items-center border-bottom">
                <div class="col-md-2 mb-2">
                    <h5>Point of Sale</h5>
                </div>
                <div class="col-md-4 mb-2">
                    <h6><i class="bi bi-clipboard2-check me-2"></i>Version: <span class="price"><?php echo $pos->version; ?></span></h6>
                    <h6><i class="bi bi-calendar me-2"></i>Last update: <span class="price"><?php echo date("d F Y", $pos->releasedate); ?></span></h6>
                    <h6><i class="bi bi-file-earmark-font me-2"></i>File Size: <span class="price"><?php echo number_format($pos->filesize / 1024 / 1024, 2); ?> MB</span></h6> <!-- Added file size -->
                </div>
                <div class="col-md-3 text-md-end text-start mb-2">
                    <a class="btn btn-primary w-100 w-md-auto" href="<?php echo $pos->fullname; ?>">Trial</a>
                </div>
                <div class="col-md-3 text-md-end text-start mb-2">
                    <a class="btn btn-secondary w-100 w-md-auto" href="<?php echo $pos->fullname; ?>">
                        <i class="bi bi-download me-2"></i><?php echo $pos->program; ?>
                    </a>
                </div>
            </div>

            <!-- Accord -->
            <div class="row p-3 align-items-center border-bottom">
                <div class="col-md-2 mb-2">
                    <h5>Accord</h5>
                </div>
                <div class="col-md-4 mb-2">
                    <h6><i class="bi bi-clipboard2-check me-2"></i>Version: <span class="price"><?php echo $accord->version; ?></span></h6>
                    <h6><i class="bi bi-calendar me-2"></i>Last update: <span class="price"><?php echo date("d F Y", $accord->releasedate); ?></span></h6>
                    <h6><i class="bi bi-file-earmark-font me-2"></i>File Size: <span class="price"><?php echo number_format($accord->filesize / 1024 / 1024, 2); ?> MB</span></h6> <!-- Added file size -->
                </div>
                <div class="col-md-3 text-md-end text-start mb-2">
                    <a class="btn btn-primary w-100 w-md-auto" href="<?php echo $accord->fullname; ?>">Trial</a>
                </div>
                <div class="col-md-3 text-md-end text-start mb-2">
                    <a class="btn btn-secondary w-100 w-md-auto" href="<?php echo $accord->fullname; ?>">
                        <i class="bi bi-download me-2"></i><?php echo $accord->program; ?>
                    </a>
                </div>
            </div>

            <!-- Duet -->
            <div class="row p-3 align-items-center border-bottom">
                <div class="col-md-2 mb-2">
                    <h5>Duet</h5>
                </div>
                <div class="col-md-4 mb-2">
                    <h6><i class="bi bi-clipboard2-check me-2"></i>Version: <span class="price"><?php echo $duet->version; ?></span></h6>
                    <h6><i class="bi bi-calendar me-2"></i>Last update: <span class="price"><?php echo date("d F Y", $duet->releasedate); ?></span></h6>
                    <h6><i class="bi bi-file-earmark-font me-2"></i>File Size: <span class="price"><?php echo number_format($duet->filesize / 1024 / 1024, 2); ?> MB</span></h6> <!-- Added file size -->
                </div>
                <div class="col-md-3 text-md-end text-start mb-2">
                    <a class="btn btn-primary w-100 w-md-auto" href="<?php echo $duet->fullname; ?>">Trial</a>
                </div>
                <div class="col-md-3 text-md-end text-start mb-2">
                    <a class="btn btn-secondary w-100 w-md-auto" href="<?php echo $duet->fullname; ?>">
                        <i class="bi bi-download me-2"></i><?php echo $duet->program; ?>
                    </a>
                </div>
            </div>

            <!-- Saaiplan -->
            <div class="row p-3 align-items-center border-bottom">
                <div class="col-md-2 mb-2">
                    <h5>Saaiplan</h5>
                </div>
                <div class="col-md-4 mb-2">
                    <h6><i class="bi bi-clipboard2-check me-2"></i>Version: <span class="price"><?php echo $saaiplan->version; ?></span></h6>
                    <h6><i class="bi bi-calendar me-2"></i>Last update: <span class="price"><?php echo date("d F Y", $saaiplan->releasedate); ?></span></h6>
                    <h6><i class="bi bi-file-earmark-font me-2"></i>File Size: <span class="price"><?php echo number_format($saaiplan->filesize / 1024 / 1024, 2); ?> MB</span></h6> <!-- Added file size -->
                </div>
                <div class="col-md-3 text-md-end text-start mb-2">
                    <a class="btn btn-primary w-100 w-md-auto" href="<?php echo $saaiplan->fullname; ?>">Trial</a>
                </div>
                <div class="col-md-3 text-md-end text-start mb-2">
                    <a class="btn btn-secondary w-100 w-md-auto" href="<?php echo $saaiplan->fullname; ?>">
                        <i class="bi bi-download me-2"></i><?php echo $saaiplan->program; ?>
                    </a>
                </div>
            </div>

            <!-- AgriMilk -->
            <div class="row p-3 align-items-center border-bottom">
                <div class="col-md-2 mb-2">
                    <h5>AgriMilk</h5>
                </div>
                <div class="col-md-4 mb-2">
                    <h6><i class="bi bi-clipboard2-check me-2"></i>Version: <span class="price"><?php echo $agrimilk->version; ?></span></h6>
                    <h6><i class="bi bi-calendar me-2"></i>Last update: <span class="price"><?php echo date("d F Y", $agrimilk->releasedate); ?></span></h6>
                    <h6><i class="bi bi-file-earmark-font me-2"></i>File Size: <span class="price"><?php echo number_format($agrimilk->filesize / 1024 / 1024, 2); ?> MB</span></h6> <!-- Added file size -->
                </div>
                <div class="col-md-3 text-md-end text-start mb-2">
                    <a class="btn btn-primary w-100 w-md-auto" href="<?php echo $agrimilk->fullname; ?>">Trial</a>
                </div>
                <div class="col-md-3 text-md-end text-start mb-2">
                    <a class="btn btn-secondary w-100 w-md-auto" href="<?php echo $agrimilk->fullname; ?>">
                        <i class="bi bi-download me-2"></i><?php echo $agrimilk->program; ?>
                    </a>
                </div>
            </div>

            <!-- AgriBeef -->
            <div class="row p-3 align-items-center border-bottom">
                <div class="col-md-2 mb-2">
                    <h5>AgriBeef</h5>
                </div>
                <div class="col-md-4 mb-2">
                    <h6><i class="bi bi-clipboard2-check me-2"></i>Version: <span class="price"><?php echo $agribeef->version; ?></span></h6>
                    <h6><i class="bi bi-calendar me-2"></i>Last update: <span class="price"><?php echo date("d F Y", $agribeef->releasedate); ?></span></h6>
                    <h6><i class="bi bi-file-earmark-font me-2"></i>File Size: <span class="price"><?php echo number_format($agribeef->filesize / 1024 / 1024, 2); ?> MB</span></h6> <!-- Added file size -->
                </div>
                <div class="col-md-3 text-md-end text-start mb-2">
                    <a class="btn btn-primary w-100 w-md-auto" href="<?php echo $agribeef->fullname; ?>">Trial</a>
                </div>
                <div class="col-md-3 text-md-end text-start mb-2">
                    <a class="btn btn-secondary w-100 w-md-auto" href="<?php echo $agribeef->fullname; ?>">
                        <i class="bi bi-download me-2"></i><?php echo $agribeef->program; ?>
                    </a>
                </div>
            </div>

            <!-- Feedlot -->
            <div class="row p-3 align-items-center border-bottom">
                <div class="col-md-2 mb-2">
                    <h5>Feedlot</h5>
                </div>
                <div class="col-md-4 mb-2">
                    <h6><i class="bi bi-clipboard2-check me-2"></i>Version: <span class="price"><?php echo $feedlot->version; ?></span></h6>
                    <h6><i class="bi bi-calendar me-2"></i>Last update: <span class="price"><?php echo date("d F Y", $feedlot->releasedate); ?></span></h6>
                    <h6><i class="bi bi-file-earmark-font me-2"></i>File Size: <span class="price"><?php echo number_format($feedlot->filesize / 1024 / 1024, 2); ?> MB</span></h6> <!-- Added file size -->
                </div>
                <div class="col-md-3 text-md-end text-start mb-2">
                    <a class="btn btn-primary w-100 w-md-auto" href="<?php echo $feedlot->fullname; ?>">Trial</a>
                </div>
                <div class="col-md-3 text-md-end text-start mb-2">
                    <a class="btn btn-secondary w-100 w-md-auto" href="<?php echo $feedlot->fullname; ?>">
                        <i class="bi bi-download me-2"></i><?php echo $feedlot->program; ?>
                    </a>
                </div>
            </div>

            <!-- Vehicle Cost -->
            <div class="row p-3 align-items-center border-bottom">
                <div class="col-md-2 mb-2">
                    <h5>Vehicle Cost</h5>
                </div>
                <div class="col-md-4 mb-2">
                    <h6><i class="bi bi-clipboard2-check me-2"></i>Version: <span class="price"><?php echo $vehicle->version; ?></span></h6>
                    <h6><i class="bi bi-calendar me-2"></i>Last update: <span class="price"><?php echo date("d F Y", $vehicle->releasedate); ?></span></h6>
                    <h6><i class="bi bi-file-earmark-font me-2"></i>File Size: <span class="price"><?php echo number_format($vehicle->filesize / 1024 / 1024, 2); ?> MB</span></h6> <!-- Added file size -->
                </div>
                <div class="col-md-3 text-md-end text-start mb-2">
                    <a class="btn btn-primary w-100 w-md-auto" href="<?php echo $vehicle->fullname; ?>">Trial</a>
                </div>
                <div class="col-md-3 text-md-end text-start mb-2">
                    <a class="btn btn-secondary w-100 w-md-auto" href="<?php echo $vehicle->fullname; ?>">
                        <i class="bi bi-download me-2"></i><?php echo $vehicle->program; ?>
                    </a>
                </div>
            </div>

            <!-- RainStat -->
            <div class="row p-3 align-items-center border-bottom">
                <div class="col-md-2 mb-2">
                    <h5>RainStat</h5>
                </div>
                <div class="col-md-4 mb-2">
                    <h6><i class="bi bi-clipboard2-check me-2"></i>Version: <span class="price"><?php echo $rainstat->version; ?></span></h6>
                    <h6><i class="bi bi-calendar me-2"></i>Last update: <span class="price"><?php echo date("d F Y", $rainstat->releasedate); ?></span></h6>
                    <h6><i class="bi bi-file-earmark-font me-2"></i>File Size: <span class="price"><?php echo number_format($rainstat->filesize / 1024 / 1024, 2); ?> MB</span></h6> <!-- Added file size -->
                </div>
                <div class="col-md-3 text-md-end text-start mb-2">
                    <a class="btn btn-primary w-100 w-md-auto" href="<?php echo $rainstat->fullname; ?>">Trial</a>
                </div>
                <div class="col-md-3 text-md-end text-start mb-2">
                    <a class="btn btn-secondary w-100 w-md-auto" href="<?php echo $rainstat->fullname; ?>">
                        <i class="bi bi-download me-2"></i><?php echo $rainstat->program; ?>
                    </a>
                </div>
            </div>

            <!-- Hand -->
            <div class="row p-3 align-items-center border-bottom">
                <div class="col-md-2 mb-2">
                    <h5>Hand</h5>
                </div>
                <div class="col-md-4 mb-2">
                    <h6><i class="bi bi-clipboard2-check me-2"></i>Version: <span class="price"><?php echo $hand->version; ?></span></h6>
                    <h6><i class="bi bi-calendar me-2"></i>Last update: <span class="price"><?php echo date("d F Y", $hand->releasedate); ?></span></h6>
                    <h6><i class="bi bi-file-earmark-font me-2"></i>File Size: <span class="price"><?php echo number_format($hand->filesize / 1024 / 1024, 2); ?> MB</span></h6> <!-- Added file size -->
                </div>
                <div class="col-md-3 text-md-end text-start mb-2">
                    <a class="btn btn-primary w-100 w-md-auto" href="<?php echo $hand->fullname; ?>">Trial</a>
                </div>
                <div class="col-md-3 text-md-end text-start mb-2">
                    <a class="btn btn-secondary w-100 w-md-auto" href="<?php echo $hand->fullname; ?>">
                        <i class="bi bi-download me-2"></i><?php echo $hand->program; ?>
                    </a>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Include Footer -->
    <?php include("../includes/footer.php"); ?>
    
    <!-- Bootstrap Core Javascript -->
    <script src="../assets/js/bootstrap.bundle.min.js"></script>

</body>