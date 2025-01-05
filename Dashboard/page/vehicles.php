<?php
require_once __DIR__ . '/../../app/database/Database.php';
require_once __DIR__ . '/../../app/class/vehicule.php';

// Initialize database connection
$database = new Database();
$db = $database->connect();

// Initialize Vehicule class
$vehicule = new Vehicule($db);

// Get category ID from URL
$categoryId = isset($_GET['category_id']) ? $_GET['category_id'] : null;

if ($categoryId) {
    // Fetch vehicles by category
    $vehicles = $vehicule->getVehiclesByCategory($categoryId);
} else {
    $vehicles = [];
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vehicles in Category</title>
    <link rel="stylesheet" href="../../public/css/style.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&family=Outfit:wght@100..900&display=swap"
        rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css" rel="stylesheet" />
</head>

<body>
    <section class="landingPage h-[230px] flex flex-col items-center rounded-b-full">
        <div
            class="flex fixed z-40 rounded-b-xl w-[85%] justify-around gap-24 items-center py-3 md:px-24 bg-white shadow-2xl">
            <a href="./home.php"><img class="w-[120px]" src="../../public/img/logo.png" alt="logo"></a>
            <div class="flex gap-12 items-center">
                <a class="bg-black text-white border-2 hover:bg-white hover:border-2 hover:text-black py-1 px-4 rounded-md transform duration-300"
                    href="./home.php">Home</a>
                <a href="./historique.php">Reservations</a>
                <a href="./categories.php">Categories</a>
                <a href="./services.php">Services</a>
            </div>
            <div>
                <a href="#"
                    class="text-white text-lg bg-black border-2 rounded-3xl py-1 px-4 hover:text-black hover:bg-white hover:border-black transform duration-300">Contact
                    Us</a>
            </div>
        </div>

        <div class="bg-center gap-12 bg-cover h-[100vh] lg:pt-0 mt-24">
            <div class="mx-auto max-w-screen-sm text-center">
                <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">Vehicles in
                    Category</h2>
                <p class="font-light text-gray-500 lg:mb-16 sm:text-xl dark:text-gray-200">Explore the vehicles in this
                    category!</p>
            </div>
        </div>
    </section>

    <section>
        <div class="w-[80%] mx-auto py-12">
            <button onclick="openAddVehicleModal()"
                class="rounded-md text-white bg-black px-8 py-2.5 mb-4 text-sm font-semibold shadow-sm hover:text-black hover:bg-white border-2 border-black focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-white transform duration-300">Add
                a new vehicle <i class="ri-speed-up-fill"></i></button>
            <?php if (!empty($vehicles)): ?>
                <div class="flex flex-wrap gap-12 px-4 justify-center">
                    <?php foreach ($vehicles as $vehicle): ?>
                        <div class="relative group w-[calc(50%-1.5rem)] shadow-2xl h-[300px] bg-cover bg-center rounded-lg hover:scale-90 duration-300 hover:cursor-pointer"
                            style="background-image: url('<?php echo $vehicle['vehicule_image']; ?>');">
                            <div
                                class="absolute inset-0 rounded-lg bg-black bg-opacity-50 text-white flex opacity-0 group-hover:opacity-100 transition-opacity duration-300">
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
            <?php else: ?>
                <p class="text-center text-gray-500">No vehicles found in this category.</p>
            <?php endif; ?>
        </div>
    </section>

    <!-- Add Vehicle Modal -->
    <div id="addVehicleModal" class="fixed inset-0 bg-black bg-opacity-50 hidden items-center justify-center z-50">
        <div class="bg-white rounded-xl max-w-2xl w-full mx-4 shadow-2xl">
            <div class="p-6">
                <div class="flex justify-between items-center mb-4">
                    <h3 class="text-xl font-bold text-black">Add a Vehicle</h3>
                    <button onclick="closeAddVehicleModal()" class="text-gray-400 hover:text-white transition-colors"
                        aria-label="Close">
                        <i class="fas fa-times"></i>
                    </button>
                </div>

                <form id="addVehicleForm" action="../../app/action/admin/vehicule/add.php" method="POST"
                    class="space-y-4">
                    <input type="hidden" name="category_id" value="<?php echo $categoryId; ?>">

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <label for="vehicleName" class="block text-sm font-medium text-gray-700 mb-2">Vehicle
                                Name</label>
                            <input type="text" id="vehicleName" name="nom_vehicule" required
                                class="w-full bg-gray-800 text-white rounded-lg px-4 py-2 focus:ring-2 focus:ring-purple-600 transition-all border border-gray-700"
                                placeholder="Enter the name of the vehicle">
                        </div>

                        <div>
                            <label for="price" class="block text-sm font-medium text-gray-700 mb-2">Price</label>
                            <input type="text" id="price" name="price" required
                                class="w-full bg-gray-800 text-white rounded-lg px-4 py-2 focus:ring-2 focus:ring-purple-600 transition-all border border-gray-700"
                                placeholder="Enter the price">
                        </div>

                        <div>
                            <label for="vehicleDesc"
                                class="block text-sm font-medium text-gray-700 mb-2">Description</label>
                            <textarea id="vehicleDesc" name="description" required
                                class="w-full bg-gray-800 text-white rounded-lg px-4 py-2 focus:ring-2 focus:ring-purple-600 transition-all border border-gray-700"
                                rows="3" placeholder="Write a description"></textarea>
                        </div>

                        <div>
                            <label for="fuelEconomy" class="block text-sm font-medium text-gray-700 mb-2">Fuel
                                Economy</label>
                            <input type="text" id="fuelEconomy" name="fuel_economy" required
                                class="w-full bg-gray-800 text-white rounded-lg px-4 py-2 focus:ring-2 focus:ring-purple-600 transition-all border border-gray-700"
                                placeholder="Enter the fuel economy">
                        </div>

                        <div>
                            <label for="features"
                                class="block text-sm font-medium text-gray-700 mb-2">Features</label>
                            <input type="text" id="features" name="features"
                                class="w-full bg-gray-800 text-white rounded-lg px-4 py-2 focus:ring-2 focus:ring-purple-600 transition-all border border-gray-700"
                                placeholder="Enter the features">
                        </div>

                        <div>
                            <label for="vehicleImage" class="block text-sm font-medium text-gray-700 mb-2">Vehicle
                                Image
                                URL</label>
                            <input type="url" id="vehicleImage" name="vehicule_image" required
                                class="w-full bg-gray-800 text-white rounded-lg px-4 py-2 focus:ring-2 focus:ring-purple-600 transition-all border border-gray-700"
                                placeholder="https://example.com/image.jpg">
                        </div>
                    </div>

                    <div class="flex justify-end space-x-3 pt-4">
                        <button type="button" onclick="closeAddVehicleModal()"
                            class="px-4 py-2 bg-white text-black border-black border-2 rounded-lg hover:bg-black hover:text-white transition-colors">
                            Cancel
                        </button>
                        <button type="submit" id="submitVehicleBtn"
                            class="px-4 py-2 bg-black text-white border-black border-2 rounded-lg hover:bg-white hover:text-black transition-colors">
                            <span>Add</span>
                            <div id="loadingVehicleSpinner" class="hidden ml-2">
                                <i class="fas fa-spinner fa-spin"></i>
                            </div>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        function openAddVehicleModal() {
            document.getElementById('addVehicleModal').classList.remove('hidden');
            document.getElementById('addVehicleModal').classList.add('flex');
        }

        function closeAddVehicleModal() {
            const modal = document.getElementById('addVehicleModal');
            modal.classList.add('hidden');
            document.getElementById('addVehicleForm').reset();
        }
    </script>
</body>

</html>