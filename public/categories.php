<?php
require_once __DIR__ . '/../app/database/Database.php';
require_once __DIR__ . '/../app/class/categorie.php';

// Initialize database connection
$database = new Database();
$db = $database->connect();

// Initialize Category class
$category = new Category($db);

// Fetch all categories
$categories = $category->getAllCategories();
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
    <section class="landingPage h-[230px] flex flex-col items-center rounded-b-full">
        <div
            class="flex fixed z-40 rounded-b-xl w-[85%]  justify-around gap-24 items-center py-3  md:px-24 bg-white shadow-2xl">
            <a href="./home.php"><img class="w-[120px]" src="./img/logo.png" alt="logo"></a>
            <div class="flex gap-12 items-center">
                <a class=" bg-black text-white border-2 hover:bg-white hover:border-2 hover:text-black py-1 px-4 rounded-md transform duration-300"
                    href="./home.php">Home</a>
                <a href="./historique.php">Reservations</a>
                <a href="./categories.php">Categories</a>
                <a href="./categories.php">Services</a>
            </div>
            <div>
                <a href="#"
                    class="text-white text-lg bg-black border-2 rounded-3xl py-1 px-4 hover:text-black hover:bg-white hover:border-black transform duration-300  ">Contact
                    Us</a>
            </div>
        </div>

        <div class=" bg-center gap-12 bg-cover   h-[100vh]  lg:pt-0 mt-24">

            <div class="mx-auto max-w-screen-sm text-center">
                <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">This is our cars
                    categories</h2>
                <p class="font-light text-gray-500 lg:mb-16 sm:text-xl dark:text-gray-200">Explore our cars collection
                    with category let's drive !</p>
            </div>




        </div>

    </section>


    <section>
        <div class="max-w-2xl mx-auto">

            <form>
                <label for="default-search" class="mb-2 text-sm font-medium text-white">Search</label>
                <div class="relative">
                    <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                        <svg class="w-5 h-5 text-white dark:text-white" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                        </svg>
                    </div>
                    <input type="search" id="default-search"
                        class="block p-4 pl-10 w-full text-sm text-gray-900 bg-white rounded-lg border border-gray-300 focus:ring-black focus:border-black dark:bg-black dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-black dark:focus:border-black"
                        placeholder="Search a car " required>
                    <button type="submit"
                        class="text-black absolute right-2.5 bottom-2.5 bg-white font-medium rounded-lg text-sm px-4 py-2 ">Search</button>
                </div>
            </form>
            <div class="flex gap-4">
                <div class="w-64 ">
                    <label for="options" class="block text-gray-700 text-sm font-semibold mb-2"></label>
                    <select id="options"
                        class="block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
                        <option value="option1">Option 1</option>
                        <option value="option2">Option 2</option>
                        <option value="option3">Option 3</option>
                        <option value="option4">Option 4</option>
                    </select>
                </div>

            

            </div>


        </div>
        <div class="flex flex-wrap gap-12 px-4 justify-center py-12">
            <?php foreach ($categories as $category): ?>
                <div class="relative group w-[500px] shadow-2xl h-[300px] bg-cover bg-center rounded-lg hover:scale-90 duration-300 hover:cursor-pointer"
                    style="background-image: url('<?php echo $category['categorie_img']; ?>');">
                    <div
                        class="absolute inset-0 rounded-lg bg-black bg-opacity-50 text-white flex opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <div class="p-8">
                            <h3 class="text-2xl font-semibold"><?php echo $category['nom']; ?></h3>
                            <p class="mt-2 font-light"><?php echo $category['description']; ?></p>                 
                            <a href="vehicles.php?category_id=<?php echo $category['id_categorie']; ?>" class="text-green-500">Show Vehicles</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </section>





























</body>

</html>