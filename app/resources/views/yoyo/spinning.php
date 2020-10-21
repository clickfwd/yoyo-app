<div>
        <p class="italic text-gray-500">Showcases loading state options. A state change can be added to any element within Yoyo components, and it can listen for specific component actions.</p>
    
    <div class="mt-8">
        <div class="flex flex-col justify-center divide-y sm:divide-y-0">
            
            <!-- yoyo:spinning -->
            
            <div class="py-3 flex flex-col sm:flex-row items-center text-center sm:text-left space-y-2 sm:space-y-0">
                <div class="w-full sm:w-1/3">
                <span class="flex-shrink-0 inline-flex rounded-md shadow-sm">
                    <button 
                        yoyo:get="normal"
                        yoyo:spinning.attr="disabled"
                        type="button" 
                        class="inline-flex items-center px-4 py-2 border border-transparent leading-5 font-medium rounded text-white bg-pink-600 hover:bg-pink-500 focus:outline-none focus:border-pink-700 focus:shadow-outline-pink active:bg-pink-700 transition ease-in-out duration-150"
                        >
                        <svg yoyo:spinning yoyo:spin-on="all, normal" class="animate-spin -ml-1 mr-3 h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                            <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                            <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                        </svg>                
                        Submit
                    </button>
                </span>
                </div>
                <div class="w-full sm:w-2/3">
                    <p>Show hidden element</p>
                </div>
            </div>

            <!-- yoyo:spinning.delay -->
                        
            <div class="py-3 flex flex-col sm:flex-row items-center text-center sm:text-left space-y-2 sm:space-y-0">
                <div class="w-full sm:w-1/3">
                    <span class="flex-shrink-0 inline-flex rounded-md shadow-sm">
                        <button 
                            yoyo:get="withDelay"
                            yoyo:spinning.attr="disabled"
                            type="button" 
                            class="inline-flex items-center px-4 py-2 border border-transparent leading-5 font-medium rounded text-white bg-pink-600 hover:bg-pink-500 focus:outline-none focus:border-pink-700 focus:shadow-outline-pink active:bg-pink-700 transition ease-in-out duration-150"
                            >
                            <svg yoyo:spinning.delay yoyo:spin-on="all, withDelay" class="animate-spin -ml-1 mr-3 h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                            <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                            <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                            </svg>                
                            Submit
                        </button>
                    </span>
                </div>
                <div class="w-full sm:w-2/3">
                    <p>Show only when update takes longer than 200ms</p>
                </div>
            </div>  
                   
            <!-- yoyo:spinning.remove -->
            
            <div class="py-3 flex flex-col sm:flex-row items-center text-center sm:text-left space-y-2 sm:space-y-0">
                <div class="w-full sm:w-1/3">
                    <span class="flex-shrink-0 inline-flex rounded-md shadow-sm">
                        <button 
                            yoyo:get="hide"
                            yoyo:spinning.attr="disabled"
                            type="button" 
                            class="inline-flex items-center px-4 py-2 border border-transparent leading-5 font-medium rounded text-white bg-pink-600 hover:bg-pink-500 focus:outline-none focus:border-pink-700 focus:shadow-outline-pink active:bg-pink-700 transition ease-in-out duration-150"
                            >
                            Submit
                        </button>
                    </span>
                </div>
                <div class="w-full sm:w-2/3">
                    <p yoyo:spinning.remove yoyo:spin-on="all, hide">Remove element while updating</p>
                </div>
            </div> 

            <!-- yoyo:spinning.class -->
            
            <div class="py-3 flex flex-col sm:flex-row items-center text-center sm:text-left space-y-2 sm:space-y-0">
                <div class="w-full sm:w-1/3">
                    <span class="flex-shrink-0 inline-flex rounded-md shadow-sm">
                        <button 
                            yoyo:get="addClass"
                            yoyo:spinning.attr="disabled"
                            type="button" 
                            class="inline-flex items-center px-4 py-2 border border-transparent leading-5 font-medium rounded text-white bg-pink-600 hover:bg-pink-500 focus:outline-none focus:border-pink-700 focus:shadow-outline-pink active:bg-pink-700 transition ease-in-out duration-150"
                            >
                            Submit
                        </button>
                    </span>
                </div>
                <div class="w-full sm:w-2/3 transition-all duration-500" yoyo:spin-on="all, addClass" yoyo:spinning.class="py-2 px-4 rounded flex justify-center bg-green-100 text-green-800">
                    <p>Add CSS classes to an element</p>
                </div>
            </div>

            <!-- yoyo:spinning.attr -->
            
            <div class="py-3 flex flex-col sm:flex-row items-center text-center sm:text-left space-y-4 sm:space-y-0">
                <div class="w-full sm:w-1/3">
                    <span class="flex-shrink-0 inline-flex rounded-md shadow-sm">
                        <button 
                            yoyo:get="addAttribute"
                            yoyo:spinning.attr="disabled"
                            type="button" 
                            class="inline-flex items-center px-4 py-2 border border-transparent leading-5 font-medium rounded text-white bg-pink-600 hover:bg-pink-500 focus:outline-none focus:border-pink-700 focus:shadow-outline-pink active:bg-pink-700 transition ease-in-out duration-150"
                            >
                            Submit
                        </button>
                    </span>
                </div>
                <div class="w-full sm:w-2/3 py-4 h-4 flex items-center">
                    <div class="w-full mt-1 relative rounded-md shadow-sm">
                        <input id="name"
                            name="name"
                            value="Add attributes to element"
                            class="form-input block w-full sm:text-sm sm:leading-5 disabled:opacity-25"
                            yoyo:spinning.attr="disabled" yoyo:spin-on="all, addAttribute"
                        >
                    </div>
                </div>
            </div>    
        </div>                       
    </div>

    <!-- yoyo:spinning show all -->
                
    <div class="py-3 mx-auto sm:mx-0 text-center">
        <div class="mt-8">
            <span class="flex-shrink-0 inline-flex rounded-md shadow-sm">
                <button 
                    yoyo:get="all"
                    yoyo:spinning.attr="disabled"
                    type="button" 
                    class="inline-flex items-center px-4 py-2 border border-transparent leading-5 font-medium rounded text-white bg-blue-600 hover:bg-blue-500 focus:outline-none focus:border-blue-700 focus:shadow-outline-blue active:bg-blue-700 transition ease-in-out duration-150"
                    >
                    Trigger All Loading States
                </button>
            </span>
        </div>
    </div>                 

</div>