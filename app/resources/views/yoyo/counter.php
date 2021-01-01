<div class="flex space-x-3">
    
    <span class="inline-flex rounded-md shadow-sm">
        <button 
            yoyo:get="decrement" 
            class="inline-flex items-center px-2.5 py-1.5 border border-transparent text-xs leading-4 font-medium rounded text-white bg-pink-600 hover:bg-pink-500 focus:outline-none focus:border-pink-700 focus:shadow-outline-pink active:bg-pink-700 transition ease-in-out duration-150"
        >
            -
        </button>
    </span>

    <span class="inline-flex rounded-md shadow-sm">
        <button 
            yoyo:get="increment" 
            class="inline-flex items-center px-2.5 py-1.5 border border-transparent text-xs leading-4 font-medium rounded text-white bg-pink-600 hover:bg-pink-500 focus:outline-none focus:border-pink-700 focus:shadow-outline-pink active:bg-pink-700 transition ease-in-out duration-150"
            >
            +
        </button>
    </span>

    <span class="font-bold"><?php echo $count; ?></span>
</div>