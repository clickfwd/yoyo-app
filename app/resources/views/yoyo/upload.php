<form class="flex flex-col space-y-4">  

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
                    
    <?php if ($this->error): ?>
    <div class="rounded-md bg-red-50 p-4">
        <div class="flex">
            <div class="flex-shrink-0">
                <svg class="h-5 w-5 text-red-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd" />
                </svg>
                </div>
                <div class="ml-3">
                <h3 class="text-sm leading-5 font-medium text-red-800">
                    <?php echo $this->error; ?>
                </h3>
            </div>
        </div>
    </div>
    <?php endif; ?>
    
</form>