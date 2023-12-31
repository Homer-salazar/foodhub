<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./css/style.css">
        <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400&display=swap" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.7.0/flowbite.min.css" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />


        <title>Foodhub</title>
    </head>
    <body> 
        <?php 
            require_once("./services/__api.php");
            $mealDB = new MealDB();
            $randomMeal = $mealDB->getRandomMeal();
        ?>
        <div id="index" class="container-fluid">
            <div class="home h-screen  overflow-x-hidden">
                <nav>
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
                                    <a href="#" class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-[var(--primary)] md:hover:text-white md:p-0">Home</a>
                                </li>
                                <li>
                                    <a href="#" class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-[var(--primary)] md:hover:bg-transparent md:hover:text-white md:p-0">Recipes</a>
                                </li>
                                <li>
                                    <a href="#" class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-[var(--primary)] md:hover:bg-transparent md:hover:text-white md:p-0">Contact</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
                <div class="hero h-[75vh]">
                    <section class="md:ml-8 max-sm:p-4 mt-17">
                        <h1 class="font-bold text-3xl mb-3">Discover</h1>
                        <div class="swiper-container">
                            <div class="swiper-wrapper">
                                <?php 
                                    for ($i = 0; $i < 4; $i++) { 
                                    $randomMeal = $mealDB->getRandomMeal(); 
                                ?>
                                    <div class="swiper-slide">
                                        <a href="#" class="block max-w-md p-6 bg-[var(--accent)] border border-gray-200 rounded-lg shadow hover:bg-gray-100">
                                            <div class="grid grid-cols-2 gap-5">
                                                <div>
                                                    <p class="font-bold max-sm:text-xl"><?= $mealDB->mealName; ?></p>
                                                    <p><?= $mealDB->mealArea ?> &#x2022; <?= $mealDB->mealCategory ?></p>
                                                </div>
                                                <div>
                                                    <img class="rounded-lg" src="<?= $mealDB->mealThumb ?>" alt="">
                                                </div>
                                            </div>
                                        </a>
                                    </div>

                                <?php } ?>
                            </div>
                        </div>
                    </section>
                    <section class="md:ml-8 mt-10 max-sm:p-4">
                        <h1 class="font-bold text-xl mb-3">Categories</h1>
                        <div class="swipers">
                            <div class="swiper-wrapper">
                                <?php 
                                        $mealDB = new MealDB();
                                        $categories = $mealDB->getAllCategories();
                                        if ($categories !== null) {
                                            foreach ($categories as $category) {                  
                                ?>
                                    <div class="swiper-slide">
                                        <a href="#" class="block max-w-md p-12 bg-[var(--accent)] bg-cover bg-center border border-gray-200 rounded-lg shadow" style="background-image: url('<?=$category['strCategoryThumb'] ?>');">
                                            <div class="grid gap-5 absolute bottom-0 left-0 right-0 bg-black bg-opacity-50 text-center">
                                            <p class="text-white font-bold"><?=$category['strCategory'] ?></p>
                                            </div>
                                        </a>
                                    </div>
                                <?php } 
                                    }
                                ?>
                            </div>
                        </div>
                    </section>
                </div>
                <section class="mt-10 p-5 mb-10">
                    <h1 class="font-bold text-xl mb-3">Popular recipes</h1>
                    <?php 
                        foreach (range(1, 1) as $i) {
                        $randomMeal = $mealDB->getRandomMeal(); 
                    ?>                           
                        <div class="grid grid-cols-2 max-sm:grid-cols-1 items-center bg-white border border-gray-200 rounded-lg shadow md:flex-row hover:bg-gray-100">
                            <img class="object-cover bg-cover w-full rounded-t-lg h-96  md:rounded-none md:rounded-l-lg" src="<?= $mealDB->mealThumb ?>" alt="">
                            <div class="flex flex-col justify-between p-4 leading-normal">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900"><?= $mealDB->mealName; ?></h5>
                                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400"><?=$mealDB->mealArea ?> &#x2022; <?=$mealDB->mealCategory ?></p>
                                <div class="grid grid-cols-2 gap-4 w-72 text-center">
                                    <a href="<?=$mealDB->mealYoutube; ?>" target="_blank"  class="px-4 py-2 bg-transparent border border-2-[--primary] rounded-lg hover:bg-[var(--primary)]">Watch now</a>
                                    <a href="./pages/recipes.php?id=<?=$mealDB->mealId; ?>" class="px-4 py-2 bg-[var(--accent)] rounded">Read Now</a>                     
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </section>
            </div>
        </div>
        <?php 
            require_once("./layouts/footer.php");
        ?>
        
        <!-- Swiper JS -->
        <script src="https://unpkg.com/swiper@6.8.4/swiper-bundle.min.js"></script>
        <!-- Initialize Swiper -->
        <script>
            var swiper = new Swiper('.swiper-container', {
                slidesPerView: 1,
                spaceBetween: 10,
                breakpoints: {
                    640: {
                        slidesPerView: 3,
                        spaceBetween: 10,
                    },
                    768: {
                        slidesPerView: 3,
                        spaceBetween: 7,
                    },
                },
            });

            var swiper = new Swiper('.swipers', {
                slidesPerView: 3,
                spaceBetween: 10,
                breakpoints: {
                    640: {
                        slidesPerView: 3,
                        spaceBetween: 10,
                    },
                    768: {
                        slidesPerView: 5,
                        spaceBetween: 15,
                    },
                },
            });
        </script> 
        <script src="https://cdn.tailwindcss.com"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.7.0/flowbite.min.js"></script>
    </body>
</html>