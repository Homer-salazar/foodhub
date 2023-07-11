<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./css/style.css">
        <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400&display=swap" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.7.0/flowbite.min.css" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link
            rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"
        />       
        <title>Foodhub</title>
    </head>
    <body> 
        <?php 
            require_once("./services/__api.php");
            $mealDB = new MealDB();
            $randomMeal = $mealDB->getRandomMeal();
        ?>
        <div id="index" class="container-fluid">
            <div class="home h-screen">
                <nav class="pb-10">
                    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
                        <a href="https://flowbite.com/" class="flex items-center">
                            <img src="https://flowbite.com/docs/images/logo.svg" class="h-8 mr-3" alt="Flowbite Logo" />
                            <span class="self-center text-2xl font-semibold whitespace-nowrap">FoodHub</span>
                        </a>
                        <div class="flex md:order-2">
                            <button type="button" data-collapse-toggle="navbar-search" aria-controls="navbar-search" aria-expanded="false" class="md:hidden text-gray-500 rounded-lg text-sm p-2.5 mr-1" >
                                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                                </svg>
                                <span class="sr-only">Search</span>
                            </button>
                            <div class="relative hidden md:block">
                                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                    <svg class="w-4 h-4 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                                    </svg>
                                    <span class="sr-only">Search icon</span>
                                </div>
                                <input type="text" id="search-navbar" class="block w-full p-2 pl-10 text-sm text-gray-900 rounded-lg focus:ring-blue-500 focus:border-blue-500" placeholder="Search...">
                            </div>
                            <button data-collapse-toggle="navbar-search" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden  focus:outline-none focus:ring-2 focus:ring-gray-200" aria-controls="navbar-search" aria-expanded="false">
                                <span class="sr-only">Open main menu</span>
                                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
                                </svg>
                            </button>
                        </div>
                        <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-search">
                            <div class="relative mt-3 md:hidden">
                                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                    <svg class="w-4 h-4 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                                    </svg>
                                </div>
                                <input type="text" id="search-navbar" class="block w-full p-2 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500" placeholder="Search...">
                            </div>
                            <ul class="flex flex-col p-4 md:p-0 mt-4 font-medium max-sm:bg-[var(--secondary)] border border-gray-100 rounded-lg md:flex-row md:space-x-8 md:mt-0 md:border-0 ">
                                <li>
                                    <a href="#" class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-[var(--primary)] md:hover:text-[var(--primary)] md:p-0">Home</a>
                                </li>
                                <li>
                                    <a href="#" class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-[var(--primary)] md:hover:bg-transparent md:hover:text-[var(--primary)] md:p-0">Recipes</a>
                                </li>
                                <li>
                                    <a href="#" class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-[var(--primary)] md:hover:bg-transparent md:hover:text-[var(--primary)] md:p-0">Contact</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
                <section>
                    <!-- <div class="flex justify-center items-center mt-10 h-[60vh]">
                        <div class="grid md:grid-cols-2 grid-cols-1 gap-4">
                            <div class="max-sm:order-2">
                                <h1 class="text-6xl font-bold text-center text-2xl sm:text-3xl md:text-4xl lg:text-5xl xl:text-6xl"><?=$mealDB->mealName; ?></h1>
                                <p class="text-xl text-center py-3"><?=$mealDB->mealArea ?> &#x2022; <?=$mealDB->mealCategory ?></p>
                                <div class="flex justify-center gap-4 py-3 px-3 font-semibold">
                                    <a href="<?=$mealDB->mealYoutube; ?>" target="_blank"  class="px-4 py-2 bg-transparent border border-5-[--secondary] rounded-lg hover:bg-[var(--primary)]">Watch now</a>
                                    <a href="./pages/recipes.php?id=<?=$mealDB->mealId; ?>" class="px-4 py-2 bg-[var(--accent)] rounded">Read Now</a>
                                </div>
                            </div>
                            <div class="max-sm:order-1">
                                <img class="w-72 mx-auto max-w-full rounded-lg shadow-lg ring-2 ring-[var(--secondary)]" src="<?=$mealDB->mealThumb ?>" alt="">
                            </div>
                        </div>
                    </div> -->
                </section>
            </div>
            <div class="recommendation h-screen p-2">
                <div class="grid md:place-items-center">
                    <h1 class="font-bold max-sm:text-xl text-4xl mb-3 mt-1">Today's Recommendation</h1>
                </div>
                <!-- <div class="card-section overflow-hidden p-3" style="scrollbar-width: thin;">
                    <div class="swiper-container">
                        <div class="swiper-wrapper mt-2 gap-2 cursor-pointer">
                            <?php 
                                for ($i = 0; $i < 10; $i++) { 
                                $randomMeal = $mealDB->getRandomMeal();

                            ?>
                                <div class="swiper-slide">
                                    <div class="max-w-sm border border-gray-200 rounded-lg shadow dark:bg-[var(--accent)] dark:border-[var(--secondary)]">
                                        <div>
                                            <img class="rounded-t-lg md:h-auto" src="<?=$mealDB->mealThumb ?>" alt="" />
                                        </div>
                                        <div class="p-5">
                                            <a href="#">
                                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:><?=$mealDB->mealName; ?></h5>
                                            </a>
                                            <p class="mb-3 font-normal"><?=$mealDB->mealArea ?> &#x2022; <?=$mealDB->mealCategory ?></p>
                                            <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center bg-[var(--secondary)] rounded-lg hover:bg-[var(--secondary)] focus:ring-4 focus:outline-none focus:ring-[var(--secondary)]">
                                                Read more
                                                <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div> -->
            </div>
            <div class="category h-[20vh] p-4">
                <h1 class="pb-2">Categories</h1>
                <div class="grid grid-cols-7">
                    <button type="button" class="bg-[var(--primary)] hover:bg-[var(--secondary)] focus:ring-4 focus:ring-[var(--secondary)] font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2">
                        <i class="fa-solid fa-drumstick-bite fa-2x"></i><br>
                        <span class="text-2xl">
                            Chicken
                        </span>
                    </button>
                    <button type="button" class="bg-[var(--primary)] hover:bg-[var(--secondary)] focus:ring-4 focus:ring-[var(--secondary)] font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2">Default</button>
                    <button type="button" class="bg-[var(--primary)] hover:bg-[var(--secondary)] focus:ring-4 focus:ring-[var(--secondary)] font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2">Default</button>
                    <button type="button" class="bg-[var(--primary)] hover:bg-[var(--secondary)] focus:ring-4 focus:ring-[var(--secondary)] font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2">Default</button>
                    <button type="button" class="bg-[var(--primary)] hover:bg-[var(--secondary)] focus:ring-4 focus:ring-[var(--secondary)] font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2">Default</button>
                    <button type="button" class="bg-[var(--primary)] hover:bg-[var(--secondary)] focus:ring-4 focus:ring-[var(--secondary)] font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2">Default</button>
                    <button type="button" class="bg-[var(--primary)] hover:bg-[var(--secondary)] focus:ring-4 focus:ring-[var(--secondary)] font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2">Default</button>
                </div>
            </div>
        </div>

v
        <!-- Swiper JS -->
        <script src="https://unpkg.com/swiper@6.8.4/swiper-bundle.min.js"></script>
        <!-- Initialize Swiper -->
        <script>
            var swiper = new Swiper('.swiper-container', {
                slidesPerView: 1,
                spaceBetween: 10,
                breakpoints: {
                    640: {
                        slidesPerView: 2,
                        spaceBetween: 5,
                    },
                    768: {
                        slidesPerView: 3,
                        spaceBetween: 20,
                    },
                },
            });
        </script>   

        <script src="https://cdn.tailwindcss.com"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.7.0/flowbite.min.js"></script>
    </body>
</html>