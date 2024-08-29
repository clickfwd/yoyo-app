<div>
    <form class="flex flex-col space-y-4 w-72" yoyo:trigger="input" yoyo:sync="this:replace">  
            <div class="mt-1 relative rounded-md shadow-sm">
                <input type="text" id="q" 
                    name="q"                    
                    value="<?php echo $q ?? ''; ?>"
                    class="form-input block w-full sm:text-sm sm:leading-5" placeholder="Search"
                />
            </div>
    </form>

    <?php if ($this->results): ?>
        <div>
        <ul class="space-y-3">
            <?php foreach ($this->results as $row):?>
                <li class="py-2 px-4 border border-gray-300 bg-gray-50 sm:rounded-md">
                    <?php echo $row['title']; ?>
                </li>
            <?php endforeach; ?>
            </ul>
        </div>
    <?php elseif ($spinning && $q): ?>
        <p>No results found</p>
    <?php endif; ?>
</div>