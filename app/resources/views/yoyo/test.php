<div id="test" x-data="{ count: 0 }">
    <button class="px-4" yoyo:on="click delay:1ms" x-on:click="count++">+</button>
    <input name="count" x-model="count" />
    <span x-text="count">0</span>
</div>