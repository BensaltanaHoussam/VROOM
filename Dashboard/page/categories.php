<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vroom</title>
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
    <!-- FIRST SECTION -->
    <section class="landingPage h-[230px] flex flex-col items-center rounded-b-full">
        <div
            class="flex fixed z-40 rounded-b-xl w-[85%]  justify-around gap-24 items-center py-3  md:px-24 bg-white shadow-2xl">
            <a href="./home.php"><img class="w-[120px]" src="../../public/img/logo.png" alt="logo"></a>
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

                <div class="mt-4 ">
                    <a href="#"onclick="openAddModal()"
                        class="rounded-md text-white bg-black px-8 py-2.5 text-sm font-semibold  shadow-sm hover:text-black hover:bg-white border-2 border-black focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-white transform duration-300">Add
                        a new category <i class="ri-speed-up-fill"></i></a>
                </div>

            </div>


        </div>
        <div class="flex flex-wrap gap-12 px-4 justify-center py-12">
            <!-- Image 1 -->
            <div class="relative group w-[500px] shadow-2xl h-[300px] bg-cover bg-center rounded-lg hover:scale-90 duration-300 hover:cursor-pointer"
                style="background-image: url('../../public/img/dac.jpg');">
                <div
                    class="absolute inset-0 rounded-lg bg-black bg-opacity-50 text-white flex opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                    <div class=" p-8">
                        <h3 class="text-2xl font-semibold">Dacia Car Model</h3>
                        <p class="mt-2 font-light">The Dacia is known for its affordability, reliability, and
                            efficiency. Perfect
                            for those looking for a budget-friendly car without compromising on essential features.</p>
                        <ul class="pb-4 text-sm">
                            <li><strong>Engine:</strong> 1.0L 3-cylinder engine</li>
                            <li><strong>Fuel Economy:</strong> 55 MPG</li>
                            <li><strong>Price:</strong> Starting at $15,000</li>
                            <li><strong>Features:</strong> Air Conditioning, Bluetooth, Touchscreen, and more!</li>
                        </ul>
                        <a href="./historique.php"
                            class="rounded-md self-end  text-black bg-white px-8 py-1 text-xs font-semibold  shadow-sm hover:text-white hover:bg-black border-2 border-white focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-white transform duration-300">Reserve
                            now <i class="ri-speed-up-fill"></i></a>

                    </div>
                </div>
            </div>


            <!-- Image 2 -->
            <div class="relative group w-[500px] shadow-2xl h-[300px] bg-cover bg-center rounded-lg hover:scale-90 duration-300 hover:cursor-pointer"
                style="background-image: url('../../public/img/nis.jpg');">
                <div
                    class="absolute inset-0 rounded-lg bg-black bg-opacity-50 text-white flex opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                    <div class="p-8">
                        <h3 class="text-2xl font-semibold">Nissan Car Model</h3>
                        <p class="mt-2 font-light">The Nissan car combines sleek design with advanced technology,
                            offering a smooth ride with modern features. A great choice for those seeking both luxury
                            and practicality.</p>
                        <ul class="text-sm pb-4">
                            <li><strong>Engine:</strong> 1.6L 4-cylinder engine</li>
                            <li><strong>Fuel Economy:</strong> 45 MPG</li>
                            <li><strong>Price:</strong> Starting at $22,000</li>
                            <li><strong>Features:</strong> Advanced Safety Features, Apple CarPlay, Heated Seats, and
                                more!</li>
                        </ul>
                        <a href="#"
                            class="rounded-md self-end text-black bg-white px-8 py-1 text-xs font-semibold shadow-sm hover:text-white hover:bg-black border-2 border-white focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-white transform duration-300">
                            Reserve now <i class="ri-speed-up-fill"></i>
                        </a>
                    </div>
                </div>

            </div>

            <!-- Image 3 -->
            <div class="relative group w-[500px] shadow-2xl h-[300px] bg-cover bg-center rounded-lg hover:scale-90 duration-300 hover:cursor-pointer"
                style="background-image: url('../../public/img/porch.jpg');">
                <div
                    class="absolute inset-0 rounded-lg bg-black bg-opacity-50 text-white flex opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                    <div class="p-8">
                        <h3 class="text-2xl font-semibold">Nissan Car Model</h3>
                        <p class="mt-2 font-light">The Nissan car combines sleek design with advanced technology,
                            offering a smooth ride with modern features. A great choice for those seeking both luxury
                            and practicality.</p>
                        <ul class="text-sm pb-4">
                            <li><strong>Engine:</strong> 1.6L 4-cylinder engine</li>
                            <li><strong>Fuel Economy:</strong> 45 MPG</li>
                            <li><strong>Price:</strong> Starting at $22,000</li>
                            <li><strong>Features:</strong> Advanced Safety Features, Apple CarPlay, Heated Seats, and
                                more!</li>
                        </ul>
                        <a href="#"
                            class="rounded-md self-end text-black bg-white px-8 py-1 text-xs font-semibold shadow-sm hover:text-white hover:bg-black border-2 border-white focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-white transform duration-300">
                            Reserve now <i class="ri-speed-up-fill"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Image 4 -->
            <div class="relative group w-[500px] shadow-2xl h-[300px] bg-cover bg-center rounded-lg hover:scale-90 duration-300 hover:cursor-pointer"
                style="background-image: url('../../public/img/rau.webp');">
                <div
                    class="absolute inset-0 rounded-lg bg-black bg-opacity-50 text-white flex opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                    <div class="p-8">
                        <h3 class="text-2xl font-semibold">Nissan Car Model</h3>
                        <p class="mt-2 font-light">The Nissan car combines sleek design with advanced technology,
                            offering a smooth ride with modern features. A great choice for those seeking both luxury
                            and practicality.</p>
                        <ul class="text-sm pb-4">
                            <li><strong>Engine:</strong> 1.6L 4-cylinder engine</li>
                            <li><strong>Fuel Economy:</strong> 45 MPG</li>
                            <li><strong>Price:</strong> Starting at $22,000</li>
                            <li><strong>Features:</strong> Advanced Safety Features, Apple CarPlay, Heated Seats, and
                                more!</li>
                        </ul>
                        <a href="#"
                            class="rounded-md self-end text-black bg-white px-8 py-1 text-xs font-semibold shadow-sm hover:text-white hover:bg-black border-2 border-white focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-white transform duration-300">
                            Reserve now <i class="ri-speed-up-fill"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Image 5 -->
            <div class="relative group w-[500px] shadow-2xl h-[300px] bg-cover bg-center rounded-lg hover:scale-90 duration-300 hover:cursor-pointer"
                style="background-image: url('../../public/img/mer.jpg');">
                <div
                    class="absolute inset-0 rounded-lg bg-black bg-opacity-50 text-white flex opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                    <div class="p-8">
                        <h3 class="text-2xl font-semibold">Nissan Car Model</h3>
                        <p class="mt-2 font-light">The Nissan car combines sleek design with advanced technology,
                            offering a smooth ride with modern features. A great choice for those seeking both luxury
                            and practicality.</p>
                        <ul class="text-sm pb-4">
                            <li><strong>Engine:</strong> 1.6L 4-cylinder engine</li>
                            <li><strong>Fuel Economy:</strong> 45 MPG</li>
                            <li><strong>Price:</strong> Starting at $22,000</li>
                            <li><strong>Features:</strong> Advanced Safety Features, Apple CarPlay, Heated Seats, and
                                more!</li>
                        </ul>
                        <a href="#"
                            class="rounded-md self-end text-black bg-white px-8 py-1 text-xs font-semibold shadow-sm hover:text-white hover:bg-black border-2 border-white focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-white transform duration-300">
                            Reserve now <i class="ri-speed-up-fill"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Image 6 -->
            <div class="relative group w-[500px] shadow-2xl h-[300px] bg-cover bg-center rounded-lg hover:scale-90 duration-300 hover:cursor-pointer"
                style="background-image: url('../../public/img/volz.jpg');">
                <div
                    class="absolute inset-0 rounded-lg bg-black bg-opacity-50 text-white flex opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                    <div class="p-8">
                        <h3 class="text-2xl font-semibold">Nissan Car Model</h3>
                        <p class="mt-2 font-light">The Nissan car combines sleek design with advanced technology,
                            offering a smooth ride with modern features. A great choice for those seeking both luxury
                            and practicality.</p>
                        <ul class="text-sm pb-4">
                            <li><strong>Engine:</strong> 1.6L 4-cylinder engine</li>
                            <li><strong>Fuel Economy:</strong> 45 MPG</li>
                            <li><strong>Price:</strong> Starting at $22,000</li>
                            <li><strong>Features:</strong> Advanced Safety Features, Apple CarPlay, Heated Seats, and
                                more!</li>
                        </ul>
                        <a href="#"
                            class="rounded-md self-end text-black bg-white px-8 py-1 text-xs font-semibold shadow-sm hover:text-white hover:bg-black border-2 border-white focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-white transform duration-300">
                            Reserve now <i class="ri-speed-up-fill"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <!-- Add Category Modal -->
    <div id="addCategoryModal" class="fixed inset-0 bg-black bg-opacity-50 hidden items-center justify-center z-50">
        <div class="bg-white rounded-xl max-w-md w-full mx-4 shadow-2xl">
            <div class="p-6">
                <div class="flex justify-between items-center mb-4">
                    <h3 class="text-xl font-bold text-black">Ajouter une Catégorie</h3>
                    <button onclick="closeAddModal()" class="text-gray-400 hover:text-white transition-colors"
                        aria-label="Fermer">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
                <form id="addCategoryForm" class="space-y-4" onsubmit="handleSubmit(event)"
                    enctype="multipart/form-data">
                    <div>
                        <label for="categoryName" class="block text-sm font-medium text-gray-700 mb-2">category name </label>
                        <input type="text" id="categoryName" name="categoryName" required
                            class="w-full bg-gray-800 text-white rounded-lg px-4 py-2 focus:ring-2 focus:ring-purple-600 transition-all border border-gray-700"
                            placeholder="enter the name of the category">
                        <div class="text-red-500 text-xs mt-1 hidden" id="categoryNameError"></div>
                    </div>

                    <div>
                        <label for="categoryDesc" class="block text-sm font-medium text-gray-700 mb-2">Description
                            *</label>
                        <textarea id="categoryDesc" name="categoryDesc" required
                            class="w-full bg-gray-800 text-white rounded-lg px-4 py-2 focus:ring-2 focus:ring-purple-600 transition-all border border-gray-700"
                            rows="3" placeholder="Write a description"></textarea>
                        <div class="text-red-500 text-xs mt-1 hidden" id="categoryDescError"></div>
                    </div>

                    <div>
                        <label for="categoryName" class="block text-sm font-medium text-gray-700 mb-2">category name </label>
                        <input type="text" id="categoryName" name="categoryName" required
                            class="w-full bg-gray-800 text-white rounded-lg px-4 py-2 focus:ring-2 focus:ring-purple-600 transition-all border border-gray-700"
                            placeholder="enter the name of the category">
                        <div class="text-red-500 text-xs mt-1 hidden" id="categoryNameError"></div>
                    </div>

                
                    <div class="flex justify-end space-x-3 pt-4">
                        <button type="button" onclick="closeAddModal()"
                            class="px-4 py-2 bg-white text-black border-black border-2 rounded-lg hover:bg-black hover:text-white transition-colors">
                            Annuler
                        </button>
                        <button type="submit" id="submitBtn"
                            class="px-4 py-2 bg-black text-white border-black border-2 rounded-lg hover:bg-white hover:text-black transition-colors">
                            <span>Ajouter</span>
                            <div id="loadingSpinner" class="hidden ml-2">
                                <i class="fas fa-spinner fa-spin"></i>
                            </div>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <script>

        function openAddModal() {
            document.getElementById('addCategoryModal').classList.remove('hidden');
            document.getElementById('addCategoryModal').classList.add('flex');
        }

        function closeAddModal() {
            const modal = document.getElementById('addCategoryModal');
            modal.classList.add('hidden');
            document.getElementById('addCategoryForm').reset();
            document.getElementById('imagePreview').classList.add('hidden');
        }


    </script>




















</body>