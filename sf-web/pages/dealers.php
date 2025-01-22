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


    <!-- Dealer Intro -->
    <section class="bg-secondary text-light text-center p-5">
        <div class="container narrow-container">
            <h2 class="mb-5">Our network of Dealers</h2>
            <p>
            Our network of dealers spans across South Africa, providing reliable agricultural solutions to farmers in every province. Each dealer offers expert advice, quality products, 
            and dedicated service to help meet the diverse needs of the agricultural community. With locations in both rural and urban areas, our dealers are committed to supporting the 
            growth and success of local farming operations. Explore our dealer network to find the right partner for your farming needs.
            </p>
        </div>
    </section>

    <!-- Dealer Sections by Province -->
    <section class="container narrow-container my-5">
        <!-- Section for each province -->
        <?php
        $provinces = [
            "Western Cape" => [
                ["name" => "VKB Landbou Edms Bpk", "city" => "Cape Town", "contact" => "John Doe", "mobile" => "012 345 6789", "email" => "johndoe@example.com", "website" => "https://www.vkblandbou.co.za"],
                ["name" => "AgriSouth", "city" => "Stellenbosch", "contact" => "Mark Taylor", "mobile" => "021 678 1234", "email" => "marktaylor@example.com", "website" => "https://www.agrisa.co.za"],
                ["name" => "Farm Solutions", "city" => "Paternoster", "contact" => "Linda Brown", "mobile" => "022 345 6789", "email" => "lindabrown@example.com", "website" => "https://www.farmsolutions.co.za"]
            ],
            "Eastern Cape" => [
                ["name" => "AgriDealer X", "city" => "Port Elizabeth", "contact" => "Jane Smith", "mobile" => "021 234 5678", "email" => "janesmith@example.com", "website" => "https://www.agridealerc.co.za"],
                ["name" => "AgriCo", "city" => "East London", "contact" => "George White", "mobile" => "043 567 8901", "email" => "georgewhite@example.com", "website" => "https://www.agri-co.co.za"],
                ["name" => "Farmers Hub", "city" => "Mthatha", "contact" => "Rita Green", "mobile" => "047 789 0123", "email" => "ritagreen@example.com", "website" => "https://www.farmershub.co.za"]
            ],
            "Gauteng" => [
                ["name" => "Farm Solutions", "city" => "Pretoria", "contact" => "Mike Brown", "mobile" => "011 234 5678", "email" => "mikebrown@example.com", "website" => "https://www.farmsolutions.co.za"],
                ["name" => "AgriPro", "city" => "Johannesburg", "contact" => "Sarah White", "mobile" => "010 345 6789", "email" => "sarahwhite@example.com", "website" => "https://www.agripro.co.za"],
                ["name" => "Landscapes AG", "city" => "Centurion", "contact" => "Paul Green", "mobile" => "012 567 8901", "email" => "paulgreen@example.com", "website" => "https://www.landscapesag.co.za"]
            ],
            "KwaZulu-Natal" => [
                ["name" => "AgriCorp", "city" => "Durban", "contact" => "Sarah White", "mobile" => "031 345 6789", "email" => "sarahwhite@example.com", "website" => "https://www.agricorp.co.za"],
                ["name" => "FarmTech", "city" => "Pietermaritzburg", "contact" => "David Brown", "mobile" => "033 234 5678", "email" => "davidbrown@example.com", "website" => "https://www.farmtech.co.za"],
                ["name" => "KZN Agro", "city" => "Richards Bay", "contact" => "Rita Black", "mobile" => "035 678 1234", "email" => "ritablack@example.com", "website" => "https://www.kznagro.co.za"]
            ],
            "Free State" => [
                ["name" => "FarmTech", "city" => "Bloemfontein", "contact" => "Paul Green", "mobile" => "051 234 5678", "email" => "paulgreen@example.com", "website" => "https://www.farmtech.co.za"],
                ["name" => "Agri Solutions", "city" => "Welkom", "contact" => "John White", "mobile" => "057 123 4567", "email" => "johnwhite@example.com", "website" => "https://www.agrisolutions.co.za"],
                ["name" => "Farmers Choice", "city" => "Phuthaditjhaba", "contact" => "Sarah Green", "mobile" => "058 234 5678", "email" => "sarahgreen@example.com", "website" => "https://www.farmerschoice.co.za"]
            ],
            "Limpopo" => [
                ["name" => "AgriLimp", "city" => "Polokwane", "contact" => "Lisa Blue", "mobile" => "015 678 1234", "email" => "lisablue@example.com", "website" => "https://www.agrilimp.co.za"],
                ["name" => "Limpopo Agri", "city" => "Tzaneen", "contact" => "Tom Black", "mobile" => "015 234 5678", "email" => "tomblack@example.com", "website" => "https://www.limpopoagri.co.za"],
                ["name" => "AgriTech Limpopo", "city" => "Lephalale", "contact" => "Mike Brown", "mobile" => "014 567 8901", "email" => "mikebrown@example.com", "website" => "https://www.agritechlimpopo.co.za"]
            ],
            "Mpumalanga" => [
                ["name" => "AgriMpumalanga", "city" => "Nelspruit", "contact" => "David Yellow", "mobile" => "013 234 5678", "email" => "davidyellow@example.com", "website" => "https://www.agrimpumalanga.co.za"],
                ["name" => "FarmTech", "city" => "Witrivier", "contact" => "Jessica Green", "mobile" => "013 789 0123", "email" => "jessicagreen@example.com", "website" => "https://www.farmtech.co.za"],
                ["name" => "Mpumalanga Farmers", "city" => "Barberton", "contact" => "Rita Blue", "mobile" => "013 456 7890", "email" => "ritablue@example.com", "website" => "https://www.mpumalangafarmers.co.za"]
            ],
            "North West" => [
                ["name" => "NorthWest Agri", "city" => "Mahikeng", "contact" => "Tom Black", "mobile" => "018 123 4567", "email" => "tomblack@example.com", "website" => "https://www.northwestagri.co.za"],
                ["name" => "AgriNorth", "city" => "Rustenburg", "contact" => "Sarah White", "mobile" => "014 234 5678", "email" => "sarahwhite@example.com", "website" => "https://www.agrinorth.co.za"],
                ["name" => "Farmers Network", "city" => "Lichtenburg", "contact" => "David Brown", "mobile" => "018 678 1234", "email" => "davidbrown@example.com", "website" => "https://www.farmersnetwork.co.za"]
            ],
            "Northern Cape" => [
                ["name" => "AgriCape", "city" => "Kimberley", "contact" => "Emily Brown", "mobile" => "053 234 5678", "email" => "emilybrown@example.com", "website" => "https://www.agrica.co.za"],
                ["name" => "AgriSouth", "city" => "Upington", "contact" => "John White", "mobile" => "054 345 6789", "email" => "johnwhite@example.com", "website" => "https://www.agrisa.co.za"],
                ["name" => "Northern Cape Farmers", "city" => "Springbok", "contact" => "Rita Green", "mobile" => "027 789 0123", "email" => "ritagreen@example.com", "website" => "https://www.northerncapefarmers.co.za"]
            ]
        ];

        // Sort provinces alphabetically
        ksort($provinces);

        // Loop through provinces and dealers
        foreach ($provinces as $province => $dealers) {
            echo "<h3 class='my-4'>$province</h3><div class='row'>";
            foreach ($dealers as $dealer) {
                echo "
                    <div class='col-md-4 mb-4'>
                        <div class='card'>
                            <img src='../assets/images/imageplaceholder.jpg' class='card-img-top' alt='Dealer Image'>
                            <div class='card-body'>
                                <h5 class='card-title>{$dealer['name']}</h5>
                                <p class='card-text'>Location: {$dealer['city']}</p>
                                <p class='card-text'>Contact: {$dealer['contact']}</p>
                                <p class='card-text'>Mobile: {$dealer['mobile']}</p>
                                <p class='card-text'>Email: <a href='mailto:{$dealer['email']}'>{$dealer['email']}</a></p>
                                <p class='card-text'>Website: <a href='{$dealer['website']}' target='_blank'>{$dealer['website']}</a></p>
                            </div>
                        </div>
                    </div>";
            }
            echo "</div>";
        }
        ?>
    </section>

    <!-- Include Footer -->
    <?php include("../includes/footer.php"); ?>
    
    <!-- Bootstrap Core Javascript -->
    <script src="../assets/js/bootstrap.bundle.min.js"></script>

</body>