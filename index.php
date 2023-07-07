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
                                    <a href="#" class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-[var(--primary)] md:hover:text-blue-700 md:p-0">Home</a>
                                </li>
                                <li>
                                    <a href="#" class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-[var(--primary)] md:hover:bg-transparent md:hover:text-blue-700 md:p-0">Recipes</a>
                                </li>
                                <li>
                                    <a href="#" class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-[var(--primary)] md:hover:bg-transparent md:hover:text-blue-700 md:p-0">Contact</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
                <section>
                    <div class="flex justify-center items-center mt-10 h-[60vh]">
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
                    </div>
                </section>
            </div>
            <div class="recommendation h-screen p-5">
                <div class="grid grid-cols-2 max-sm:grid-cols-1 place-items-center">
                    <?php 
                        foreach (range(1, 1) as $i) {
                        $randomMeal = $mealDB->getRandomMeal();
                    ?>
                        <div class="max-w-sm border border-gray-200 rounded-lg shadow dark:bg-[var(--accent)] dark:border-[var(--secondary)]">
                            <div>
                                <img class="rounded-t-lg md:h-auto" src="<?=$mealDB->mealThumb ?>" alt="" />
                            </div>
                            <div class="p-5">
                                <a href="#">
                                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white"><?=$mealDB->mealName; ?></h5>
                                </a>
                                <p class="mb-3 font-normal"><?=$mealDB->mealArea ?> &#x2022; <?=$mealDB->mealCategory ?></p>
                                <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center bg-[var(--secondary)] rounded-lg hover:bg-[var(--secondary)] focus:ring-4 focus:outline-none focus:ring-[var(--secondary)]">
                                    Read more
                                    <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                                    </svg>
                                </a>
                            </div>
                        <?php 
                            }
                        ?>
                    </div>
                    <div class="grid grid-rows-3 gap-4 pt-11 mySwiper">
                        <?php 
                            for ($i = 0; $i < 3; $i++) {
                                $randomMeal = $mealDB->getRandomMeal();
                        ?>
                            <div class="flex flex-col swiper-slide items-center dark:bg-[var(--accent)] border border-[var(--secondary) rounded-lg shadow md:flex-row md:max-w-xl">
                                <img class="object-cover w-full rounded-t-lg h-82 md:h-auto md:w-48 md:rounded-none md:rounded-l-lg" src="<?=$mealDB->mealThumb ?>" alt="">
                                <div class="flex flex-col justify-between p-4 leading-normal">
                                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white"><?=$mealDB->mealName; ?></h5>
                                    <p class="mb-3 font-normal"><?=$mealDB->mealArea ?> &#x2022; <?=$mealDB->mealCategory ?></p>
                                    <a href="#" class="inline-flex w-32  px-3 py-2 text-sm font-medium text-center bg-[var(--secondary)] rounded-lg hover:bg-[var(--secondary)] focus:ring-4 focus:outline-none focus:ring-[var(--secondary)]">
                                        Read more
                                        <svg class="w-3.5 h-3.5 mt-1 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <div class="kitchen h-screen">
                <div class="grid grid-cols-4  mt-5 gap-2 p-2">
                    <div class="bg-[var(--tc)] p-3 text-center rounded-lg overflow-hidden shadow-md md:m-5 hover:bg-[var(--sc)]">
                        <div class="flex flex-col items-center">
                            <span class="mb-2"><i class="fas fa-carrot fa-2x"></i></span>
                            <span class="max-sm:hidden font-bold text-xl">Vegetable</span>
                        </div>        
                    </div>
                    <div class="bg-[var(--tc)] p-3 text-center rounded-lg overflow-hidden shadow-md md:m-5 hover:bg-[var(--sc)]">
                        <div class="flex flex-col items-center">
                            <span class="mb-2"><i class="fas fa-bacon fa-2x"></i></span>
                            <span class="max-sm:hidden font-bold text-xl">Beef</span>
                        </div>   
                    </div>
                    <div class="bg-[var(--tc)] p-3 text-center rounded-lg overflow-hidden shadow-md md:m-5 hover:bg-[var(--sc)]">
                        <div class="flex flex-col items-center">
                            <span class="mb-2"><i class="fas fa-fish fa-2x"></i></span>
                            <span class="max-sm:hidden font-bold text-xl">Seafood</span>
                        </div>   
                    </div>
                    <div class="bg-[var(--tc)] p-3 text-center rounded-lg overflow-hidden shadow-md md:m-5 hover:bg-[var(--sc)]">
                        <div class="flex flex-col items-center">
                            <span class="mb-2"><i class="fas fa-drumstick-bite fa-2x"></i></span>
                            <span class="max-sm:hidden font-bold text-xl">Chicken</span>
                        </div>   
                    </div>
                </div>
            </div>
        </div>
        <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
        <script src="https://cdn.tailwindcss.com"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.7.0/flowbite.min.js"></script>
    </body>
</html>