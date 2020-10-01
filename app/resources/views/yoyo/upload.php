<form class="flex flex-col space-y-4 w-72">  

    <div class="mt-6">
        <label for="photo" class="sr-only">
            Photo
        </label>
        <div class="mt-2 sm:mt-0 sm:col-span-2">
            <div class="flex items-center">
                <span class="flex-shrink-0 h-12 w-12 rounded-full overflow-hidden bg-gray-100">
                <?php if ($this->image): ?>
                    <div class="w-full h-full">
                        <img src="data:image/jpg;base64,<?php echo $this->image; ?>" />
                    </div>
                <?php else: ?>
                    <svg class="h-full w-full text-gray-300" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M24 20.993V24H0v-2.996A14.977 14.977 0 0112.004 15c4.904 0 9.26 2.354 11.996 5.993zM16.002 8.999a4 4 0 11-8 0 4 4 0 018 0z" />
                    </svg>
                <?php endif; ?>
                </span>
                <?php if ($this->image): ?>
                <span class="ml-5 inline-flex rounded-md shadow-sm">
                    <button 
                        yoyo:on="click"
                        class="inline-flex items-center px-4 py-2 border border-transparent leading-5 font-medium rounded text-white bg-pink-600 hover:bg-pink-500 focus:outline-none focus:border-pink-700 focus:shadow-outline-pink active:bg-pink-700 transition ease-in-out duration-150"
                        >
                        Refresh
                    </button>
                </span>      
                <?php else: ?>              
                <span class="ml-5">
                    <input name="photo" type="file" yoyo:post="render"  />
                </span>
                <?php endif; ?>
            </div>
        </div>
    </div>       
</form>