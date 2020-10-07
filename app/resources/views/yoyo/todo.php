<section class="todoapp" x-data="{
    focus() {
        setTimeout(() => { 
            let input = document.getElementById('edit')
            const value = input.value
            input.value = null
            input.focus(); input.value = value; 
        })
    }
}" x-on:todo-edit.window="focus()" 
>
    <header class="flex flex-row items-center">
        <div class="block w-full sm:text-sm sm:leading-5 flex flex-row items-center space-x-2">
            <?php if ($this->entries): ?>
            <a role="button" href="#" yoyo:get="toggleAll">
                <svg class="<?php echo $this->count == $this->count_completed ? 'text-gray-700' : 'text-gray-300'; ?> w-4 h-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="4" d="M19 9l-7 7-7-7" />
                </svg>
            </a>
            <?php endif; ?>
            <input yoyo:on="add-new" yoyo:post="add" x-on:keydown.enter="if($event.target.value !== '') $dispatch('add-new')" name="task" class="block w-full form-input" placeholder="What needs to be done?" <?php echo ! $this->editing && $spinning ? 'autofocus' : ''; ?>>
        </div>        
    </header>

    <?php if ($this->entries): ?>
    <section class="my-6">
        <ul class="space-y-2">
            <?php
            foreach ($this->entries as $entry):
            $status = $entry['status'];
            ?>
            <li class="space-x-2">
                <?php if ($this->editing == $entry['id']): ?>
                    <div class="flex my-3 relative rounded-md shadow-sm">
                        <input id="edit" 
                            yoyo:on="blur" yoyo:post="save" yoyo:vars="id:<?php echo $entry['id']; ?>" 
                            x-on:keydown.enter="if($event.target.value !== '') $event.target.blur()" 
                            class="form-input block w-full sm:text-sm sm:leading-5" name="task" value="<?php echo htmlspecialchars($entry['title']); ?>"
                        >
                    </div>
                <?php else: ?>
                    <div 
                        yoyo:vars="id:<?php echo $entry['id']; ?>"
                        class="group flex space-x-4 items-center group py-2 px-4 border border-gray-300 bg-gray-50 sm:rounded-md <?php echo $status == 'completed' ? 'completed' : ''; ?> <?php echo $this->editing == $entry['id'] ? 'editing' : ''; ?>">
                        
                        <input yoyo:get="toggle" class="form-checkbox" type="checkbox" <?php echo $status == 'completed' ? 'checked' : ''; ?> />
                        
                        <a role="button" href="#" yoyo:get="edit"
                            class="w-full block <?php echo $status == 'completed' ? 'line-through text-gray-400' : ''; ?>">
                            <?php echo htmlspecialchars($entry['title']); ?>
                        </a>
                        
                        <a role="button" href="#" yoyo:get="delete" 
                            class="w-4 opacity-0 transition duration-500 ease-in-out group-hover:opacity-100"
                        >
                            <svg class="text-red-600 w-4 h-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </a>
                    </div>
                <?php endif; ?>
            </li>
            <?php endforeach; ?>
        </ul>
    </section>
    <?php endif; ?>

    <?php if ($this->count): ?>
    <footer class="mt-6 flex flex-col space-y-8 sm:space-y-0 sm:flex-row">
        <span class="text-gray-600 font-medium text-center sm:text-left"><?php echo $this->count_active; ?> items left</span>
        <div class="flex-1 flex flex-row space-x-4 justify-center items-center">
            <span class="inline-flex rounded-md shadow-sm">
                <button yoyo:get="render" yoyo:vars="filter:''" type="button" 
                    class="<?php  echo ! $filter ? 'text-gray-700' : 'text-gray-400'; ?> inline-flex items-center px-2.5 py-1.5 border border-gray-300 text-xs leading-4 font-medium rounded bg-white focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:text-gray-800 active:bg-gray-50 transition ease-in-out duration-150">
                    All
                </button>
            </span>
            <span class="inline-flex rounded-md shadow-sm">
                <button yoyo:get="render" yoyo:vars="filter:'active'" type="button" 
                class="<?php  echo $filter == 'active' ? 'text-gray-700' : 'text-gray-400'; ?> inline-flex items-center px-2.5 py-1.5 border border-gray-300 text-xs leading-4 font-medium rounded bg-white focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:text-gray-800 active:bg-gray-50 transition ease-in-out duration-150">
                    Active
                </button>
            </span>
            <span class="inline-flex rounded-md shadow-sm">
                <button yoyo:get="render" yoyo:vars="filter:'completed'" type="button" 
                    class="<?php  echo $filter == 'completed' ? 'text-gray-700' : 'text-gray-400'; ?> inline-flex items-center px-2.5 py-1.5 border border-gray-300 text-xs leading-4 font-medium rounded bg-white focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:text-gray-800 active:bg-gray-50 transition ease-in-out duration-150">
                    Completed
                </button>
            </span>
        </div>
        <?php if ($this->count_completed): ?>
        <button yoyo:get="clearCompleted" class="text-gray-600">Clear completed</button>
        <?php endif; ?>
    </footer>
    <?php endif; ?>
</section>