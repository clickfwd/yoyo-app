<div>
    <form class="flex flex-col space-y-4 w-72"     
        >  
            <div class="mt-1 relative rounded-md shadow-sm">
                <input id="q" 
                    name="q"
                    yoyo:on="keyup delay:300ms changed"
                    value="<?php echo $q ?? ''; ?>"
                    class="form-input block w-full sm:text-sm sm:leading-5" placeholder="Search"
                >
            </div>
    </form>

    <?php if ($results = $find()): ?>
        <div>
        <ul class="space-y-3">
            <?php foreach ($results as $row):?>
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