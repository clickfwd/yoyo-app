<html>
<head>
<title>Yoyo Demo App</title>
  <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/@tailwindcss/ui@latest/dist/tailwind-ui.min.css" rel="stylesheet">
  <?php yoyo_scripts(); ?>
</head>
<body class="bg-gray-100 p-12">
  
    <h1 class="text-5xl font-bold text-gray-500 my-6 tracking-wider">
        <span class="bg-clip-text text-transparent bg-gradient-to-r from-teal-400 to-blue-500">yoyo</span> <span class="text-gray-300 mx-2">|</span> <span class="text-gray-800">standalone</span> app
    </h1>

    <div class="mt-16">

        <?php
        $components = [
        // 'test' => [],
        'counter' => [
            'variables' => ['count' => 3],
        ],
        'nesting-parent' => [],
        'wishlist-counter' => [
            'attributes' => ['id' => 'wishlist-counter'],
        ],
        'live-search' => [],
        'load-more' => [],
        'pagination' => [],
        'dynamic-content' => [],
        'polling' => [],
        // 'load-more-two' => [],
        'form' => [],
        ];
        ?>

        <?php foreach ($components as $name => $options): ?>

        <div class="bg-white p-6 my-4">

            <?php echo yoyo_render($name, $options['variables'] ?? [], $options['attributes'] ?? []); ?>
        
            <?php if ($name == 'counter'): ?>
            <div class="bg-gray-50 mt-6 p-3 text-gray-700 font-medium py-3">
                Count : <span 
                x-data="{ count: 0 }" 
                @counter:updated.window="count = $event.detail.params.count;" 
                x-text="count"
                ></span>
                <span class="ml-3 italic text-gray-600">updated with Alpine JS using server-emitted event</span>
            </div>
            <?php endif; ?>

        
        </div>
        <?php endforeach; ?>

    </div>
    
  <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.6.0/dist/alpine.min.js"></script>

</body>
</html>