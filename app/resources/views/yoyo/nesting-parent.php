<?php
$entries = require __DIR__.'/../../../test-data.php';
$keys = array_rand($entries, 3);
$entries = array_intersect_key($entries, array_flip($keys));

$this->emitTo('#wishlist-counter', 'reset-likes');
?>
<div>

    <?php foreach ($entries as $id => $entry): ?>
        
        <?php echo yoyo_render('wishlist', ['id' => $id]); ?>
    
    <?php endforeach; ?>

    <span class="inline-flex rounded-md shadow-sm">
        <button 
            yoyo
            class="inline-flex items-center px-4 py-2 border border-transparent leading-5 font-medium rounded text-white bg-pink-600 hover:bg-pink-500 focus:outline-none focus:border-pink-700 focus:shadow-outline-pink active:bg-pink-700 transition ease-in-out duration-150"
            >
            Refresh
        </button>
    </span>    
    
</div>