<div id="list-with-modal">
    <ul class="border divide-y shadow-lg rounded-lg overflow-hidden">
    <?php foreach ($this->results as $id => $entry): ?>
        <li class="py-4 px-6 bg-gray-50 flex justify-between">
            <p><?php echo $entry['title']; ?></p>
            <button 
                type="button" 
                class="text-gray-500 hover:text-gray-400 text-sm leading-5 font-medium focus:outline-none focus:text-gray-700 focus:underline transition duration-150 ease-in-out"
                yoyo:get="edit(<?php echo $id; ?>)"
                yoyo:target="#list-with-modal-edit"
            >
                Edit
            </button>
        </li>
    <?php endforeach; ?>
    </ul>

    <?php if ($spinning && $this->action !== 'reset'): ?>
    <span class="mt-8 inline-flex rounded-md shadow-sm">
        <button 
            yoyo:get="reset"
            class="inline-flex items-center px-4 py-2 border border-transparent leading-5 font-medium rounded text-white bg-pink-600 hover:bg-pink-500 focus:outline-none focus:border-pink-700 focus:shadow-outline-pink active:bg-pink-700 transition ease-in-out duration-150"
            >
            Reset
        </button>
    </span>    
    <?php endif; ?>

</div>
