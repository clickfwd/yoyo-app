<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Yoyo Demo App</title>
    <link href="/assets/css/main.css" rel="stylesheet">
    <?php yoyo_styles(); ?>
    <?php yoyo_scripts(); ?>
</head>

<body>

    <div class="relative overflow-hidden">

        <svg class="hidden lg:block absolute left-full transform -translate-x-1/2 -translate-y-1/4" width="404"
            height="784" fill="none" viewBox="0 0 404 784">
            <defs>
                <pattern id="b1e6e422-73f8-40a6-b5d9-c8586e37e0e7" x="0" y="0" width="20" height="20"
                    patternUnits="userSpaceOnUse">
                    <rect x="0" y="0" width="4" height="4" class="text-blue-300" fill="currentColor"></rect>
                </pattern>
            </defs>
            <rect width="404" height="784" fill="url(#b1e6e422-73f8-40a6-b5d9-c8586e37e0e7)"></rect>
        </svg>

        <div class="pt-6 px-6 sm:px-3 max-w-3xl mx-auto flex flex-row items-center justify-between">

            <a href="/"
                class="select-none text-3xl sm:text-4xl md:text-5xl font-bold text-gray-500 my-6 tracking-wider">
                <span class="bg-clip-text text-transparent bg-gradient-to-r from-teal-400 to-blue-500">yoyo</span>
                <span class="text-gray-200 mx-2">|</span> app
            </a>

            <a href="https://github.com/clickfwd/yoyo-app">
                <svg class="w-8 h-8 text-gray-600 hover:text-pink-600 transition duration-500 ease-in-out"
                    viewBox="0 0 24 24" fill="currentColor">
                    <g data-name="Layer 2">
                        <rect width="24" height="24" transform="rotate(180 12 12)" opacity="0" />
                        <path
                            d="M12 1A10.89 10.89 0 0 0 1 11.77 10.79 10.79 0 0 0 8.52 22c.55.1.75-.23.75-.52v-1.83c-3.06.65-3.71-1.44-3.71-1.44a2.86 2.86 0 0 0-1.22-1.58c-1-.66.08-.65.08-.65a2.31 2.31 0 0 1 1.68 1.11 2.37 2.37 0 0 0 3.2.89 2.33 2.33 0 0 1 .7-1.44c-2.44-.27-5-1.19-5-5.32a4.15 4.15 0 0 1 1.11-2.91 3.78 3.78 0 0 1 .11-2.84s.93-.29 3 1.1a10.68 10.68 0 0 1 5.5 0c2.1-1.39 3-1.1 3-1.1a3.78 3.78 0 0 1 .11 2.84A4.15 4.15 0 0 1 19 11.2c0 4.14-2.58 5.05-5 5.32a2.5 2.5 0 0 1 .75 2v2.95c0 .35.2.63.75.52A10.8 10.8 0 0 0 23 11.77 10.89 10.89 0 0 0 12 1"
                            data-name="github" />
                    </g>
                </svg>
            </a>
        </div>

        <main class="mt-10 pb-16 mx-auto max-w-screen-xl px-4 sm:mt-12 sm:px-6 md:mt-24">
            <div class="text-center">
                <h2
                    class="text-4xl tracking-tight leading-none font-extrabold text-gray-900 sm:text-5xl  md:text-6xl">
                    Building <span class="text-blue-600">reactive PHP apps</span>
                    <br>just got a whole lot easier
                </h2>
                <p class="mt-3 max-w-md mx-auto text-base text-gray-500 sm:text-lg md:mt-5 md:text-xl md:max-w-3xl">
                    Scroll down to experience live examples of reactive components built with Yoyo. Examples
                    labeled with <span
                            class="inline-flex items-center px-3 py-0.5 rounded-full text-sm font-medium leading-5 bg-green-100 text-green-800">Alpine
                            JS</span> indicate the use of <a rel="noopener" class="underline" href="https://github.com/alpinejs/alpine">Alpine JS</a> to sprinkle some needed, declarative,
                    Javascript functionality.
                </p>
                <div class="mt-5 max-w-md mx-auto space-x-6 sm:flex sm:justify-center md:mt-8">
                    <span class="rounded-md shadow">
                        <a href="https://github.com/clickfwd/yoyo"
                            class="inline-flex items-center justify-center px-5 py-3 border border-transparent text-base leading-6 font-medium rounded-md text-white bg-blue-600 hover:bg-blue-500 focus:outline-none focus:shadow-outline transition duration-150 ease-in-out">
                            Get started
                        </a>
                    </span>
                    <span class="mt-3 rounded-md shadow sm:mt-0 sm:ml-3">
                        <a href="https://github.com/clickfwd/yoyo-app"
                            class="inline-flex items-center justify-center px-5 py-3 border border-transparent text-base leading-6 font-medium rounded-md text-blue-700 bg-blue-100 hover:text-blue-600 hover:bg-blue-50 focus:outline-none focus:shadow-outline focus:border-blue-300 transition duration-150 ease-in-out">
                            Get demo code
                        </a>
                    </span>
                </div>
            </div>
        </main>

        <div class="px-0 py-6 sm:px-6 sm:p-12 bg-gray-50">

            <div class="max-w-3xl mx-auto">

                <svg class="hidden lg:block absolute right-full transform translate-x-1/2 translate-y-96" width="404"
                    height="784" fill="none" viewBox="0 0 404 784">
                    <defs>
                        <pattern id="64e643ad-2176-4f86-b3d7-f2c5da3b6a6d" x="0" y="0" width="20" height="20"
                            patternUnits="userSpaceOnUse">
                            <rect x="0" y="0" width="4" height="4" class="text-teal-300" fill="currentColor"></rect>
                        </pattern>
                    </defs>
                    <rect width="404" height="784" fill="url(#64e643ad-2176-4f86-b3d7-f2c5da3b6a6d)"></rect>
                </svg>

                <?php
                $componentList = [
                    [
                        'name' => 'counter',
                        'heading' => 'Counter',
                    ],
                    [
                        'name' => 'upload',
                        'heading' => 'Image Upload',
                    ],
                    [
                        'name' => 'nesting-parent',
                        'heading' => 'Nested Wishlists',
                    ],
                    [
                        'name' => 'wishlist-counter',
                        'heading' => 'Wishlist Counter',
                        'attributes' => ['id' => 'wishlist-counter'],
                    ],
                    [
                        'name' => 'live-search',
                        'heading' => 'Live Search',
                    ],
                    [
                        'name' => 'todo',
                        'heading' => 'Todo',
                        'alpine'  => true,
                    ],
                    [
                        'name' => 'load-more',
                        'heading' => 'Load More',
                    ],
                    [
                        'name' => 'pagination',
                        'heading' => 'Pagination',
                    ],
                    [
                        'name' => 'list-with-modal',
                        'heading' => 'List with Edit Modal',
                        'alpine'  => true,
                    ],
                    [
                        'name' => 'dynamic-content',
                        'heading' => 'Onload Dynamic Content',
                    ],
                    [
                        'name' => 'polling',
                        'heading' => 'Polling',
                    ],
                    [
                        'name' => 'form',
                        'heading' => 'Form',
                    ],
                    [
                        'name' => 'spinning',
                        'heading' => 'Spinning',
                    ],
                ];
                ?>

                <?php
                foreach ($componentList as $component):
                    $attributes = $variables = [];
                    $alpine = false;
                    extract($component);
                ?>

                <div id="<?php echo $name; ?>-component" class="mb-20 relative">

                    <div
                        class="absolute inset-0 bg-gradient-to-r from-teal-400 to-blue-400 shadow-lg transform -skew-y-3 sm:skew-y-0 sm:-rotate-3 sm:rounded-lg">
                    </div>

                    <div class="relative bg-white p-6 sm:p-10 my-4 shadow-lg sm:rounded-lg">

                        <div class="sm:-ml-6 mb-8 flex items-center justify-between">
                            <div class="flex items-center">
                                <a href="#<?php echo $name; ?>-component" class="mr-3 asbolute">
                                    <svg class="w-6 h-6 text-pink-500" xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1" />
                                    </svg>
                                </a>
                                <h2 class="text-2xl font-medium tracking-wide text-gray-900"><?php echo $heading; ?>
                                </h2>
                            </div>
                            <?php if ($alpine): ?>
                            <span
                                class="inline-flex items-center px-3 py-0.5 rounded-full text-sm font-medium leading-5 bg-green-100 text-green-800">
                                Alpine JS
                            </span>
                            <?php endif; ?>
                        </div>


                        <?php echo yoyo_render($name, $variables ?? [], $attributes ?? []); ?>

                        <?php if ($name == 'counter'): ?>
                        <div
                            class="flex items-center justify-between space-y-3 sm:space-y-0 bg-gray-50 mt-6 p-3 text-gray-700 rounded-lg font-medium py-3">
                            <div>
                                Count : <span x-data="{ count: 0 }" @counter:updated.window="count = $event.detail"
                                    x-text="count"></span>
                                <span class="ml-3 italic text-gray-600">updated with Alpine JS using server-emitted
                                    event</span>
                            </div>
                            <div>
                                <span
                                    class="inline-flex items-center px-3 py-0.5 rounded-full text-sm font-medium leading-5 bg-green-100 text-green-800">
                                    Alpine JS
                                </span>
                            </div>
                        </div>
                        <?php endif; ?>


                    </div>

                </div>
                <?php endforeach; ?>

            </div>

        </div>

        <div class="py-8 w-full flex">
            <p class="text-sm text-gray-500 mx-auto">© <?php echo date('Y'); ?> ClickFWD LLC. All rights reserved.</p>
        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.6.0/dist/alpine.min.js"></script>

</body>

</html>