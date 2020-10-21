<form id="list-with-modal-edit"
    yoyo:post="save"
    yoyo:target="#list-with-modal"
    x-data="{
        show: false,
        focusables() {
            // All focusable element types...
            let selector = 'a, button, input:not([type=\'hidden\']), textarea, select, details, [tabindex]:not([tabindex=\'-1\'])'

            return [...$el.querySelectorAll(selector)]
                // All non-disabled elements...
                .filter(el => ! el.hasAttribute('disabled'))
        },
        firstFocusable() { return this.focusables()[0] },
        lastFocusable() { return this.focusables().slice(-1)[0] },
        nextFocusable() { return this.focusables()[this.nextFocusableIndex()] || this.firstFocusable() },
        prevFocusable() { return this.focusables()[this.prevFocusableIndex()] || this.lastFocusable() },
        nextFocusableIndex() { return (this.focusables().indexOf(document.activeElement) + 1) % (this.focusables().length + 1) },
        prevFocusableIndex() { return Math.max(0, this.focusables().indexOf(document.activeElement)) -1 },
        autofocus() { let focusable = $el.querySelector('[autofocus]'); if (focusable) focusable.focus() }
    }"
    x-init="$watch('show', value => {
        value && setTimeout(autofocus, 50);
        if (value) {
            document.body.classList.add('h-screen','overflow-hidden');
        } else {
            document.body.classList.remove('h-screen','overflow-hidden');
        }
    }); show = true"
    x-on:close.stop="show = false" 
    x-on:keydown.escape.window="show = false" 
    x-on:keydown.tab.prevent="$event.shiftKey || nextFocusable().focus()" 
    x-on:keydown.shift.tab.prevent="prevFocusable().focus()" 
    x-show="show" 
>
    <div x-show.transition.opacity="show" class="fixed z-20 inset-0  bg-gray-500 bg-opacity-75 flex items-center justify-center" role="dialog" aria-modal="true">
        <div 
            class="overflow-hidden w-full max-w-screen-sm bg-white shadow-xl flex flex-col absolute sm:rounded">

            <div class="px-5 py-4 flex items-center justify-between">
                <h3 class="text-lg leading-6 font-medium text-gray-900">
                    Edit
                </h3>


                <button class="text-gray-400 hover:text-gray-600 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue" x-on:click="show = false">
                    <svg class="w-4 fill-current transition duration-150" viewBox="0 0 512.001 512.001">
                        <path d="M284.286 256.002L506.143 34.144c7.811-7.811 7.811-20.475 0-28.285-7.811-7.81-20.475-7.811-28.285 0L256 227.717 34.143 5.859c-7.811-7.811-20.475-7.811-28.285 0-7.81 7.811-7.811 20.475 0 28.285l221.857 221.857L5.858 477.859c-7.811 7.811-7.811 20.475 0 28.285a19.938 19.938 0 0014.143 5.857 19.94 19.94 0 0014.143-5.857L256 284.287l221.857 221.857c3.905 3.905 9.024 5.857 14.143 5.857s10.237-1.952 14.143-5.857c7.811-7.811 7.811-20.475 0-28.285L284.286 256.002z"/>
                    </svg>
                </button>
            </div>

            <div class="p-5">
                <div class="">
                    <label for="title" class="block text-sm font-medium leading-5 text-gray-700">
                        Title
                    </label>

                    <div class="mt-2">
                        <div class="flex rounded-md shadow-sm">
                            <input id="title" class="flex-1 form-input border-cool-gray-300 block w-full transition duration-150 ease-in-out" 
                                name='title'
                                placeholder="Title"
                                autofocus
                                value="<?php echo $title; ?>"
                            >
                        </div>
                    </div>
                </div>
            </div>

            <div class="px-6 py-3 bg-gray-100 text-right">
                <span class="ml-2 inline-flex rounded-md shadow-sm">
                    <button type="button" 
                        class="inline-flex justify-center w-full rounded-md border border-gray-300 px-4 py-2 bg-white text-base leading-6 font-medium text-gray-700 shadow-sm hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue transition ease-in-out duration-150 sm:text-sm sm:leading-5"
                        x-on:click="show = false"
                    >
                        Cancel
                    </button>
                </span>

                <span class="ml-2 inline-flex rounded-md shadow-sm">
                    <button 
                        type="submit"    
                        class="py-2 px-4 border rounded-md text-sm leading-5 font-medium focus:outline-none focus:border-pink-300 focus:shadow-outline-pink transition duration-150 ease-in-out text-white bg-pink-600 hover:bg-pink-500 active:bg-pink-700 border-indipinkgo-600"
                    >
                        Save
                    </button>
                </span>
            </div>

        </div>


    </div>

    <input type="hidden" name="itemId" value="<?php echo $itemId; ?>" />

</form>