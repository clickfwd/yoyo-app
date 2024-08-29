<?php if ($success): ?>

    <div class="text-xl text-gray-700 font-medium" yoyo:ignore>
        Thank you for registering!
    </div>

<?php else: ?>

    <form class="space-y-4 w-72" yoyo:post="register" yoyo:on="submit">  
        <div class="mt-3">
            <div>
                <label for="name" class="block text-sm font-medium leading-5 text-gray-700">Name</label>
                <div class="mt-1 relative rounded-md shadow-sm">
                    <input id="name"
                        name="data[name]"
                        required
                        yoyo:post="validate"
                        yoyo:on="keyup delay:300ms changed" 
                        value="<?php echo $data['name'] ?? ''; ?>"
                        class="form-input block w-full sm:text-sm sm:leading-5" placeholder="Your Name"
                    >
                </div>
                <?php if ($spinning && ! ($data['name'] ?? '')): ?>
                    <p class="mt-2 text-sm text-red-600" id="name-error">Name is required.</p>
                <?php endif; ?>
            </div> 
        </div>
        <div class="mt-3">
            <div>
                <label for="email" class="block text-sm font-medium leading-5 text-gray-700">Email</label>
                <div class="mt-1 relative rounded-md shadow-sm">
                    <input id="email" 
                        name="data[email]"
                        required
                        yoyo:validate="true"
                        yoyo:post="validate"
                        type="email"
                        yoyo:on="keyup delay:300ms changed" 
                        value="<?php echo $data['email'] ?? ''; ?>"
                        class="form-input block w-full sm:text-sm sm:leading-5" placeholder="you@example.com"
                    />
                </div>
                <?php if ($spinning && ! ($data['email'] ?? '')): ?>
                    <p class="mt-2 text-sm text-red-600" id="email-error">Email is required.</p>
                <?php endif; ?>
            </div>            
            </div>

        <span class="mt-6 inline-flex rounded-md shadow-sm">
            <button 
                type="submit" 
                class="inline-flex items-center px-4 py-2 border border-transparent leading-5 font-medium rounded text-white bg-pink-600 hover:bg-pink-500 focus:outline-none focus:border-pink-700 focus:shadow-outline-pink active:bg-pink-700 transition ease-in-out duration-150"
                >
                Submit
            </button>
        </span>
    </form>
    
    
<?php endif; ?>