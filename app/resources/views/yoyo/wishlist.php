<?php
$entries = require __DIR__.'/../../../test-data.php';
$entry = $entries[$id];

if (isset($liked)) {
    $emitTo('#wishlist-counter', 'refresh', ['liked' => 1]);
}

$liked = $liked ?? false;

// $emitTo('#wishlist-counter','refresh');
?>
<div class="my-3 flex flex-row items-center space-x-3 py-2 px-4 border border-gray-300 bg-gray-50 sm:rounded-md">
    
    <span class="font-bold text-lg"><?php echo $entry['title']; ?></span>
    
    <?php if ($liked): ?>
    
        <a yoyo:vars="liked: 0" href="#" >
            <svg class="w-8 h-8 text-red-600" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
            </svg>
        </a>
    
    <?php else: ?>

        <a yoyo:vars="liked: 1" href="#">
            <svg class="w-8 h-8 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
            </svg>
        </a>
        
    <?php endif; ?>
</div>