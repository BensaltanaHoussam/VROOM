<?php
require_once __DIR__ . '/../app/database/Database.php';
require_once __DIR__ . '/../app/class/vehicule.php';

// Initialize database connection
$database = new Database();
$db = $database->connect();

// Initialize Vehicule class
$vehicule = new Vehicule($db);

// Fetch all vehicles
$vehicles = $vehicule->getAllVehicles();
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vroom</title>
    <link rel="stylesheet" href="./css/style.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&family=Outfit:wght@100..900&display=swap"
        rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css" rel="stylesheet" />

</head>

<body>
    <!-- FIRST SECTION -->
    <section class="landingPage h-[530px] flex flex-col items-center">
        <div
            class="flex fixed z-40 rounded-b-xl w-[85%]  justify-around gap-24 items-center py-3  md:px-24 bg-white shadow-2xl">
            <a href=""><img class="w-[120px]" src="./img/logo.png" alt="logo"></a>
            <div class="flex gap-12 items-center">
                <a class=" bg-black text-white border-2 hover:bg-white hover:border-2 hover:text-black py-1 px-4 rounded-md transform duration-300"
                    href="./home.php">Home</a>
                <a href="./historique.php">Reservations</a>
                <a href="./categories.php">Categories</a>
                <a href="./services.php">Services</a>
            </div>
            <div>
                <a href="#"
                    class="text-white text-lg bg-black border-2 rounded-3xl py-1 px-4 hover:text-black hover:bg-white hover:border-black transform duration-300  ">Contact
                    Us</a>
            </div>
        </div>

        <div class=" flex  justify-center bg-center gap-12 bg-cover  h-[100vh] lg:px-24 lg:pt-0">



            <div class=" w-[60%] text-start mt-28  ">
                <h2 class="text-balance text-slate-100 font-semibold w-[450px]  text-5xl"><span
                        class="text-white font-light">VROOM</span> the perfect car rental experience!</h2>
                <p class="mt-6 text-pretty text-lg/8 w-[550px] font-light  text-gray-100">Ready to hit the road? Take
                    the wheel of your perfect car today! Whether it's for a weekend getaway, a business trip, or just
                    exploring your city, we’ve got the ideal vehicle waiting for you. With quick booking, flexible
                    rental terms, and the best prices around, it's never been easier to drive in comfort and style.
                    Don't wait—your next adventure starts now!</p>
                <div class="mt-10  justify-center gap-x-6 lg:justify-CENTER">
                    <a href="#"
                        class="rounded-md text-black bg-white px-8 py-2.5 text-sm font-semibold  shadow-sm hover:text-white hover:bg-black border-2 border-white focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-white transform duration-300">Reserve
                        your car now <i class="ri-speed-up-fill"></i></a>
                </div>
            </div>

            <div>
                <img class="w-[800px] translate-y-[200px]" src="./img/porchepnj.png" alt="dacia">

            </div>

        </div>

    </section>


    <section class="py-4 px-8 flex">

        <div class=" w-[60%] text-start mt-12  ">

            <h2 class="text-balance text-black font-semibold w-[450px]  text-5xl">This is our marks sponsors :</h2>
            <p class="mt-6 text-pretty text-lg/8 w-[550px] font-light  text-black">Mercedess , Toyota , Renault , Porche
                , Nissan , Dacia , volkswagen</p>

        </div>



        <div class="flex gap-8 justify-center items-center border-2 p-4 mt-4">
            <div>
                <img class="w-[90px]" src="./img/volzwagen.png" alt="">
            </div>
            <div>
                <img class="w-[90px] " src="./img/toyota.png" alt="">
            </div>
            <div>
                <img class="w-[90px] " src="./img/renau.png" alt="">
            </div>
            <div>
                <img class="w-[90px] " src="./img/porche.png" alt="">
            </div>
            <div>
                <img class="w-[90px] " src="./img/nissan.png" alt="">
            </div>
            <div>
                <img class="w-[90px] " src="./img/mercedess.png" alt="">
            </div>


        </div>


    </section>



    <section>
        <div class="flex flex-wrap gap-12 px-4 justify-center py-12">
            <?php foreach ($vehicles as $vehicle): ?>
                <div class="relative group w-[500px] shadow-2xl h-[300px] bg-cover bg-center rounded-lg hover:scale-90 duration-300 hover:cursor-pointer"
                    style="background-image: url('<?php echo $vehicle['vehicule_image']; ?>');">
                    <div class="absolute inset-0 rounded-lg bg-black bg-opacity-50 text-white flex opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <div class="p-8">
                            <h3 class="text-2xl font-semibold"><?php echo $vehicle['nom_vehicule']; ?></h3>
                            <p class="mt-2 font-light"><?php echo $vehicle['description']; ?></p>
                            <ul class="pb-4 text-sm">
                                <li><strong>Fuel Economy:</strong> <?php echo $vehicle['fuel_economy']; ?></li>
                                <li><strong>Price:</strong> <?php echo $vehicle['price']; ?></li>
                                <li><strong>Features:</strong> <?php echo $vehicle['features']; ?></li>
                            </ul>
                            <a href="./historique.php"
                                class="rounded-md self-end text-black bg-white px-8 py-1 text-xs font-semibold shadow-sm hover:text-white hover:bg-black border-2 border-white focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-white transform duration-300">Reserve
                                now <i class="ri-speed-up-fill"></i></a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </section>
</body>
</html>