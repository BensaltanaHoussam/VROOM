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







    <section class="bg-[url('../public/img/landingPageBG.jpg')] h-[580px] bg-cover bg-center ">
        <div class="flex    md:h-screen lg:py-0">

            <div
                class="w-[45%] flex flex-col justify-center px-8 border-r-2 border-r-white bg-black    h-[100vh] bg-  sblackhadow-xl shadow-white/40">
                <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                    <h1 class="text-2xl font-bold text-white ">
                        Sign UP
                    </h1>
                    <form class="space-y-4 md:space-y-6" methode="GET" action="userlogin.php">
                        <div>
                            <label for="Full name" class="block mb-2 text-sm text-white">Your name</label>
                            <input type="text" name="email" id="email"
                                class="w-full p-3 border-2 border-white  rounded-xl text-sm "
                                placeholder="name@company.com" required="">
                        </div>
                        <div>
                            <label for="email" class="block mb-2 text-sm text-white">Your email</label>
                            <input type="email" name="email" id="email"
                                class="w-full p-3 border-2 border-white  rounded-xl text-sm "
                                placeholder="name@company.com" required="">
                        </div>
                        <div>
                            <label for="password" class="block mb-2 text-sm text-white">Your password</label>
                            <input type="password" name="password" id="password" class="w-full p-3  rounded-xl text-sm"
                                placeholder="********" required="">
                        </div>
                        <div>
                            <label for="password" class="block mb-2 text-sm text-white">confirm password</label>
                            <input type="password" name="password" id="password" class="w-full p-3  rounded-xl text-sm"
                                placeholder="********" required="">
                        </div>


                        <button
                            class="w-full text-black rounded-2xl bg-white text-center py-2 hover:bg-black border-2 hover:text-white hover:border-2 border-white transform duration-300">
                            Login</button>
                        <p class="text-sm font-light text-gray-500 dark:text-gray-400">
                            Go to login page? <a href="../public/home.php"
                                class="font-medium text-white hover:underline dark:text-primary-500">Login</a>
                        </p>
                    </form>
                </div>
            </div>

            <div class="flex flex-col justify-center px-8">
                <h2 class="text-balance text-slate-100 font-semibold w-[450px]  text-5xl"><span
                        class="text-white font-light">VROOM</span> the perfect car rental experience!</h2>
                <p class="mt-6 text-pretty text-lg/8 w-[550px] font-light  text-gray-100">Ready to hit the road? Take
                    the wheel of your perfect car today! Whether it's for a weekend getaway, a business trip, or just
                    exploring your city, we’ve got the ideal vehicle waiting for you. With quick booking, flexible
                    rental terms, and the best prices around, it's never been easier to drive in comfort and style.
                    Don't wait—your next adventure starts now!</p>


            </div>

        </div>
    </section>












</body>

</html>