@props(['route'])

<button type="button" @click="open = false" class="w-31 h-31 absolute top-8 left-16">
    <svg width="31" height="31" viewBox="0 0 31 31" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M3 3L28 28" stroke="black" stroke-width="5" stroke-linecap="round"/>
        <path d="M28 3L3 28" stroke="black" stroke-width="5" stroke-linecap="round"/>
    </svg>
</button>
