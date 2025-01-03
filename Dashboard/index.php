<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vroom</title>
    <link rel="stylesheet" href="../public/css/style.css">
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
            <a href=""><img class="w-[120px]" src="../public/img/logo.png" alt="logo"></a>
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
                <img class="w-[800px] translate-y-[200px]" src="../public/img/porchepnj.png" alt="dacia">

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
                <img class="w-[90px]" src="../public/img/volzwagen.png" alt="">
            </div>
            <div>
                <img class="w-[90px] " src="../public/img/toyota.png" alt="">
            </div>
            <div>
                <img class="w-[90px] " src="../public/img/renau.png" alt="">
            </div>
            <div>
                <img class="w-[90px] " src="../public/img/porche.png" alt="">
            </div>
            <div>
                <img class="w-[90px] " src="../public/img/nissan.png" alt="">
            </div>
            <div>
                <img class="w-[90px] " src="../public/img/mercedess.png" alt="">
            </div>


        </div>


    </section>



    <section>
    <div class="mt-10  justify-center gap-x-6 ml-24">
                <a href="#"
                    class="rounded-md text-white bg-black px-8 py-2.5 text-sm font-semibold  shadow-sm hover:text-black hover:bg-white border-2 border-black focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-white transform duration-300">Add a new car <i class="ri-speed-up-fill"></i></a>
            </div>
        <div class="flex flex-wrap gap-12 px-4 justify-center py-12">
          
            <!-- Image 1 -->
            <div class="relative group w-[500px] shadow-2xl h-[300px] bg-cover bg-center rounded-lg hover:scale-90 duration-300 hover:cursor-pointer"
                style="background-image: url('../public/img/dac.jpg');">
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
                style="background-image: url('../public/img/nis.jpg');">
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
                style="background-image: url('../public/img/porch.jpg');">
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
                style="background-image: url('../public/img/rau.webp');">
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
                style="background-image: url('../public/img/mer.jpg');">
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
                style="background-image: url('../public/img/volz.jpg');">
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













</body>