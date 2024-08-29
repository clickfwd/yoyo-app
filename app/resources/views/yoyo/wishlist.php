<?php
$entries = require __DIR__.'/../../../test-data.php';
$entry = $entries[$id];
$liked = $liked ?? false;
$this->emitToWithSelector('#wishlist-counter', $liked ? 'liked' : 'disliked');
?>

<div yoyo:val.id="<?php echo $id; ?>" class="my-3 flex flex-row items-center space-x-3 py-2 px-4 border border-gray-300 bg-gray-50 sm:rounded-md">
    
    <span class="font-bold text-lg"><?php echo $entry['title']; ?></span>
    
    <?php if ($liked): ?>
    
        <button type="button" yoyo:get="refresh" yoyo:val.liked="0" class="focus:outline-none">
            <svg class="w-8 h-8 text-red-600" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
            </svg>
        </button>
    
    <?php else: ?>

        <button type="button" yoyo:get="refresh" yoyo:val.liked="1" class="focus:outline-none">
            <svg class="w-8 h-8 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
            </svg>
         </button>
        
    <?php endif; ?>
</div>