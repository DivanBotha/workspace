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

    <!-- Download Table -->
    <section class="mb-5">
        <div class="container narrow-container">

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

            <table class="table table-striped layout-fixed">
                <tbody>
                    <!-- SimFini -->
                    <tr class="align-middle">
                        <td>SimFini</td>
                        <td>
                            <h6><i class="bi bi-clipboard2-check me-2"></i>Version <span class="price"><?php echo $simfini->version; ?></span></h6>
                            <h6><i class="bi bi-calendar me-2"></i>Last update date: <span class="price"><?php  echo date("d F Y", $simfini->releasedate); ?></span></h6>
                        </td>
                        <td class="text-end">
                            <a class="btn btn-secondary w-75" href="<?php echo $simfini->fullname; ?>"><span><i class="bi bi-download me-2"></i><?php echo $simfini->program; ?></span></a>
                        </td>
                    </tr>
                    <!-- SimJunior -->
                    <tr class="align-middle">
                        <td>SimJunior</td>
                        <td>
                            <h6><i class="bi bi-clipboard2-check me-2"></i>Version <span class="price"><?php echo $simjunior->version; ?></span></h6>
                            <h6><i class="bi bi-calendar me-2"></i>Last update date: <span class="price"><?php  echo date("d F Y", $simjunior->releasedate); ?></span></h6>
                        </td>
                        <td class="text-end">
                            <a class="btn btn-secondary w-75" href="<?php echo $simjunior->fullname; ?>"><span><i class="bi bi-download me-2"></i><?php echo $simjunior->program; ?></span></a>
                        </td>
                    </tr>
                    <!-- Point of Sale -->
                    <tr class="align-middle">
                        <td>Point of Sale</td>
                        <td>
                            <h6><i class="bi bi-clipboard2-check me-2"></i>Version <span class="price"><?php echo $pos->version; ?></span></h6>
                            <h6><i class="bi bi-calendar me-2"></i>Last update date: <span class="price"><?php  echo date("d F Y", $pos->releasedate); ?></span></h6>
                        </td>
                        <td class="text-end">
                            <a class="btn btn-secondary w-75" href="<?php echo $pos->fullname; ?>"><span><i class="bi bi-download me-2"></i><?php echo $pos->program; ?></span></a>
                        </td>
                    </tr>
                    <!-- Accord -->
                    <tr class="align-middle">
                        <td>Accord</td>
                        <td>
                            <h6><i class="bi bi-clipboard2-check me-2"></i>Version <span class="price"><?php echo $accord->version; ?></span></h6>
                            <h6><i class="bi bi-calendar me-2"></i>Last update date: <span class="price"><?php  echo date("d F Y", $accord->releasedate); ?></span></h6>
                        </td>
                        <td class="text-end">
                            <a class="btn btn-secondary w-75" href="<?php echo $accord->fullname; ?>"><span><i class="bi bi-download me-2"></i><?php echo $accord->program; ?></span></a>
                        </td>
                    </tr>
                    <!-- Duet -->
                    <tr class="align-middle">
                        <td>Duet</td>
                        <td>
                            <h6><i class="bi bi-clipboard2-check me-2"></i>Version <span class="price"><?php echo $duet->version; ?></span></h6>
                            <h6><i class="bi bi-calendar me-2"></i>Last update date: <span class="price"><?php  echo date("d F Y", $duet->releasedate); ?></span></h6>
                        </td>
                        <td class="text-end">
                            <a class="btn btn-secondary w-75" href="<?php echo $duet->fullname; ?>"><span><i class="bi bi-download me-2"></i><?php echo $duet->program; ?></span></a>
                        </td>
                    </tr>
                    <!-- Saaiplan -->
                    <tr class="align-middle">
                        <td>Saaiplan</td>
                        <td>
                            <h6><i class="bi bi-clipboard2-check me-2"></i>Version <span class="price"><?php echo $saaiplan->version; ?></span></h6>
                            <h6><i class="bi bi-calendar me-2"></i>Last update date: <span class="price"><?php  echo date("d F Y", $saaiplan->releasedate); ?></span></h6>
                        </td>
                        <td class="text-end">
                            <a class="btn btn-secondary w-75" href="<?php echo $saaiplan->fullname; ?>"><span><i class="bi bi-download me-2"></i><?php echo $saaiplan->program; ?></span></a>
                        </td>
                    </tr>
                    <!-- AgriMilk -->
                    <tr class="align-middle">
                        <td>AgriMilk</td>
                        <td>
                            <h6><i class="bi bi-clipboard2-check me-2"></i>Version <span class="price"><?php echo $agrimilk->version; ?></span></h6>
                            <h6><i class="bi bi-calendar me-2"></i>Last update date: <span class="price"><?php  echo date("d F Y", $agrimilk->releasedate); ?></span></h6>
                        </td>
                        <td class="text-end">
                            <a class="btn btn-secondary w-75" href="<?php echo $agrimilk->fullname; ?>"><span><i class="bi bi-download me-2"></i><?php echo $agrimilk->program; ?></span></a>
                        </td>
                    </tr>
                    <!-- AgriBeef -->
                    <tr class="align-middle">
                        <td>AgriBeef</td>
                        <td>
                            <h6><i class="bi bi-clipboard2-check me-2"></i>Version <span class="price"><?php echo $agribeef->version; ?></span></h6>
                            <h6><i class="bi bi-calendar me-2"></i>Last update date: <span class="price"><?php  echo date("d F Y", $agribeef->releasedate); ?></span></h6>
                        </td>
                        <td class="text-end">
                            <a class="btn btn-secondary w-75" href="<?php echo $agribeef->fullname; ?>"><span><i class="bi bi-download me-2"></i><?php echo $agribeef->program; ?></span></a>
                        </td>
                    </tr>
                    <!-- Feedlot -->
                    <tr class="align-middle">
                        <td>Feedlot</td>
                        <td>
                            <h6><i class="bi bi-clipboard2-check me-2"></i>Version <span class="price"><?php echo $feedlot->version; ?></span></h6>
                            <h6><i class="bi bi-calendar me-2"></i>Last update date: <span class="price"><?php  echo date("d F Y", $feedlot->releasedate); ?></span></h6>
                        </td>
                        <td class="text-end">
                            <a class="btn btn-secondary w-75" href="<?php echo $feedlot->fullname; ?>"><span><i class="bi bi-download me-2"></i><?php echo $feedlot->program; ?></span></a>
                        </td>
                    </tr>
                    <!-- Vehicle Cost -->
                    <tr class="align-middle">
                        <td>Vehicle Cost</td>
                        <td>
                            <h6><i class="bi bi-clipboard2-check me-2"></i>Version <span class="price"><?php echo $vehicle->version; ?></span></h6>
                            <h6><i class="bi bi-calendar me-2"></i>Last update date: <span class="price"><?php  echo date("d F Y", $vehicle->releasedate); ?></span></h6>
                        </td>
                        <td class="text-end">
                            <a class="btn btn-secondary w-75" href="<?php echo $vehicle->fullname; ?>"><span><i class="bi bi-download me-2"></i><?php echo $vehicle->program; ?></span></a>
                        </td>
                    </tr>
                    <!-- RainStat -->
                    <tr class="align-middle">
                        <td>RainStat</td>
                        <td>
                            <h6><i class="bi bi-clipboard2-check me-2"></i>Version <span class="price"><?php echo $rainstat->version; ?></span></h6>
                            <h6><i class="bi bi-calendar me-2"></i>Last update date: <span class="price"><?php  echo date("d F Y", $rainstat->releasedate); ?></span></h6>
                        </td>
                        <td class="text-end">
                            <a class="btn btn-secondary w-75" href="<?php echo $rainstat->fullname; ?>"><span><i class="bi bi-download me-2"></i><?php echo $rainstat->program; ?></span></a>
                        </td>
                    </tr>
                    <!-- Hand -->
                    <tr class="align-middle">
                        <td>Hand</td>
                        <td>
                            <h6><i class="bi bi-clipboard2-check me-2"></i>Version <span class="price"><?php echo $hand->version; ?></span></h6>
                            <h6><i class="bi bi-calendar me-2"></i>Last update date: <span class="price"><?php  echo date("d F Y", $hand->releasedate); ?></span></h6>
                        </td>
                        <td class="text-end">
                            <a class="btn btn-secondary w-75" href="<?php echo $hand->fullname; ?>"><span><i class="bi bi-download me-2"></i><?php echo $hand->program; ?></span></a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>
    
    <!-- Include Footer -->
    <?php include("../includes/footer.php"); ?>
    
    <!-- Bootstrap Core Javascript -->
    <script src="../assets/js/bootstrap.bundle.min.js"></script>

</body>